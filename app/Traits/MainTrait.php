<?php


namespace App\Traits;


use App\Models\Company;

trait MainTrait
{
    public function mapData ($city=null, $category1=null)
    {
        if ($city) {
            $companiesMap = $city->companies->where('active', true)->whereNotNull('coordinates');
        }

        elseif ($category1) {
            $companiesMap = $category1->companies->where('active', true)->whereNotNull('coordinates');
        }

        else {
            $companiesMap = Company::where('active', true)->whereNotNull('coordinates')->get();
//                    $companiesMap = $companies->whereNotNull('coordinates');
//                    dd($companiesMap);
        }

        $map_data = array("type" => "FeatureCollection", "features" => array());


        foreach ($companiesMap as $company) {

            $coordinates = explode(",", $company->coordinates);
            if(!$category1) {
//                $categories = $item->categories;
                $category = $company->categories[0];
            }
            else {
                $category = $category1;
            }


            $arr = array("type" => "Feature",
                "id" => $company['id'],
                "geometry" => array("type" => "Point",
                    "coordinates" => [
                        (float)$coordinates[0], (float)$coordinates[1]
                    ]),
                "properties" => array("balloonContentHeader" => "<h2>${company['name']}</h2>",
                    "balloonContentBody" =>
                        "<img class='balloon' src='/img/uploads/thumbnail/${company['img']}' alt='logo'>
<p>Скидка по карте: ${company['discount']}</p>
<p>График: ${company['working_hours']}</p>
<p>Адрес: ${company['address']}</p>
<p>Сайт: ${company['site']}</p>
<p>Тел: ${company['tel']}</p>
<p>Краткое описание: ${company['description']}</p>",
                    "clusterCaption" => $category['name'],
                    "hintContent" => $company['name'],
                    "iconCaption" => $company['name']),
                "options" => array("preset" => "islands#blueDotIcon",//StretchyIcon circleDotIcon
                    "iconColor" => $category->color));


            array_push($map_data['features'], $arr);
        }

        return json_encode($map_data, JSON_UNESCAPED_UNICODE);
    }
}
