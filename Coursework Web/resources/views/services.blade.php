@extends('parent')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Services.css') }}">
@endsection
@section('p_in_menu')
    <p><a href="{{ route('main') }}">Про нас</a></p>
    <p><a href="{{ route('services') }}"><strong>Послуги</strong></a></p>
    <p><a href="{{ route('contacts') }}">Контакти</a></p>
@endsection
@section('span_in_menu')
    <span><a href="{{ route('main') }}">Про нас</a></span>
    <span><a href="{{ route('services') }}"><strong>Послуги</strong></a></span>
    <span><a href="{{ route('contacts') }}">Контакти</a></span>
@endsection
@section('content')
    <div>
        <h1>
            Доступні послуги в салоні манікюру Nails:
        </h1>
    </div>
    <div>
        <div class="services">
            <div class="photo">
                <div>
                    <img src="{{ asset('Photo/1.jpeg') }}" alt="Покриття гель лаком">
                </div>
                <div class="text_for_photo">
                    <p class="strong">Покриття гель лаком</p>
                    <p>Ціна: 200 грн</p>
                    <p>Тривалість роботи: 90 хв</p>
                </div>
            </div>
            <div class="photo">
                <div>
                    <img src="{{ asset('Photo/3.jfif') }}" alt="Укріплення">
                </div>
                <div class="text_for_photo">
                    <p class="strong">Укріплення</p>
                    <p>Ціна: 250 грн</p>
                    <p>Тривалість роботи: 70 хв</p>
                </div>
            </div>
            <div class="photo">
                <div>
                    <img src="{{ asset('Photo/4.jfif') }}" alt="Нарощення">
                </div>
                <div class="text_for_photo">
                    <p class="strong">Нарощення</p>
                    <p>Ціна: 270 грн</p>
                    <p>Тривалість роботи: 150 хв</p>
                </div>
            </div>
        </div>
        <div class="services">
            <div class="photo">
                <div>
                    <img src="{{ asset('Photo/5.jpg') }}" alt="Педикюр">
                </div>
                <div class="text_for_photo">
                    <p class="strong">Педикюр</p>
                    <p>Ціна: 300 грн</p>
                    <p>Тривалість роботи: 120 хв</p>
                </div>
            </div>
            <div class="photo long">
                <div>
                    <img src="{{ asset('Photo/2.jpg') }}" alt="Корекція">
                </div>
                <div class="text_for_photo">
                    <p class="strong">Корекція</p>
                    <p>Ціна: 250 грн</p>
                    <p>Тривалість роботи: 60 хв</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('sign_up') }}">
            <img class="Action" src="{{ asset('Icons/Action.png') }}" alt="Записатися">
        </a>
    </div>
@endsection
