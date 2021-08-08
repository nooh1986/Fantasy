@extends('Backend.layouts.master')

@section('title')
    تسجيل نتائج الفورمولا
@endsection

@section('css')
    
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تسجيل نتائج الفورمولا</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')
    
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Formula.store') }}" method="POST" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <label>اختر رقم المرحله:</label>
                                <select name="id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($rounds as $round)
                                        <option value="{{$round->id}}">{{$round->name}}</option>
                                    @endforeach
                                </select>
                                <br>

                                <button class="btn ripple btn-primary">تسجيل نقاط الفورمولا</button>
                            </div>
                        </div>    
                    </form>    
                </div>

            </div>
        </div>
    </div>
        

@endsection


@section('js')
   
@endsection