@extends('parent')
@section('styles')
    <style>
        main {
            height: 500px;
        }
    </style>
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
    <h1>Дякуємо за запис!</h1>
    <p>Незабаром з Вами зв'яжуться за номером телефону</p>
@endsection
