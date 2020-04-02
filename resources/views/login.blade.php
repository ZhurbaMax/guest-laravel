@extends('layouts.app')

@section('content')
    <div class="body-content container mlogin">
        <h1>Вход</h1>
        <div>
            <form method="POST">
                <div>
                    <label>Логин или Email:</label>
                    <div>
                        <input type="text" name="user_name" required="" value=""/>
                    </div>
                </div>
                <div>
                    <label>Пароль:</label>
                    <div>
                        <input type="password" name="password" required="" value=""/>
                    </div>
                </div>
                <div>
                    <br/>
                    <input class="button" type="submit" name="submit" value="Войти">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('title')
     Authorization
@endsection
