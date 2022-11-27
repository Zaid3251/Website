@extends('admin.admin_master')
@section('admin')
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page</h4>

                        <form method="post" action="{{ route('update.about',$aboutpage->id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{  $aboutpage->title  }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title:</label>
                                <div class="col-sm-10">
                                    <input name="short_title" class="form-control" type="text" value="{{  $aboutpage->short_title  }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description:</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">
                                    {{  $aboutpage->short_description  }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description:</label>
                                <div class="col-sm-10">
                                <textarea id="elm1" name="long_description">
                                {{  $aboutpage->long_description  }}
                                </textarea>
                                   
                                </div>
                            </div>
      
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">About Image:</label>
                                <div class="col-sm-10">
                                    <input name="about_image" class="form-control cls_image" type="file" id="example-text-input" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image))? url($aboutpage->about_image):url('upload/maka.jpg') }}" alt="Card image cap" id="showImage">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
<script type="text/javascript">


    $(document).ready(function (){
        $(document).on('change', '.cls_image', function (e) {
            var reader= new FileReader();
            reader.onload= function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });

</script>

@endsection
