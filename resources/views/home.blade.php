@extends('layouts.app')

@section('content')
    <div id="comments-header">
        <h1>Страница Комментариев</h1>
    </div>
    @if(Auth::check())
    <div id="comments-form">
        <h3>Пожалуйста оставте свой коментарий</h3>
        <form method="POST" action="{{ route('comments.add') }}">
            @csrf
            <div>
                <label>Оставте коментарий</label>
                <div>
                    <textarea name="comment"> </textarea>
                </div>
            </div>
            <div>
                <br>
                <input type="submit" name="submit" value="Написать">
            </div>
        </form>
    </div>
    @endif
    <div class="comments_wrap2">
        <h2>Комментарии:</h2>
        <ul>
            <li>
                <span>User</span>
                <span>24.03.2020</span>
                <div>Текст ответа 2й вложенности</div>
                <input type="submit" name="submit" value="Ответить">
            </li>
        </ul>
    </div>
@endsection

@section('title')
    My Home Page
@endsection


