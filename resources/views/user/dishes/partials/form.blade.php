<form action="{{route($routeForm, $dish)}}" class="row g-3" method="POST">
    @csrf
    <div class="col-6">
        <div class="form-outline">
            <input type="text" class="form-control form-control-lg" id="name" name="name">
            <label for="name" class="form-label">Name</label>
        </div>
    </div>
    <div class="col-6">
        <div class="form-outline">
            <input type="number" class="form-control form-control-lg" id="price" name="price" step="0.01">
            <label for="price" class="form-label">Price</label>
        </div>
    </div>
    <div class="col-6">
        <div class="form-outline">
            <textarea class="form-control form-control-lg" id="description" name="description" rows="2"></textarea>
            <label for="description" class="form-label">Description</label>
        </div>
    </div>
    <div class="col-6">
        <div class="form-outline mb-1">
            <input type="text" class="form-control form-control-lg" id="photo-url" name="photo"></input>
            <label for="photo-url" class="form-label">Photo URL</label>
        </div>
        <div class="form-outline">
            <input type="file" class="form-control form-control-lg" id="photo-file" name="photo" disabled></input>
            <label for="photo-file" class="form-label"></label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-outline">
            <textarea class="form-control form-control-lg" id="ingredients" name="ingredients" rows="3"></textarea>
            <label for="ingredients" class="form-label">Ingredients</label>
        </div>
    </div>
    <div class="col-12">
        <p class="m-1">Visible</p>
        <div class="radio-btn d-flex gap-2">
            <div class="form-check">
                <label for="visible-yes" class="form-check-label">Yes</label>
                <input type="radio" class="form-check-input" id="visible-yes" name="visible" value="1">
            </div>
            <div class="form-check">
                <label for="visible-no" class="form-check-label">No</label>
                <input type="radio" class="form-check-input" id="visible-no" name="visible" value="0">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex justify-content-end align-self-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>