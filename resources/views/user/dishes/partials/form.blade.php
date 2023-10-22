<form action="{{route($routeForm, $dish)}}" class="row g-3" method="POST">
    @csrf
    <div class="col-8">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Insert name">
    </div>
    <div class="col-4">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Insert price" step="0.01">
    </div>
    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="2" placeholder="Insert description"></textarea>
    </div>
    <div class="col-12">
        <label for="ingredients" class="form-label">Ingredients</label>
        <textarea class="form-control" id="ingredients" name="ingredients" rows="3" placeholder="Insert ingredients"></textarea>
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