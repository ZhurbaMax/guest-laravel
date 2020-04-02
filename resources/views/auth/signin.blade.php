@extends('layouts.app')

@section('content')
    <div class="body-content container mlogin">
        <h1>Вход</h1>
        <div>
            <form method="POST" action="{{ route('auth.signin') }}" novalidate>
                @csrf
                <div>
                    <label>Логин:</label>
                    <div>
                        <input class="{{ $errors->has('username') ? 'is-invalid' : '' }}"
                               type="text" name="username" value=""/>
                        @if ($errors->has('username'))
                            <span id="username_error" style="color: red;">
                                {{ $errors->first('username') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Пароль:</label>
                    <div>
                        <input class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                               type="password" name="password" required="" value=""/>
                        @if ($errors->has('password'))
                            <span id="password_error" style="color: red;">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
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
     Страница авторизации
@endsection
