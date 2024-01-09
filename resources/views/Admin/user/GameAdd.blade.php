@extends('admin.layouts.app')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Game</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Game</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
               <div class="card-body">
                <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12 mb-2">
                            <input name="title" type="text" placeholder="" class="form-control form-control-line">
                        </div>

                        <label class="col-md-12">Description</label>
                        <div class="col-md-12 mb-2">
                            <input name="description" type="text" placeholder="" class="form-control form-control-line">
                        </div>

                        <label class="col-md-12">Price</label>
                        <div class="col-md-12 mb-2">
                            <input name="price" type="text" placeholder="" class="form-control form-control-line">
                        </div>

                        <label class="col-md-12">Date Release</label>
                        <div class="col-md-12 mb-2">
                            
                            <input name="release_date" type="datetime-local" placeholder="" class="form-control form-control-line">
                        </div>

                        <label class="col-md-12">Game Images</label>
                        <div class="col-md-12 mb-2">
                            <input type="file" name="image[]" class="form-control" multiple>
                        </div>

                        <label class="col-md-12">Genre</label>
                        <div class="col-md-12 mb-2">
                            <select name="category_id" class="form-control form-control-line">
                                <option value="">Please choose category</option>
                                @foreach($categories as $value)
                                <option value="{{$value->id}}">{{$value->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        


                    </div>

                    <div class="col-sm-12">
                        <button class="btn btn-success">Add</button>
                    </div>
                </form>

            </div>
        </div>               
    </div>

    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Nice admin. Designed and Developed by
    <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
@endsection