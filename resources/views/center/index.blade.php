@extends('layouts.app')

@section('content')
    <h2>Lista de centers:</h2>
    <ul>
        @foreach ($centers as $center)
            <li>
                <a href="{{ route('centers.show', $center->id) }}">
                    {{ $center->nombre }} - Manager: {{ $center->employeeManager->nif }}
                </a>
            </li>
        @endforeach
@endsection
