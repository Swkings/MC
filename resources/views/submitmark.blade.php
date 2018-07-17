@extends('layouts.common')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center"><b>打卡项目</b></div>


                        @if (session('status'))
                        <div class="panel-body">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                        @endif

                    <?php $i=0 ?>
                    <form action="/" method="post" class="container">
                        {{ csrf_field() }}

                        @foreach($data as $res)
                            @if(strtotime($res->marktime)-strtotime(date("Y-m-d"))<0)
                                <?php $i++ ?>
                                <div class="checkbox row">
                                    <div class="col-xs-6 col-sm-6">{{$res->project}}</div>
                                    <div class="col-xs-4 col-sm-4"><input type="checkbox" name="{{$res->project}}"></div>
                                </div>
                            @else
                                <div class="checkbox row">
                                    <div class="col-xs-6 col-sm-6">{{$res->project}}</div>
                                    <div class="col-xs-4 col-sm-4">{{$res->cardnum}}</div>
                                </div>
                            @endif
                        @endforeach
                        @if($i!=0)
                            <button type="submit" class="btn btn-default">打卡</button>
                        @else
                            <div style="text-align:center; margin: 0 auto; width: 200px; background-color: #f2dede">今天的任务已完成</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


