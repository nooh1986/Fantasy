@extends('Backend.layouts.master')

@section('title')
    سجل الربعيات
@endsection

@section('css')
    
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">سجل الربعيات</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')
       	
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-lg-20p"><span>رقم الجوله</span></th>
                                    <th class="wd-lg-40p"><span>اسم اللاعب</span></th>
                                    <th class="wd-lg-40p"><span>النقاط</span></th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($records as $record)

                                <tr>
                                    <td>{{ $record->round_id }}</td>

                                    <td>{{ $record->user->name }}</td>

                                    <td>{{ $record->total }}</td>
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
    
@endsection