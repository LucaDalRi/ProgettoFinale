@extends('layouts.app')
@section('content')
    <h2>dishes index</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-dark">
                <th scope="col">
                    <div>ID</div>
                </th>
                <th scope="col">
                    <div>Name</div>
                    </th>
                <th scope="col">
                    <div>Description</div>
                </th>
                <th scope="col">
                    <div>Ingredients</div>
                </th>
                <th scope="col">
                    <div>Visible</div>
                </th>
                <th scope="col" class="text-center">
                    <div>Action</div>
                </th>
            </tr>
        </thead>
        <tbody class="">
            @forelse ($dishes as $dish)
                <tr>
                    <th scope="row">
                        <div>{{$dish->id}}</div>
                    </th>
                    <td>
                        <div>{{$dish->name}}</div>
                    </td>
                    <td>
                        <div>{{$dish->description}}</div>
                    </td>
                    <td>
                        <div>{{$dish->ingredients}}</div>
                    </td>
                    <td>
                        <div>{{$dish->visible ? 'Si' : 'No'}}
                    </td>
                    <td class="text-center" style="min-width: 190px">
                        <div class="d-flex gap-1">
                            <a href="{{route('dish.show', $dish->id)}}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{route('dish.edit', $dish->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{route('dishes.destroy', $dish->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <p>Nessun piatto da mostrare</p>
            @endforelse
            
        </tbody>
    </table>
@endsection