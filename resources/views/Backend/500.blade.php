@extends('Backend.layouts.master')

@section('title')
	500
@endsection

@section('css')

@endsection

@section('content')

    <div class="page">
            
        <div class="main-error-wrapper  page page-h ">
            <img src="{{ URL::asset('assets/img/media/500.png')}}" class="error-page" alt="error">
            <h2>Oopps. The page you were looking for doesn't exist.</h2>
            <h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="index.html">Back to Home</a>
        </div>
            
    </div>

@endsection

@section('js')

@endsection