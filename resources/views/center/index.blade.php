@extends('layouts.app')

@section('content')
    <h2>Lista de centers:</h2>
    <ol>
        @foreach ($centers as $center)
            <li>
                <a href="{{ route('centers.show', $center->id) }}">
                    {{ $center->nombre }} - Manager: {{ $center->employee_manager->nif}}
                </a>
            </li>
        @endforeach
        </ol>
@endsection
