<!-- Modal -->
<div class="modal fade" id="addeModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <form action="" method="post" id="addProductForm">
        @csrf 
    <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="form-group mb-3">
                 <label for="">Product Name </label>
                 <input type="text" class="form-control" id="name" name="name">
               </div>

               <div class="form-group mb-3">
                 <label for="">Product Price </label>
                 <input type="text" class="form-control" id="price" name="price">
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Create New Product </button>
            </div>
            </div>
        </div>
    </form>
</div>