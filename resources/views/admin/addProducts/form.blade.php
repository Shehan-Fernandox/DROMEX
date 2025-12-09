<!-- Button trigger modal -->
<a type="button" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-align: center;text-transform: capitalize;">
    add aircraft
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center;text-transform: capitalize;">add aircraft</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post" action="{{ route('addProducts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="product_name">
                    </div>
                    <div class="col-md-6">
                        <label for="brand" class="form-label">Product Brand</label>
                        <input type="text" class="form-control" id="brands" name="brand">
                    </div>
                    <div class="col-md-6">
                        <label for="short" class="form-label">Short Description</label>
                        <input type="text" class="form-control" id="short" name="short_description">
                    </div>
                    <div class="col-md-6">
                        <label for="fully" class="form-label">Fully Description</label>
                        <input type="text" class="form-control" id="fully" name="fully_description">
                    </div>
                    <div class="col-md-6">
                        <label for="Price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="Price" name="product_price">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Stock Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="stock_quantity">
                    </div>
                    <div class="col-md-6">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="text" class="form-control" id="weight" name="product_weight">
                    </div>
                    <div class="col-md-6">
                        <label for="fly_time" class="form-label">Max Fly Time</label>
                        <input type="text" class="form-control"  name="fly_time">
                    </div>
                    <div class="col-md-6">
                        <label for="resoloution" class="form-label">Camera Resolution</label>
                        <input type="text" class="form-control" id="resoloution" name="camera_resolution">
                    </div>
                    <div class="col-md-6">
                        <label for="battery" class="form-label">Battery Capacity</label>
                        <input type="text" class="form-control" id="battery" name="battery_capacity">
                    </div>
                     <div class="col-md-12">
                        <label for="aircraft" class="form-label">Aircraft</label>
                        <input type="file" name="aircraft">
                    </div>
                    <!--<div class="col-md-6">
                        <label for="aircraft" class="form-label">Aircraft Rc</label>
                        <input type="file" name="aircraft_rc">
                    </div>
                    <div class="col-md-6">
                        <label for="aircraft_with" class="form-label">Aircraft With Rc</label>
                        <input type="file" name="aircraft_with_rc">
                    </div> -->
                   
                   
                    <div class="col-12" style="display: flex;justify-content:space-around;">
                        <button type="submit" class="btn btn-primary" style="width: 200px;">Save</button>
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
               
                
            </div> -->
        </div>
    </div>
</div>