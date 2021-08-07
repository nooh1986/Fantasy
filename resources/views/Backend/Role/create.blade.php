@extends('Backend.layouts.master')

@section('title')
    إضافه صلاحيه
@endsection

@section('css')
    <!--Internal  Font Awesome -->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!--Internal  treeview -->
    <link href="{{URL::asset('assets/plugins/treeview/treeview-rtl.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Role.store') }}" method="POST" autocomplete="off">
                        @csrf
                        
                        <div class="row">
                            <div class="col-6">
                                <label>اسم الصلاحيه:</label>
                                <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                            </div>
                        </div>   
                        <br>

                        <div class="row">
                            <div class="col-2">
                                <ul id="treeview1">
                                    <li><a href="#">الصلاحيات:</a>
                                        <ul>
                                            <li>

                                            @foreach($permissions as $permission)
                                                <label style="font-size: 16px;">
                                                    <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            @endforeach

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>    
                        <br>    
        
                        <div class="row">
                            <div class="col">
                                <button class="btn ripple btn-primary">حفظ</button>
                            </div>
                        </div>
                    </form>    
                </div>

            </div>
        </div>
    </div>
        

@endsection


@section('js')
    <!-- Internal Treeview js -->
    <script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>
@endsection


