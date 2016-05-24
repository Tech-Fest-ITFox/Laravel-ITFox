@extends('layouts.master')

@section('content')
    <h1>Login</h1>
    <div class="small-box clearfix">
        <a href="#" class="btn fb">Влез в профила си чрез <b>Facebook</b></a>

        <h2>или</h2>

        <form action="{{ url('login') }}" method="post">
            {!! csrf_field() !!}

            <div class="input-holder form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" class="input"/>

                <div class="placeholder">E-mail</div>
            </div>
            <div class="input-holder form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="input"/>

                <div class="placeholder">Парола</div>
            </div>
            <button type="submit" class="btn">Влез</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
@endsection