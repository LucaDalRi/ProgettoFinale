<form action="{{ route($routeForm, $restaurant) }}" class="form row g-3" method="POST">
    @method($method)
    @csrf
    <div class="col-6">
        <div class="form-outline">
            <input type="text" class="form-control form-control-lg @error('name') error @enderror" id="name"
                name="name" value="{{ old('name', $restaurant->name) }}">
            <label for="name" class="form-label">Name</label>
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-6">
        <div class="form-outline">
            <input type="text" class="form-control form-control-lg @error('address') error @enderror" id="address"
                name="price" step="0.01" value="{{ old('address', $restaurant->address) }}">
            <label for="address" class="form-label">address</label>
        </div>
        @error('address')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-6">
        <div class="form-outline">
            <textarea class="form-control form-control-lg @error('piva') error @enderror" id="description" name="description"
                rows="4">{{ old('piva', $restaurant->piva) }}</textarea>
            <label for="piva" class="form-label">piva</label>
        </div>
        @error('piva')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-12">
        <div class="form-outline mb-1">
            <input type="text" class="form-control form-control-lg @error('photo') error @enderror" id="photo-url"
                name="photo" value="{{ old('photo', $restaurant->photo) }}"></input>
            <label for="photo" class="form-label">Photo URL</label>
        </div>
        @error('photo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-12">
        <div class="d-flex justify-content-between align-self-center">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('restaurants.index') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>
</form>
@section('script')
    @vite(['resources/js/form.js'])
@endsection
