<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class WebController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function services()
    {
        return view('services');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function sign_up()
    {
        return view('sign_up');
    }
    public function submit(Request $request)
    {
        // Отримання даних з форми
        $form = new Form(); // створюємо нову модель та заповнюємо її введеними значеннями
        $form->name = $request->input('name');
        $form->number = $request->input('number');
        $form->services = $request->input('services');
        $wish = $request->input('wish');
        if(isNull($wish)) {
            $form->wish = '';
        }
        else
            $form->wish = $wish;
        $form->save();

        // Повернення відповіді
        return view('submit');
    }
}
