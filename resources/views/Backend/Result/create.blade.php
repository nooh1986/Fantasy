@extends('Backend.layouts.master')

@section('title')
    إضافه نتيجه
@endsection

@section('css')
    
@endsection


@section('content')
    @include('Backend.layouts.messages_alert')
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Result.store') }}" method="POST" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>رقم المرحله:</label>
                                <select name="round_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($rounds as $round)
                                        <option value="{{$round->id}}">{{$round->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>اسم اللاعب:</label>
                                <select name="user_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($players as $player)
                                        <option value="{{$player->id}}">{{$player->name}}</option>
                                    @endforeach
                                </select>
                            </div>    
                               
                        </div>    
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>النقاط:</label>
                                <input type="number" name="points"  value="{{old('points')}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>السالب:</label>
                                <input type="number" name="neg"  value="{{old('neg')}}" class="form-control">
                            </div>
                        </div>   
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>له:</label>
                                <input type="number" name="goal"  value="{{old('goal')}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>عليه:</label>
                                <input type="number" name="ongoal" value="{{old('phone')}}" class="form-control">
                            </div>
                        </div>  
                        <br>    
        
                        <div class="row">
                            <div class="col">
                                <button class="btn ripple btn-primary">حفظ المعلومات</button>
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