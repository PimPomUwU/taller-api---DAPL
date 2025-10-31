@extends('layouts.app')

@section('content')
    <form action="{{ route('centers.update', $center->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">
            Nombre:
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $center->nombre) }}"> <br>
        </label>
        <label for="">
            Direccion:
            <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $center->direccion) }}"> <br>
        </label>
        <label for="">
            Poblacion:
            <input type="number" id="poblacion" name="poblacion" value="{{ old('poblacion', $center->poblacion) }}"> <br>
        </label>
        Manager actual: {{$center->employee_manager_id}} - {{$center->employee_manager->nif}} <br>
        <select name="employee_manager_id" value="{{ old('employee_manager_id', $center->employee_manager_id)}}">
            <option value="">Quitar</option>
            @foreach ($employees_manager as $employee_manager)
                <option value="{{ $employee_manager->id }}">{{ $employee_manager->id}} - {{$employee_manager->nif}}</option>
            @endforeach
        </select>

        <button type="submit">Editar</button>
    </form>
@endsection
