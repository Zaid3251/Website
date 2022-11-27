@extends('admin.admin_master')
@section('admin')
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Multi Image</h4><br><br>

                        <form method="post" action="{{ route('store.multi.image') }}" enctype="multipart/form-data">
                            @csrf
                      
      
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image:</label>
                                <div class="col-sm-10">
                                    <input name="multi_image[]" class="form-control cls_image" type="file" multiple="" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img class="rounded avatar-lg" src="{{ (!empty($aboutpage->multi_image))? url($aboutpage->multi_image):url('upload/maka.jpg') }}" alt="Card image cap" id="showImage">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Multi Image">
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
