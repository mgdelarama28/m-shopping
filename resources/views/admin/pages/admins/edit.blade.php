@extends('admin.layouts.master')

@section('breadcrumb')
    <ul class="list-unstyled list-inline au-breadcrumb__list">
        <li class="list-inline-item active">
            <a href="#">Admins</a>
        </li>

        <li class="list-inline-item seprate">
            <span>/</span>
        </li>

        <li class="list-inline-item">
            Edit
        </li>
    </ul>
@endsection

@section('content')
    <section class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-7 m-b-35">Edit Admin</h2>

                        <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="last_name" class="form-control-label font-weight-bold">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" value="{{ $admin->last_name }}">
                                </div>

                                <div class="col col-md-6">
                                    <label for="first_name" class="form-control-label font-weight-bold">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" value="{{ $admin->first_name }}">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="email" class="form-control-label font-weight-bold">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Last Name" class="form-control" value="{{ $admin->email }}">
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="avatar_path" class="form-control-label font-weight-bold">Avatar</label>
                                    <input type="file" id="avatar_path" name="avatar_path" class="form-control mb-2">
                                    <img src="{{ $admin->renderAvatar() }}" id="avatar" alt="" height="200px" width="200px">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-5">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#avatar_path').change(function() {
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();

                if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
                {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                    $('#avatar').attr('src', e.target.result);
                    }

                reader.readAsDataURL(input.files[0]);
                } else {
                    $('#avatar').attr('src', '/storage/default_images/no-image.png');
                }
            });
        });
    </script>
@endsection