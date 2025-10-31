@extends('layouts.app')

@section('content')
    <form action="{{ route('centers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">
            Nombre:
            <input type="text" id="nombre" name="nombre"> <br>
        </label>
        <label for="">
            Direccion:
            <input type="text" id="direccion" name="direccion"> <br>
        </label>
        <label for="">
            Poblacion:
            <input type="number" id="poblacion" name="poblacion"> <br>
        </label>
        <select name="employee_manager_id">
            @foreach ($employees_manager as $employee_manager)
                <option value="{{ $employee_manager->id }}">{{ $employee_manager->id }}</option>
                {{$employee_manager}}
            @endforeach
        </select>

        <button type="submit">Subir</button>
    </form>
@endsection
