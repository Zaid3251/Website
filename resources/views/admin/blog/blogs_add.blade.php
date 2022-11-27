@extends('admin.admin_master')
@section('admin')

<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<style type="text/css">
.bootstrap-tagsinput .tag {
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

                        <h4 class="card-title">Add Blogs</h4>

                        <form method="post" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category:</label>
                                <div class="col-sm-10">
                                    <select name="blog_category_id" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->blog_category }}</option>
                                        @endforeach
                                    </select>
                                    @error('blog_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input name="blog_title" class="form-control" type="text" id="example-text-input">
                                    @error('blog_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tags:</label>
                                <div class="col-sm-10">
                                    <input name="blog_tags" value="home,tech" class="form-control" type="text"
                                        data-role="tagsinput">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description:</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="blog_description">
                                </textarea>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image:</label>
                                <div class="col-sm-10">
                                    <input name="blog_image" class="form-control cls_image" type="file"
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg" src="{{url('upload/maka.jpg') }}"
                                        alt="Card image cap" id="showImage">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $(document).on('change', '.cls_image', function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });

});
</script>


@endsection