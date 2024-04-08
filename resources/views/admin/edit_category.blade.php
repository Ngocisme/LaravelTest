@include('admin.header')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Category Example</h6>
        </div>
        <div class="card-body">
            <h2>Edit Category</h2>
            <form action="{{ route('Category.update', $cate->id_category) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name:</label>
                    <input type="text" class="form-control" id="name" name="name_category" required value="{{ $cate->name_category }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Category</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('admin.footer')