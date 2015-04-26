@extends('app')

@section('content')

    <h1>Terceros registrados</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($terceros as $tercero)
                <tr>
                    <td>{{ $tercero->id }}</td>
                    <td>{{ $tercero->nit }}</td>
                    <td>{{ $tercero->nombre }}</td>
                    <td>{{ $tercero->rol }}</td>
                    <td>{{ $tercero->direccion }}</td>
                    <td>{{ $tercero->telefono }}</td>
                    <td>{{ $tercero->email }}</td>
                    <td>{{ $tercero->notas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $terceros->render() !!}

@endsection