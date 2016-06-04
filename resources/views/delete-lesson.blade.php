@extends('layouts.master')

@section('title')
    {{ Auth::user()->name }} - Изтрий урок
@endsection

@section('content')
    <h1>Изтрий урок</h1>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".input").prop('disabled', true);
    });
    </script>
    <div class="inside clearfix">
        <form name="regForm" action="{{ url('register') }}" role="form" method="post">
            {!! csrf_field() !!}
            <div class="input-holder">
                <input type="text" name="text" class="input active-placeholder" required/>

                <div class="placeholder">Заглавие</div>
                <div class="err">Въведи заглавие</div>
            </div>
                
            <button type="submit" class="btn">Изтрий</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
    
@endsection