@extends('master')
@section('title', 'Découvrez notre large gamme de produits d hygiène domestique - Rana Industrie')
@section('description', 'Parcourez notre catalogue de produits d hygiène domestique de haute qualité. Chez Rana Industrie, nous proposons une vaste sélection de produits pour répondre à vos besoins quotidiens en matière d hygiène. Explorez notre collection et trouvez les solutions adaptées à votre foyer.')


@section('stylesheet')

@endsection

@section('content')
    @include('partials.categories-list')
    @include('partials.produits-list')

@endsection
