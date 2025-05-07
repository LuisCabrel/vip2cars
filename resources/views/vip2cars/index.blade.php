@extends('layouts.app')

@section('content')
<a href="{{ route('vip2cars.create') }}" class="btn btn-success mb-3">Agregar Vehículo</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Fabricación</th>
            <th>Cliente</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr>
            <td>{{ $car->placa }}</td>
            <td>{{ $car->marca }}</td>
            <td>{{ $car->modelo }}</td>
            <td>{{ $car->fabricacion }}</td>
            <td>{{ $car->nombrecliente }} {{ $car->apellidocliente }}</td>
            <td>{{ $car->correo }}</td>
            <td>{{ $car->telefono }}</td>
            <td>
                <a href="{{ route('vip2cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('vip2cars.destroy', $car->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
