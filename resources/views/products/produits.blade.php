@extends('master')
@section('title', 'Rana')

@section('description', 'TEST')
@section('stylesheet')

@endsection

@section('content')
    @include('products.categories-list')
    @include('products.produits-list')

@endsection
