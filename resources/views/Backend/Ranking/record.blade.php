@extends('Backend.layouts.master')

@section('title')
    سجل الربعيات
@endsection

@section('css')
    
@endsection


@section('content')
    <br><br>
    	
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-lg-20p"><span>رقم الجوله</span></th>
                                    <th class="wd-lg-25p"><span>اسم اللاعب</span></th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($records as $record)

                                <tr>
                                    <td>{{ $record->result->round_id }}</td>

                                    <td>{{ $record->user->name }}</td>
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