@extends('layouts.app')

@section('content')
    <h4>{{ isset($vip2car) ? 'Editar Vehículo' : 'Agregar Vehículo' }}</h4>
    @include('vip2cars.form')
@endsection
