<form action="{{ route($routeForm, $dish) }}" class="form row g-3" method="POST">
    @method($method)
    @csrf
    <div class="col-6">
        <div class="form-outline">
            <input type="text" class="form-control form-control-lg @error('name') error @enderror" id="name"
                name="name" value="{{ old('name', $dish->name) }}">
            <label for="name" class="form-label">Name</label>
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-6">
        <div class="form-outline">
            <input type="number" class="form-control form-control-lg @error('price') error @enderror" id="price"
                name="price" step="0.01" value="{{ old('price', $dish->price) }}">
            <label for="price" class="form-label">Price</label>
        </div>
        @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-6">
        <div class="form-outline">
            <textarea class="form-control form-control-lg @error('description') error @enderror" id="description" name="description"
                rows="4">{{ old('description', $dish->description) }}</textarea>
            <label for="description" class="form-label">Description</label>
        </div>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <div class="form-outline">
            <textarea class="form-control form-control-lg @error('ingredients') error @enderror" id="ingredients" name="ingredients"
                rows="4">{{ old('ingredients', $dish->ingredients) }}</textarea>
            <label for="ingredients" class="form-label">Ingredients</label>
        </div>
        @error('ingredients')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-12">
        <div class="form-outline mb-1">
            <input type="text" class="form-control form-control-lg @error('photo') error @enderror" id="photo-url"
                name="photo" value="{{ old('photo', $dish->photo) }}"></input>
            <label for="photo" class="form-label">Photo URL</label>
        </div>
        @error('photo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-12">
        <div class="form-check form-switch">
            <input type="hidden" name="visible" value="0">
            <input class="form-check-input my-switch" type="checkbox" role="switch" id="visible" name="visible"
                value="1" @checked(old('visible', $dish->visible))>
            <label class="form-check-label" for="visible">Visible</label>
        </div>
        @error('visible')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>
    <div class="col-12">
        <div class="d-flex justify-content-between align-self-center">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('dishes.index') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>
</form>
@section('script')
    @vite(['resources/js/form.js'])
@endsection
