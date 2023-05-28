<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nails</title>
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @section('styles')
    @show
</head>
<body>
<header>
    <div class="head_menu_icon">
        <div>
            <button id="btn1" onclick="openMenu()">
                <img class="menu_icon" src="{{ asset('Icons/menu.png') }}" alt="Меню">
            </button>
            <script>
                function openMenu() {
                    document.getElementById('text_menu').style.display='block';
                    document.getElementById('btn1').style.display='none';
                    document.getElementById('btn2').style.display='block';
                }
            </script>
            <div class="text_menu" id="text_menu">
                <button id="btn2" onclick="closeMenu()">
                    <img class="menu_icon" src="{{ asset('Icons/menu.png') }}" alt="Меню">
                </button>
                <script>
                    function closeMenu() {
                        document.getElementById('text_menu').style.display='none';
                        document.getElementById('btn2').style.display='none';
                        document.getElementById('btn1').style.display='block';
                    }
                </script>
                <div class="p_in_menu">
                    @yield('p_in_menu')
                </div>
            </div>
        </div>
        <div>
            <img class="Logotype" src="{{ asset('Icons/Logotype.png') }}" alt="Логотип">
        </div>
    </div>
    <div class="span_in_menu">
        @yield('span_in_menu')
    </div>
    <div class="Phone">
        <img src="{{ asset('Icons/Phone.png') }}" alt="Телефон">
        <span>Телефон: +380500505050</span>
    </div>
    <div>
        <a href="{{ route('sign_up') }}">
            <img class="Action" src="{{ asset('Icons/Action.png') }}" alt="Записатися">
        </a>
    </div>
</header>
<main>
    <div>
        @yield('content')
    </div>
</main>
<footer>
    <div class="flex">
        <div>
            <img class="Logotype" src="{{ asset('Icons/Logotype.png') }}" alt="Логотип">
        </div>
        <div class="info">
            <div class="contacts">
                <div>
                    <div>
                        <img src="{{ asset('Icons/Time.png') }}" alt="Час">
                    </div>
                    <div>
                        <img src="{{ asset('Icons/Phone.png') }}" alt="Телефон">
                    </div>
                    <div>
                        <img src="{{ asset('Icons/Location.png') }}" alt="Адреса">
                    </div>
                </div>
                <div class="footer_info">
                    <p>Графік роботи: Пн - Пт 9:00 - 16:00</p>
                    <p>Телефон: +380500505050</p>
                    <p>Адреса: Черкаська обл. м. Жашків, вул. Народна, 27</p>
                </div>
            </div>
            <div class="network">
                <div>
                    <p>
                        Ви також можете знайти нас тут:
                    </p>
                </div>
                <div>
                    <a href="https://www.instagram.com">
                        <img src="{{ asset('Icons/Instagram.png') }}" alt="Інстаграм">
                    </a>
                </div>
                <div>
                    <a href="https://web.telegram.org">
                        <img src="{{ asset('Icons/Telegram.png') }}" alt="Телеграм">
                    </a>
                </div>
                <div>
                    <a href="https://uk-ua.facebook.com">
                        <img src="{{ asset('Icons/Facebook.png') }}" alt="Фейсбук">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="Inc">
            © Nails, Inc. 2023. Ми любимо своїх клієнтів!
        </p>
    </div>
</footer>
</body>
</html>
