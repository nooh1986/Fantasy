@extends('Backend.layouts.master')

@section('title')
    نتائج الفورمولا
@endsection

@section('css')
    @toastr_css
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">نتائج الفورمولا</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')
    @include('Backend.layouts.messages_alert')
	
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a class="btn ripple btn-primary" href="{{ route('Formula.create') }}" >إضافه نتيجه فورمولا</a>
                    </div>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>#</span></th>
                                    <th class="wd-lg-10p"><span>رقم المرحله</span></th>
                                    <th class="wd-lg-15p"><span>اسم اللاعب</span></th>
                                    <th class="wd-lg-10p"><span>له</span></th>
                                    <th class="wd-lg-10p"><span>عليه</span></th>
                                    <th class="wd-lg-10p"><span>السالب</span></th>
                                    <th class="wd-lg-10p"><span>النقاط</span></th>
                                    <th class="wd-lg-10p"><span>النقاط النهائيه</span></th>
                                    <th class="wd-lg-15p">الفورمولا</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($formulas as $formula)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $formula->round->name }}</td>

                                    <td>{{ $formula->user->name }}</td>

                                    <td>{{ $formula->goal }}</td>

                                    <td>{{ $formula->ongoal }}</td>

                                    <td>{{ $formula->neg }}</td>

                                    <td>{{ $formula->points }}</td>

                                    <td>{{ $formula->total }}</td>

                                    <td>{{ $formula->totals->total }}</td>
                                    
                                </tr>
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