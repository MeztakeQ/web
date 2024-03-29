@extends('admin.admin_master')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4="
        crossorigin="anonymous"></script>

        <style type="text/css">
            .bootstrap-tagsinput .tag{
                margin-right: 2px;
                color: #b70000;
                font-weight: 700px;
            } 
        </style>


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Blog Page</h4>

                            <form method="post" action="{{ route('update.blog') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $blogs->id }}">



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <select name="blog_category_id" class="form-select" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $blogs->blog_category_id ? 'selected' : ''}}>{{ $cat->blog_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>





                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_title" type="text" value="{{ $blogs->blog_title }}"
                                            id="example-text-input">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_tags" type="text" value="{{ $blogs->blog_tags }}" data-role="tagsinput">                                      
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">
                                        Blog Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="blog_description">
                                            {{ $blogs->blog_description }}"
                                        </textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                                    <div class="col-sm-10">
                                        <input name="blog_image" class="form-control" type="file" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile image</label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ asset($blogs->blog_image)}}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <input class="btn btn-info waves-effect waves-light" type="submit"
                                    value="Update Blog Data">
                            </form>
                            <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
