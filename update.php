<div class="container justify-content-center">
    <h1>Add product</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" name="sku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price $</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="selection">
                <option selected>Choose</option>
                <option value="1">Product 1</option>
                <option value="2">Product 2</option>
                <option value="3">Product 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Size (MB)</label>
            <input type="number" name="weight" class="form-control" required>
        </div>
        <button type="submit" name="save" class="btn btn-white">Save</button>
        <button type="submit" name="save" class="btn btn-white">Cancel</button>
    </form>
</div>
