@extends('layouts.app')

@section('title', 'Home')

@section('header-content')
    {{-- @include('partials.header.header_nav') --}}
    <header-nav-component ></header-nav-component>
@endsection


@section('main-content')
    <cards-component :movies ="{{ $movies }}"></cards-component>
@endsection