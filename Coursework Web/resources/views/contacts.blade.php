@extends('parent')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Contacts.css') }}">
@endsection
@section('p_in_menu')
    <p><a href="{{ route('main') }}">Про нас</a></p>
    <p><a href="{{ route('services') }}">Послуги</a></p>
    <p><a href="{{ route('contacts') }}"><strong>Контакти</strong></a></p>
@endsection
@section('span_in_menu')
    <span><a href="{{ route('main') }}">Про нас</a></span>
    <span><a href="{{ route('services') }}">Послуги</a></span>
    <span><a href="{{ route('contacts') }}"><strong>Контакти</strong></a></span>
@endsection
@section('content')
    <div>
        <h1>
            Як з нами зв'язатися:
        </h1>
    </div>
    <div>
        <div class="picture">
            <a href="https://www.instagram.com">
                <div>
                    <img class="Icons" src="{{ asset('Icons/Instagram.png') }}" alt="Інстаграм">
                    <span>Instagram</span>
                </div>
                <div>
                    <img class="Photo" src="{{ asset('Photo/13.png') }}" alt="Інстаграм сторінка">
                </div>
            </a>
        </div>
        <div class="picture">
            <a href="https://web.telegram.org">
                <div>
                    <img class="Icons" src="{{ asset('Icons/Telegram.png') }}" alt="Телеграм">
                    <span>Telegram</span>
                </div>
                <div>
                    <img class="Photo" src="{{ asset('Photo/12.png') }}" alt="Телеграм сторінка">
                </div>
            </a>
        </div>
        <div class="picture">
            <a href="https://uk-ua.facebook.com">
                <div>
                    <img class="Icons" src="{{ asset('Icons/Facebook.png') }}" alt="Фейсбук">
                    <span>Facebook</span>
                </div>
                <div>
                    <img class="Photo" src="{{ asset('Photo/11.png') }}" alt="Фейсбук сторінка">
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="inform">
            <div>
                <img src="{{ asset('Icons/Time.png') }}" alt="Час">
            </div>
            <div>
                <p><strong>Салон відкритий:</strong></p>
                <p>понеділок-п’ятниця</p>
                <p>9:00-16:00</p>
            </div>
        </div>
        <div class="inform">
            <div>
                <img src="{{ asset('Icons/Location.png') }}" alt="Адреса">
            </div>
            <div>
                <p><strong>Адреса салону:</strong></p>
                <p>Черкаська обл. м. Жашків,</p>
                <p>вул. Народна, 27</p>
            </div>
        </div>
        <div class="inform last_2">
            <div>
                <img src="{{ asset('Icons/Phone.png') }}" alt="Телефон">
            </div>
            <div>
                <p><strong>Номер телефону:</strong></p>
                <p>+380500505050</p>
                <p>+380500506666</p>
            </div>
        </div>
        <div class="inform last_2">
            <div>
                <img src="{{ asset('Icons/Email.png') }}" alt="Пошта"></div>
            <div>
                <p><strong>Електронна пошта:</strong></p>
                <p>Nails@gmail.com</p>
                <p>Kristi@gmail.com</p>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('sign_up') }}">
            <img class="Action" src="{{ asset('Icons/Action.png') }}" alt="Записатися">
        </a>
    </div>
@endsection
