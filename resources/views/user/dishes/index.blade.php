@extends('layouts.app')
@section('content')
    <h2>dishes index</h2>
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Visible</th>
            </tr>
        </thead>
        <tbody class="">
            @forelse ($dishes as $dish)
                <tr>
                    <th scope="row">{{$dish->id}}</th>
                    <td>{{$dish->name}}</td>
                    <td>{{$dish->description}}</td>
                    <td>{{$dish->visible ? 'Si' : 'No'}}</td>
                </tr>
            @empty
                <p>Nessun piatto da mostrare</p>
            @endforelse
            
        </tbody>
        </table>
    

        
@endsection