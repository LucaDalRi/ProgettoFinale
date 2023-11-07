@extends('layouts.app')
@section('content')
    <div id="restaurants-index" class="container-fluid pt-3">
        <div class="row text-center mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="text-muted fw-medium">restaurants list</div>
                        <div class="d-flex gap-1">
                            {{-- <form action="{{ route('dishes.deleteAll') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form> --}}
                            <a href="{{ route('restaurants.create') }}" class="btn btn-sm btn-outline-primary">Add restaurants</a>
                        </div>
                    </div>

                    <div class="card-body">
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
                                        <div>address</div>
                                    </th>
                                    <th scope="col">
                                        <div>piva</div>
                                    </th>
                                    
                                    <th scope="col" class="text-center">
                                        <div>Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @forelse ($restaurant as $restaurant)
                                    <tr class="align-middle">
                                        <th scope="row">
                                            <div>{{ $restaurant->id }}</div>
                                        </th>
                                        <td>
                                            <div>{{ $restaurant->name }}</div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <div>{{ $restaurant->address }}</div>
                                        </td>
                                        <td>
                                            <div>{{ $restaurant->piva }}</div>
                                        </td>
                                      

                                        {{-- action buttons --}}
                                        <td class="text-center d-none d-md-table-cell" style="min-width: 190px">
                                            <div class="d-flex justify-content-center gap-1">
                                                <a href="{{ route('restaurants.show', $restaurant->id) }}"
                                                    class="btn btn-sm btn-primary">Show</a>
                                                <a href="{{ route('restaurants.edit', $restaurant->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="text-center d-md-none">
                                            <div class="d-flex justify-content-center gap-1">
                                                <a href="{{ route('restaurants.show', $restaurant->id) }}"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="fa-solid fa-up-right-from-square"></i></a>
                                                <a href="{{ route('restaurants.edit', $restaurant->id) }}"
                                                    class="btn btn-sm btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    @empty
                                        <td class="d-none d-md-table-cell border-0" colspan="6">
                                            <p>La lista è vuota.</p>
                                        </td>
                                @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @vite(['resources/js/list.js', 'resources/scss/orientation.scss'])
@endsection
