@extends('layouts.master')

@section('title')
    {{ Auth::user()->name }} - Промени профила си
@endsection

@section('content')
    <h1>Промени профила си</h1>
    <div class="small-box inside clearfix">
        <form name="regForm" action="{{ url('register') }}" role="form" method="post">
            {!! csrf_field() !!}
            <div class="input-holder form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" class="input active-placeholder" value="{{ Auth::user()->email }}" required/>

                <div class="placeholder">E-mail</div>
                <div class="err">Въведи валиден e-mail</div>
            </div>
            <div class="input-holder form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" name="name" class="input" value="{{ old('name') }}" required/>

                <div class="placeholder">Име Фамилия</div>
                <div class="err">Въведи име</div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="input-holder form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="input" required/>

                <div class="placeholder">Нова парола</div>
                <div class="err">Твърде кратка парола - трябва да е над 6 символа</div>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="input" required/>

                <div class="placeholder">Повтори нова парола</div>
                <div class="err">Паролите не съвпадат</div>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                <input type="text" name="city" class="input" required/>

                <div class="placeholder">Град</div>
                <div class="err">Въведи град</div>
                @if ($errors->has('city'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                <input type="text" name="school" class="input" required/>

                <div class="placeholder">Училище</div>
                <div class="err">Въведи училище</div>
                @if ($errors->has('school'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                <input type="number" name="grade" class="input" required/>

                <div class="placeholder">Клас</div>
                <div class="err">Въведи клас</div>
                @if ($errors->has('grade'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                <input type="text" name="class" class="input" required/>

                <div class="placeholder">Паралелка</div>
                <div class="err">Въведи паралелка</div>
                @if ($errors->has('class'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn">Регистрирай се веднага</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
    
@endsection