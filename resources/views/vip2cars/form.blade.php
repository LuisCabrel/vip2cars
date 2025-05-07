<form method="POST" action="{{ isset($vip2cars) ? route('vip2cars.update', $vip2cars->id) : route('vip2cars.store') }}">
    @csrf
    @if(isset($vip2cars)) @method('PUT') @endif

    @php
        $fields = [
            'placa' => 'Placa',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'fabricacion' => 'Año de Fabricación',
            'nombrecliente' => 'Nombre',
            'apellidocliente' => 'Apellido',
            'correo' => 'Correo',
            'telefono' => 'Teléfono',
        ];
    @endphp

    @foreach($fields as $name => $label)
        <div class="mb-3">
            <label class="form-label">{{ $label }}</label>
            <input type="{{ $name === 'correo' ? 'email' : ($name === 'fabricacion' ? 'number' : 'text') }}"
                   name="{{ $name }}"
                   value="{{ old($name, $vip2cars->$name ?? '') }}"
                   class="form-control" required>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">
        {{ isset($vip2cars) ? 'Actualizar' : 'Guardar' }}
    </button>
    <a href="{{ route('vip2cars.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
