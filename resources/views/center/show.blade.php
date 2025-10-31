        @extends('layouts.app')

        @section('content')

        <div>
            <h2>Detalles del item</h2>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID:</th>
                            <th>Nombre:</th>
                            <th>Direccion:</th>
                            <th>Poblacion:</th>
                            <th>Manager:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $center['id'] }}</td>
                            <td>{{ $center['nombre'] }}</td>
                            <td>{{ $center['direccion'] }}</td>
                            <td>{{ $center['poblacion'] }}</td>
                            <td>{{ $center['employee_manager']['nif'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        @endsection
