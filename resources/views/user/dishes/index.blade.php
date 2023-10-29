@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col-12">
                <h4>Dishes list</h4>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        <div>ID</div>
                    </th>
                    <th scope="col">
                        <div>Name</div>
                    </th>
                    <th scope="col" class="d-none d-md-table-cell">
                        <div>Ingredients</div>
                    </th>
                    <th scope="col">
                        <div>Description</div>
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
                    <tr class="align-middle">
                        <th scope="row">
                            <div>{{ $dish->id }}</div>
                        </th>
                        <td>
                            <div>{{ $dish->name }}</div>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <div>{{ $dish->ingredients }}</div>
                        </td>
                        <td>
                            <div>{{ $dish->description }}</div>
                        </td>
                        <td>
                            <div>{{ $dish->visible ? 'Si' : 'No' }}
                        </td>
                        <td class="text-center d-none d-md-table-cell" style="min-width: 190px">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{ route('dish.show', $dish->id) }}" class="btn btn-sm btn-primary">Show</a>
                                <a href="{{ route('dish.edit', $dish->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                        <td class="text-center d-md-none">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{ route('dish.show', $dish->id) }}" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-up-right-from-square"></i></a>
                                <a href="{{ route('dish.edit', $dish->id) }}" class="btn btn-sm btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p>Nessun piatto da mostrare</p>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
