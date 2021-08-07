@extends('Backend.layouts.master')

@section('title')
    اللاعبين
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
                        <a class="btn ripple btn-primary" data-target="#create" data-toggle="modal">إضافه لاعب</a>
                    </div>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>#</span></th>
                                    <th class="wd-lg-15p"><span>الاسم</span></th>
                                    <th class="wd-lg-12p"><span>اللقب</span></th>
                                    <th class="wd-lg-18p"><span>البريد الالكتروني</span></th>
                                    <th class="wd-lg-15p"><span>اسم الصلاحيه</span></th>
                                    <th class="wd-lg-15p"><span>الحاله</span></th>
                                    <th class="wd-lg-15p">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($players as $player)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $player->name }}</td>

                                    <td>{{ $player->title }}</td>

                                    <td><a href="#">{{ $player->email }}</a> </td>

                                    <td>
                                        @if(!empty($player->getRoleNames()))
                                            @foreach($player->getRoleNames() as $role)
                                                {{ $role }}
                                            @endforeach
                                        @endif
                                    </td>

                                    
                                    <td class="text-center">
                                        @if($player->status == 1)
                                            <span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>مفعل</span>
                                        @else
                                            <span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div>معاقب</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <a data-target="#edit{{ $player->id }}" data-toggle="modal" class="btn btn-sm btn-info">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a data-target="#delete{{ $player->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                        <a data-target="#password{{ $player->id }}" data-toggle="modal" class="btn btn-sm btn-primary">
                                            <i class="las la-key"></i>
                                        </a>
                                    </td>
                                </tr>

                                @include('Backend.Player.edit')
                                @include('Backend.Player.delete')
                                @include('Backend.Player.password')

                                @endforeach                           
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @include('Backend.Player.create')
@endsection


@section('js')
    @toastr_js
    @toastr_render
@endsection