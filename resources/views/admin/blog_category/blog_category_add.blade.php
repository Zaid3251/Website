@extends('admin.admin_master')
@section('admin')
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Blog Category</h4><br><br>

                        <form method="post" id="myForm" action="{{ route('store.blog.category') }}" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                                <div class="form-group col-sm-10">
                                    <input name="blog_category" class="form-control" type="text" id="example-text-input">
                                 
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Category">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function(){
    $('#myForm').validate({
        rules:{
            blog_category:{
                required:true,
            }, 
        },
        messages:{
            blog_category:{
                required:'Please Enter Blog Category',
            }
        },
        errorElement: 'span',
        errorPalcement: function(error,element){
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight:function(element,errorClass,validClass){
            $(element).addClass('is-invalid');
        },
        unhighlight:function(element,errorClass,validClass){
            $(element).removeClass('is-invalid');
        },
    })
})

</script>

@endsection
