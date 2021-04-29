<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $name, $rating, $review;
    public $comments;
    public $company_id;

    protected $rules = [
        'name' => 'required|alpha_dash|min:3|max:32',
        'rating' => 'required|digits_between:1,5',
        'review' => 'max:2000',
    ];

    protected $messages = [
        'name.required' => 'Имя обязательно для заполнения',
        'name.alpha_dash' => 'В имени недопустимые символы',
        'name.min' => 'Минимальное количество символов в имени :min',
        'rating.required' => 'Необходимо поставить оценку данной организации',
        'rating.digits_between' => 'Оценка должна быть от 1 до 5 звезд',
        'review.max' => 'Максимальное количество символов для отзыва 2000',
    ];


    public function render()
    {
//        $this->comments = Comment::where('company_id', $this->company_id)->where('published', true)->get();
        return view('livewire.comments');
    }

    public function setLike($id)
    {
        $comment = $this->comments->find($id);
        $likes = session($id);
        if($likes == 'like') {
            $comment->likes--;
            session([$id => false]);
        }

        else {
            if ($likes == 'dislike')
                $comment->dislikes--;
            $comment->likes++;
            session([$id => 'like']);
        }
        $comment->save();
    }

    public function setDislike($id)
    {
        $comment = $this->comments->find($id);
        $likes = session($id);
        if($likes == 'dislike') {
            $comment->dislikes--;
            session([$id => false]);
        }

        else {
            if ($likes == 'like')
                $comment->likes--;

            $comment->dislikes++;
            session([$id => 'dislike']);
        }
        $comment->save();
    }


    public function submit()
    {
        $this->validate();

        Comment::create([
            'company_id' => $this->company_id,
            'name' => $this->name,
            'rating' => $this->rating,
            'review' => $this->review,
        ]);

        $this->resetInput();
        session()->flash('success', 'Спасибо за Ваше мнение! Отзыв отправлен на модерацию');
    }

    public function done()
    {
        session()->forget('success');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->rating = null;
        $this->review = null;
    }
}
