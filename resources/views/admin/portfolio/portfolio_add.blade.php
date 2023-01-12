@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4="
        crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Portfolio Page</h4>

                            <form method="post" action="{{ route('store.portfolio')  }}" enctype="multipart/form-data">
                                @csrf

                                {{-- <input type="hidden" name="id" value="{{ $aboutpage->id }}"> --}}



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="portfolio_name" type="text" value="" id="example-text-input">
                                    </div>
                                </div>

                                @error('portfolio_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="portfolio_title" type="text"
                                            value="" id="example-text-input">
                                    </div>
                                </div>
                                @error('portfolio_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="portfolio_description" >
                                            
                                        </textarea>
                                    </div>
                                </div>
                               

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                                    <div class="col-sm-10">
                                        <input name="portfolio_image" class="form-control" type="file" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile image</label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ url('upload/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Portfolio Page">
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