@extends('layouts.master')

@section('title')
    {{ Auth::user()->name }} - Промени урок
@endsection

@section('content')
    <h1>Промени урок</h1>
    <div class="inside clearfix">
        <form name="regForm" action="{{ url('register') }}" role="form" method="post">
            {!! csrf_field() !!}
            <div class="input-holder">
                <input type="text" name="text" class="input active-placeholder"  required/>

                <div class="placeholder">Заглавие</div>
                <div class="err">Въведи заглавие</div>
            </div>
            <div class="input-holder">
                <textarea class="text-editor" name="content"></textarea>
                <div class="err">Твърде кратко описание. Трябва да е поне 10 символа.</div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

                
            <button type="submit" class="btn">Промени</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
    
@endsection