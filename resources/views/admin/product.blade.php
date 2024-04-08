@include('admin.header')

<!-- Begin Page Content -->
<div class="container-fluid">
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            <a class="btn btn-primary" href="/Product/create" role="button">Create Product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Method</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product )
                        <tr>
                            <td>{{$product->id_product}}</td>
                            <td class="modernWay">{{$product->name_product}}</td>
                            <td>{{$product->price_original_product}}</td>
                            <td>{{$product->price_sale_product}}</td>
                            <td>{{$product->id_category}}</td>
                            <td>
                                <img src="/img/{{$product->img_product}}" alt="" srcset="" class="icon">
                            </td>
                            <td>
                                <a href="{{ route('Product.edit', $product->id_product) }}">Edit</a>
                                ||
                                <form action="{{ route('Product.destroy', $product->id_product) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('admin.footer')