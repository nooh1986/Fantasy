@extends('Backend.layouts.master')

@section('title')
    نتائج مراحل الفورمولا
@endsection

@section('css')
    
@endsection


@section('content')
   
	<br>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    
                        <form action="{{ route('round') }}" method="POST" autocomplete="off">
                            @csrf
                                
                            <div class="row">
                                <div class="col-3">
                                    <label>اختر رقم المرحله:</label>
                                    <select name="id" class="form-control SlectBox">
                                        <option value="" selected disabled>------</option>
                                        @foreach($rounds as $round)
                                            <option value="{{$round->id}}">{{$round->name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>  

                                <div class="col-3">
                                    <button class="btn ripple btn-primary">اضغط يا حلو</button>
                                </div>    
                                
                            </div>    
                        </form>  
                   
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
                                    <th class="wd-lg-10p"><span>النقاط</span></th>
                                    <th class="wd-lg-10p"><span>السالب</span></th>
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

                                    <td>{{ $formula->points }}</td>
                                   
                                    <td>{{ $formula->neg }}</td>

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
    
@endsection