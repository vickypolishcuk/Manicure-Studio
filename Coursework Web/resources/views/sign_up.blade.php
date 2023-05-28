@extends('parent')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Sign_up.css') }}">
@endsection
@section('p_in_menu')
    <p><a href="{{ route('main') }}">Про нас</a></p>
    <p><a href="{{ route('services') }}">Послуги</a></p>
    <p><a href="{{ route('contacts') }}">Контакти</a></p>
@endsection
@section('span_in_menu')
    <span><a href="{{ route('main') }}">Про нас</a></span>
    <span><a href="{{ route('services') }}">Послуги</a></span>
    <span><a href="{{ route('contacts') }}">Контакти</a></span>
@endsection
@section('content')
    <div>
        <h1>
            Запис в салон манікюру Nails
        </h1>
    </div>
    <div>
        <p>
            Для запису в салон заповніть всі поля нижче:
        </p>
    </div>
    <div>
        <form method="POST" action="{{ route('form_submit') }}">
            @csrf
            <label for="name">Ім'я:
                <input type="text" name="name" placeholder="Євгенія Євгенівна" required>
            </label><br></br>
            <label for="number">Телефон:
                <input type="tel" name="number" placeholder="099-69-69-229" pattern="0[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{3}" required>
            </label><br></br>
            <label for="services">Послуги:
                <select name="services" required>
                    <option value="covering">Покриття гель лаком</option>
                    <option value="strengthening">Укріплення</option>
                    <option value="build-up">Нарощення</option>
                    <option value="pedicure">Педикюр</option>
                    <option value="correction">Корекція</option>
                </select>
            </label><br></br>
            <label for="wish">Побажання:
                <input type="text" name="wish" placeholder="Ніжно рожевий колір">
            </label><br></br>
            <input type="image" class="Action" src="{{asset('Icons/Send.png')}}" alt="Відправити">
        </form>
    </div>
@endsection
