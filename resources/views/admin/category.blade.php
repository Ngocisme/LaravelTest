@include('admin.header')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a class="btn btn-primary" href="/Category/create" role="button">Create Categories</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Method</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($cate as $cate )
                        <tr>
                            <td>{{ $cate->id_category }}</td>
                            <td>{{ $cate->name_category }}</td>
                            <td>
                                <a href="{{ route('Category.edit',$cate->id_category) }}">Edit</a>
                                ||
                                <form action="{{ route('Category.destroy', $cate->id_category) }}" method="post">
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