<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>



<div class="main_box">
    <div class="container">
        <div class="table-sm table-responsive-sm">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Upload by</th>
                        <th scope="col">Upload date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="product_details">
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="../../website/public/uploads/portfolio/bg.jpg" class="" width="60" height="50" alt="..."></td>
                        <td>School Website</td>
                        <td>Pijush Kanti Mandal</td>
                        <td>10/12/2022</td>
                        <td>90</td>
                        <td><i class="fas fa-edit"></i></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <button id="show_hide_product_btn" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Product</button>
            </div>
        </div>
        <form>
            <div class="row mt-2" id="show_hide_product_form">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" aria-describedby="textHelp" placeholder="Enter Product Name" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="upload_by" class="form-label">Upload by</label>
                        <input type="text" class="form-control" id="upload_by" aria-describedby="textHelp" placeholder="Enter Author Name" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="upload_date" class="form-label">Upload date</label>
                        <input type="date" class="form-control" id="upload_date" aria-describedby="textHelp" placeholder="Enter Upload date" autocomplete="off" value="<?php echo date('Y-m-d') ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="product_1st_img" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="product_1st_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="product_document" class="form-label">Product Document</label>
                        <input class="form-control" type="file" id="product_document">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="product_second_img" class="form-label">Product Second Image</label>
                        <input class="form-control" type="file" id="product_second_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price </label>
                        <input class="form-control" type="number" id="price" placeholder="Enter Product Price">
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" id="product_save_btn" class="btn btn-success">Save / Update</button>
                </div>
            </div>
        </form>
    </div>
</div>