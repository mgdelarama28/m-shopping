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
            Show
        </li>
    </ul>
@endsection

@section('content')
    <section class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-7 m-b-35">Admin</h2>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Last Name</label>
                                <p>{{ $admin->last_name }}</p>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="font-weight-bold">First Name</label>
                                <p>{{ $admin->first_name }}</p>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Email</label>
                                <p>{{ $admin->email }}</p>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Avatar</label>
                                <div>
                                    <img src="{{ $admin->renderAvatar() }}" id="avatar" alt="" height="200px" width="200px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection