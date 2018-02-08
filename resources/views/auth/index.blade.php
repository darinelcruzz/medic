@extends('auth.admin.root')

@push('pageTitle')
    Alma Medics | Inicio
@endpush

@push('headerTitle')
    Inicio <small>COMIENZA AQUÍ</small>
@endpush

@section('content')
    <solid-box title="Una caja" color="primary">
        <code>Hola mundo</code>
    </solid-box>
@endsection
