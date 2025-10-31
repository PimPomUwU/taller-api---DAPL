@extends('layouts.app')

@section('content')
    <h2>Lista de centers:</h2>
    <form action="{{ route('centers.create') }}" method="get">
        <button>Crear</button>
    </form>
    <a href="{{ route('centers.create') }}">Crear</a>
    <ol>
        @foreach ($centers as $center)
            <li>
                <a href="{{ route('centers.show', $center->id) }}">
                    {{ $center->nombre }} - Manager: {{ $center->employee_manager->nif }}
                </a>
                | <button><a href="{{ route('centers.edit', $center) }}">Editar</a></button>
                | <form action="{{ route('centers.destroy', $center) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"> Eliminar </button>

                </form>
            </li>
        @endforeach
    </ol>
@endsection
