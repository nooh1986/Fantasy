@extends('Backend.layouts.master')

@section('title')
    نتائج المراحل
@endsection

@section('css')
    @toastr_css
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">نتائج مراحل الفنتازيا</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')
    @include('Backend.layouts.messages_alert')
	    
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <a class="btn ripple btn-primary" href="{{ route('Result.create') }}" >إضافه نتيجه مرحله</a>
                    
                </div>    

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>#</span></th>
                                    <th class="wd-lg-10p"><span>رقم المرحله</span></th>
                                    <th class="wd-lg-10p"><span>اسم اللاعب</span></th>
                                    <th class="wd-lg-10p"><span>له</span></th>
                                    <th class="wd-lg-10p"><span>عليه</span></th>
                                    <th class="wd-lg-10p"><span>السالب</span></th>
                                    <th class="wd-lg-10p"><span>النقاط</span></th>
                                    <th class="wd-lg-10p"><span>النقاط النهائيه</span></th>
                                    <th class="wd-lg-10p"><span>نقاط الفورمولا</span></th>
                                    <th class="wd-lg-10p">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($results as $result)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $result->round->name }}</td>

                                    <td>{{ $result->user->name }}</td>

                                    <td>{{ $result->goal }}</td>

                                    <td>{{ $result->ongoal }}</td>

                                    <td>{{ $result->neg }}</td>

                                    <td>{{ $result->points }}</td>

                                    <td>{{ $result->total }}</td>

                                    <td>{{ $result->score }}</td>

                                    <td>
                                        <a href="{{ route('Result.edit' , $result->id) }}" class="btn btn-sm btn-info">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a data-target="#delete{{ $result->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                @include('Backend.Result.delete')

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

