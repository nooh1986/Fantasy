@extends('Backend.layouts.master')

@section('title')
    الترتيب العام 
@endsection

@section('css')
    
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الترتيب العام</h4>
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
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-lg-15p"><span>#</span></th>
                                    <th class="wd-lg-25p"><span>اسم اللاعب</span></th>
                                    <th class="wd-lg-20p"><span>نقاط الفنتازيا</span></th>
                                    <th class="wd-lg-20p"><span>نقاط الفورمولا</span></th>
                                    <th class="wd-lg-20p"><span>عدد الربعيات</span></th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($players as $player)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $player->name }}</td>

                                    <td>{{ $player->results->sum('total') }}</td>

                                    <td>{{ $player->totals->sum('total') }}</td>

                                    <td>{{ $player->totals->sum('count') }}</td>

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