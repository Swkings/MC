@extends('layouts.common')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center"><b>个人资料</b></div>


                        @if (session('status'))
                            <div class="panel-body">
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            </div>
                        @endif

                        <div class="userlist" id="userlist">
                            <div>ID:{{$data->id}}</div>
                            <div>NAME:{{$data->name}}</div>
                            <div>EMAIL:{{$data->email}}</div>
                            <div>CREATED_AT:{{$data->created_at}}</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection


