@extends('layouts.guest')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="reg-info">
        <a class="btn" href="{{ url('register') }}">Регистрирай се</a>
        <a class="btn" href="{{ url('login') }}">Влез</a>
    </div>
@endsection