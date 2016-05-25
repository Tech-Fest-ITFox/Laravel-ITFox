@extends('layouts.master')

@section('title')
    {{ $role }} {{ Auth::user()->name }} - Home
@endsection

@section('content')
    <h1>{{ $role }} Dashboard</h1>
@endsection