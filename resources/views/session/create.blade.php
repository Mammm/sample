@extends('layouts.default')
@section('title', '登录')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登录</h5>
            </div>
            <div class="panel-body">
                @include('shared._error')
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>邮箱:</label>
                        <input type="email" name="email" class="form-control" property="email"
                               value="{{ old('email') }}"/>
                    </div>
                    <div class="form-group">
                        <label>密码:</label>
                        <input type="password" name="password" class="form-control" property="password"
                               value="{{ old('password') }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">登录</button>
                    <hr>
                    <p>还没有账号?<a href="{{ route('signup') }}">现在注册!</a></p>
                </form>
            </div>
        </div>
    </div>
@stop