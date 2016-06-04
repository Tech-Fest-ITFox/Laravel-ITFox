@extends('layouts.master')

@section('title')
    {{ Auth::user()->name }} - Промени профила си
@endsection

@section('content')
    <h1>Промени профила си</h1>
    
@endsection