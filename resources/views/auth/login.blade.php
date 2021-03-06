@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                            </div>

                            @if ($errors->has('name'))
                                <span class="help-block text-center">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block text-center">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <input type="hidden" id="isactive" name="isactive" value="1">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">记住我
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登录
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    忘记密码?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
