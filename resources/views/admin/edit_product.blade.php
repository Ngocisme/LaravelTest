@include('admin.header')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <h2>Edit Product</h2>
            <form action="{{ route('Product.update', $product->id_product) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" name="name_product" required value="{{ $product->name_product }}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description_product" rows="4"  value="{{ $product->description_product }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price_original_product" required value="{{ $product->price_original_product }}">
                </div>
                <div class="form-group">
                    <label for="price">Price Sale:</label>
                    <input type="text" class="form-control" id="price" name="price_sale_product" value="{{ $product->price_sale_product }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category Id</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id_category" value="{{ $product->id_category }}">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Choose your image here</label>
                    <input class="form-control" type="file" id="formFile" name ="img_product">
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('admin.footer')