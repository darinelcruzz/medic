@extends('auth.admin.root')

@push('pageTitle')
    Alma Medics | Inicio
@endpush

@push('headerTitle')
    Inicio <small>COMIENZA AQUÍ</small>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6">
            <simple-box title="Una caja" color="primary">
                <code>Hola mundo</code>
                {!! Field::text('name', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
                {!! Field::text('last_name', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
                {!! Field::number('phone', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
                {!! Field::number('age', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
                {!! Field::text('address', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
                {!! Field::text('city', ['tpl' => 'withicon'], ['icon' => 'user']) !!}
            </simple-box>
        </div>
    </div>

@endsection
