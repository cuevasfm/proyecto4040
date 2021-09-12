@extends('layouts.base')

@section('content')
<br>
<a class="btn btn-primary" href="/clientes/create" role="button">Nuevo Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">celular_</th>
                <th scope="col">email</th>
                <th scope="col">city</th>
                <th scope="col">date_created</th>
                <th scope="col">fecha_nac</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->celular_ }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->date_created }}</td>
                    <td>{{ $client->fecha_nac }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
