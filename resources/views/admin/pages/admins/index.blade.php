@extends('admin.layouts.master')

@section('breadcrumb')
    <ul class="list-unstyled list-inline au-breadcrumb__list">
        <li class="list-inline-item active">
            <a href="#">Admin</a>
        </li>

        <li class="list-inline-item seprate">
            <span>/</span>
        </li>

        <li class="list-inline-item">
            Admins
        </li>
    </ul>
@endsection

@section('content')
    <section class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h2 class="title-7 m-b-35">Admins</h2>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Email Verified At</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($admins as $admin)
                                        <tr class="tr-shadow">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $admin->last_name }}</td>
                                            <td>{{ $admin->first_name }}</td>
                                            <td><span class="block-email">{{ $admin->email }}</span></td>
                                            <td>
                                                <span class="status--process">{{ $admin->roles[0]->name }}</span>
                                            </td>
                                            <td>{{ $admin->email_verified_at }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    @can('admins.view', 'admin')
                                                        <a href="{{ route('admin.admins.show', Auth::guard('admin')->user()->id) }}" class="btn btn-primary mr-2" data-toggle="tooltip" data-placement="top" title="View">
                                                            <i class="fas fa-eye"></i>
                                                        </a href="">
                                                    @endcan

                                                    @can('admins.edit', 'admin')
                                                        <a href="{{ route('admin.admins.edit', Auth::guard('admin')->user()->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a href="">
                                                    @endcan
                                                    
                                                    @can('admins.destroy', 'admin')
                                                        <a href="" class="btn btn-danger ml-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </a href="">
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $admins->links() }}
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection