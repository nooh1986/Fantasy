@extends('Backend.layouts.master')

@section('title')
    اللاعبون
@endsection

@section('css')

@endsection

@section('content')
	
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>#</span></th>
                                    <th class="wd-lg-17p"><span>الاسم</span></th>
                                    <th class="wd-lg-17p"><span>البريد الالكتروني</span></th>
                                    <th class="wd-lg-17p"><span>اللقب</span></th>
                                    <th class="wd-lg-15p"><span>الحاله</span></th>
                                    <th class="wd-lg-20p">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($players as $player)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $player->name }}</td>

                                    <td>{{ $player->email }}</td>

                                    <td>{{ $player->title }}</td>

                                    <td class="text-center">
                                        <span class="label text-muted d-flex"><div class="dot-label bg-gray-300 ml-1"></div>Inactive</span>
                                    </td>
                                    
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
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