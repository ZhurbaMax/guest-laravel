@extends('layouts.app')

@section('content')
    <div class="body-content container mlogin">
        <h1>Регистрация</h1>
        <div>
            <form method="POST" action="{{ route('auth.signup') }}" novalidate>
                @csrf
                <div>
                    <label>Логин:</label>
                    <div>
                        <input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text"
                               name="username" id="username" value="{{ Request::old('username') ?: '' }}"/>
                        @if ($errors->has('username'))
                            <span id="username_error" style="color: red;">
                                {{ $errors->first('username') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div>
                    <label>Email:</label>
                    <div>
                        <input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                               name="email" id="email" required="" value="{{ Request::old('email') ?: '' }}"/>
                        @if ($errors->has('email'))
                            <span id="email_error" style="color: red;">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Имя:</label>
                    <div>
                        <input class="{{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text"
                               name="first_name" required="" value="{{ Request::old('first_name') ?: '' }}"/>
                        @if ($errors->has('first_name'))
                            <span id="first_name_error" style="color: red;">
                                {{ $errors->first('first_name') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Фамилия:</label>
                    <div>
                        <input class="{{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text"
                               name="last_name" required="" value="{{ Request::old('last_name') ?: '' }}"/>
                        @if ($errors->has('last_name'))
                            <span id="last_name_error" style="color: red;">
                                {{ $errors->first('last_name') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Страна:</label>
                    <div>
                        <select class="select {{ $errors->has('country') ? 'is-invalid' : '' }}"  class="select" name="country" >
                            <option value="Укажите страну">Укажите страну</option>
                            <option value="Украина">Украина</option>
                            <option value="Англия">Англия</option>
                            <option value="Беларусь">Беларусь</option>
                        </select>
                        @if ($errors->has('country'))
                            <span id="country_error" style="color: red;">
                                {{ $errors->first('country') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Город:</label>
                    <div>
                        <select class="select {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city">
                            <option value="Укажите город">Укажите город</option>
                            <option value="Киев">Киев</option>
                            <option value="Львов">Львов</option>
                            <option value="Ливерпуль">Ливерпуль</option>
                            <option value="Манчестер">Манчестер</option>
                            <option value="Минск">Минск</option>
                            @if ($errors->has('city'))
                                <span id="city_error" style="color: red;">
                                    {{ $errors->first('city') }}
                                </span>
                            @endif
                        </select>
                    </div>
                </div>
                <div>
                    <label>Пол:</label>
                    <div>
                        <select class="select {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender">
                            <option value="Укажите пол">Укажите пол</option>
                            <option value="Мужской">Мужской</option>
                            <option value="Женский">Женский</option>
                            <option value="Всякое бывает">Всякое бывает</option>
                        </select>
                        @if ($errors->has('gender'))
                            <span id="gender_error" style="color: red;">
                                {{ $errors->first('gender') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label>Пароль:</label>
                    <div>
                        <input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                               name="password" required="" value=""/>
                        @if ($errors->has('password'))
                            <span id="gender_error" style="color: red;">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <br/>
                    <input class="button" type="submit" name="submit" id="submit" value="Зарегистрироваться">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('title')
    Registration
@endsection

