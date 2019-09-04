@extends('template.index')

@push('css')

@endpush

@section('content')
<div class="container">

    <div class="row mt-3 p-5">

        <div class="col-12 col-md-6 col-lg-6">
            <card-image url="/img/posters/drama_fix.png" link="/pelicula/drama"></card-image>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
            <card-image url="/img/posters/acao_fix.png" link="/pelicula/accion"></card-image>
        </div>

    </div>

    <div class="row mt-3 p-5">

        <div class="col-12 col-md-6 col-lg-6">
                <card-image url="/img/posters/comedia_fix.png" link="/pelicula/comedia"></card-image>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
                <card-image url="/img/posters/terror_fix.png" link="/pelicula/terror"></card-image>
        </div>

    </div>

</div>
@endsection
