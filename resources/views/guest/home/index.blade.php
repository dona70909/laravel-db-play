@extends('layouts.app')

@section('title', 'Home')

@section('header-content')
    @include('partials.header.header_nav')
@endsection


@section('content')
    <cards-component :movies ="{{ $movies }}"></cards-component>
@endsection