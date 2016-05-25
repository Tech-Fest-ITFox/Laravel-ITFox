@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <div class="small-box clearfix">
        <a href="#" class="btn fb">Регистрирай се чрез <b>Facebook</b></a>

        <h2>или</h2>

        <div class="levels two">
            <div class="level-bar">
                <div class="level-bar-progress first"></div>
            </div>
            <ul class="level-labels">
                <li class="activated">бърза регистрация</li>
                <li>допълнителни данни</li>
            </ul>
        </div>
        <form name="regForm" action="{{ url('register') }}" role="form" method="post">
            {!! csrf_field() !!}
            <div class="input-holder form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" class="input" required/>

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
            <div class="input-holder">
                <label style="color: #fff;" for="">Ученик</label>
                <input type="radio" name="role" value="Student">
                <label style="color: #fff;" for="">Учител</label>
                <input type="radio" name="role" value="Teacher">
            </div>
            <div class="input-holder form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="input" required/>

                <div class="placeholder">Парола</div>
                <div class="err">Твърде кратка парола - трябва да е над 6 символа</div>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-holder form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="input" required/>

                <div class="placeholder">Повтори парола</div>
                <div class="err">Паролите не съвпадат</div>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn">Регистрирай се веднага</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <a href="#" class="assist-link fright nmr">или попълни и други данни</a>
        </form>
    </div>
@endsection