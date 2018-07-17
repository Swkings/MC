@extends('layouts.common')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center"><b>新建任务</b></div>

                        @if (session('response'))
                        <div class="panel-body">
                            <div class="alert alert-success">
                                {{ session('response') }}
                            </div>
                        </div>
                        @endif


                        @if (session('status'))
                        <div class="panel-body">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                        @endif

                    <form action="/mark" method="post" class="container linehight">
                        {{ csrf_field() }}
                        <label for="name">请选择任务类型</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="type" id="optionsRadios1" value="1" checked> 次数型
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="type" id="optionsRadios2" value="2">时间段型
                            </label>
                        </div>
                        <label for="name">请输入任务名称</label>
                        <input type="text" name="project" class="form-control" placeholder="如：getup">
                        <label for="name">请输入时间段（次数型可不填此项）</label>
                        <input type="text" name="stime" class="form-control" placeholder="起始时间 如：07:30:00">
                        <input type="text" name="etime" class="form-control" placeholder="结束时间 如：09:30:00">
                        <div style="text-align:center; margin: 0 auto; background-color: #f2dede;">
                            <button type="submit" class="btn btn-default">创建</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


