
{{--Ваш пароль: {{ $password }}--}}
<div class="container">

    <h1>Здравствуй, {{ $user->email }}!</h1>
    <h2>Nechai-LMS на связи!</h2>

    <p>Ты был приглашен пройти тест</p>
    <p>Чтобы зайти на, перейди по ссылке ниже</p>
    <p>Твой временный пароль: {{ $password }} <br> Не забудь поменять его!</p>
    <a href="{{ route('login') }}">Войти</a>

</div>
