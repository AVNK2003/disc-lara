<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Traits\MainTrait;

class CompanyController extends Controller
{
    use MainTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('user')->get();
        return view('admin.company.company', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.company-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        $this->saveCompany($request, $company);

        return redirect()->route('company.index')->with('success', 'Организация успешно отправлена на модерацию');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $comments = \App\Models\Comment::where('company_id', $company->id)
            ->where('published', true)
            ->get();
        $company->views++;
        $company->save();

        return view('admin.company.show', [
            'cabinet' => true,
            'company' => $company,
            'comments'=> $comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('admin.company.company-edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->saveCompany($request, $company);

        return redirect()->route('company.index')->with('success', 'Организация успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $filename = $company->img;
        if ($filename) {
            unlink(public_path('img/uploads/thumbnail/'.$filename));
            unlink(public_path('img/uploads/'.$filename));
        }

        $company->delete();
        return redirect()->route('company.index')->with('success', 'Организация успешно удалена');
    }

    private function saveCompany(Request $request, Company $company)
    {
        $image = $request->file('img');
        if ($image) {
            $imgName = uniqid().'.'.$image->extension();

            $destinationPath = public_path('img/uploads/thumbnail/');
            $img = Image::make($image->path());
            $img->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.$imgName);

            $destinationPath = public_path('img/uploads');
            $image->move($destinationPath, $imgName);

            $company->img = $imgName;
        }

        $company->fill($request->except('categories', 'cities', 'img'))->save();
        $company->categories()->sync($request->categories);
        $company->cities()->sync($request->cities);
    }

    public function indexForAll()
    {
        $companies = Company::where('active', true)->get();

        return view('index', [
            'companies' => $companies,
            'mapData' => $this->mapData(),
        ]);
    }

    public function showCompanyForAll(Company $company)
    {
        $comments = \App\Models\Comment::where('company_id', $company->id)
                                        ->where('published', true)
                                        ->get();
        $company->views++;
        $company->save();
        return view('admin.company.show', [
            'cabinet' => false,
            'company' => $company,
            'comments'=> $comments,
        ]);
    }

    public function toggleActive(Company $company)
    {
        $company->active = !$company->active;
        $company->save();
        $status = $company->active ? 'Организация размещена в каталоге' : 'Организация убрана из каталога';
        return redirect()->route('company.index')->with('success', $status);
    }
}
