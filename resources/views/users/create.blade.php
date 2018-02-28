@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>注册</h5>
            </div>
            <div class="panel-body">
                @include('shared._error')
                <form method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>用户名</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>邮箱</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label>确认密码</label>
                        <input type="password" class="form-control" name="password_confirm"
                               value="{{ old('password_confirm') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop