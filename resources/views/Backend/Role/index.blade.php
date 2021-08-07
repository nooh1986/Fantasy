@extends('Backend.layouts.master')

@section('title')
    الصلاحيات
@endsection

@section('css')
    @toastr_css
@endsection

@section('content')
    @include('Backend.layouts.messages_alert')
	<br><br>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a class="btn ripple btn-primary" href="{{ route('Role.create') }}">إضافه صلاحيه</a>
                    </div>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-20p"><span>#</span></th>
                                    <th class="wd-lg-50p"><span>اسم الصلاحيه</span></th>
                                    <th class="wd-lg-30p">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $role->name }}</td>

                                    <td>
                                        <a href="{{ route('Role.edit', $role->id) }}" class="btn btn-sm btn-primary">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a data-target="#delete{{ $role->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>

                                </tr>

                                @include('Backend.Role.delete')

                                @endforeach                           
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection


@section('js')
    @toastr_js
    @toastr_render
@endsection