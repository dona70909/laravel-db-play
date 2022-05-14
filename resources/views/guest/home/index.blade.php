@extends('layouts.app')

@section('title', 'Home')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('main-content')
    @include('partials.main.main_cards')
@endsection

@section('content')
    <example-component></example-component>
@endsection