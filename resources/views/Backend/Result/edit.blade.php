@extends('Backend.layouts.master')

@section('title')
    تعديل نتيجه
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
                    <form action="{{ route('Result.update' , 'test') }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $result->id }}">
                        
                        <div class="row">

                            <div class="col">
                                <label>رقم المرحله:</label>
                                <select name="round_id" class="form-control SlectBox">
                                    @foreach($rounds as $round)
                                        <option value=" {{ $round->id }} " {{$result->round_id == $round->id ? 'selected':"" }}>{{ $round->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>اسم اللاعب:</label>
                                <select name="user_id" class="form-control SlectBox">
                                    @foreach($players as $player)
                                        <option value=" {{ $player->id }} " {{$result->user_id == $player->id ? 'selected':"" }}>{{ $player->name }}</option>
                                    @endforeach
                                </select>
                            </div>    
                               
                        </div>    
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>النقاط:</label>
                                <input type="number" name="points"  value="{{$result->points}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>السالب:</label>
                                <input type="number" name="neg"  value="{{$result->neg}}" class="form-control">
                            </div>
                        </div>   
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>له:</label>
                                <input type="number" name="goal"  value="{{$result->goal}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>عليه:</label>
                                <input type="number" name="ongoal" value="{{$result->ongoal}}" class="form-control">
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