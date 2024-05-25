<form method="post" action="/category/">
    @csrf
    <div class="mb-3">
        <label for="name">Category Name</label>
        <input type="text" class="form control" name="name" id="name" require placeholder="enter category name">
    </div>

    <div class="mb-3">
        <label for="description">Description</label>
        <input type="text" class="form control" name="description" id="description" placeholder="enter description">
    </div>
    <div class="mb-3 text-center">
        <button class="btn btn-success">bip-bip</button>
    </div>
</form>



