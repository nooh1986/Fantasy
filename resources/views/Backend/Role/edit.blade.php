@extends('Backend.layouts.master')

@section('title')
    تعديل صلاحيه
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
                    <form action="{{ route('Role.update' , 'test') }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id"  value="{{ $role->id }}">

                        <div class="row">
                            <div class="col-6">
                                <label>اسم الصلاحيه:</label>
                                <input type="text" name="name"  value="{{ $role->name }}" class="form-control">
                            </div>
                        </div>   
                        <br>

                        <div class="row">
                            <div class="col-lg-2">
                                <ul id="treeview1">
                                    <li><a href="#">الصلاحيات:</a>
                                        <ul>
                                            <li>

                                            @foreach($permissions as $permission)
                                                <label style="font-size: 16px;">
                                                    <input type="checkbox" name="permission[]" value="{{ $permission->id }}" {{in_array($permission->id , $rolePermissions)  ? 'checked' : '' }}>
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

