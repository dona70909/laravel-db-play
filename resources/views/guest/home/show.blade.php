@extends('layouts.app')

@section('title', 'Insert card')

@section('header-content')
    <header-nav-component ></header-nav-component>
@endsection

@section('main-content')
    @csrf
    <insert-component></insert-component>
@endsection
