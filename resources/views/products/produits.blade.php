@extends('master')
@section('title', 'Découvrez notre large gamme de produits d hygiène')
@section('description', '')


@section('stylesheet')

@endsection

@section('content')
    @include('partials.categories-list')
    @include('partials.produits-list')

@endsection
