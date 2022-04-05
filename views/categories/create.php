<div class="col-md-8 pt-0 mb-3">
    <div class="d-flex ">
        <form action="<?= base_url ?>Category/save" method="post" class="form-control border-success bg-dark">
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight">
                    <label for="name" class="form-label text-white m-1">Name</label>
                </div>
                <div class="p-2 bd-highlight flex-grow-1">
                    <input type="text" placeholder="Enter category" name="name" class="form-control " required>
                </div>
                <div class="p-2 bd-highlight">
                    <input type="submit" value="save" class="btn btn-outline-success ">
                </div>
            </div>
        </form>
    </div>

</div>