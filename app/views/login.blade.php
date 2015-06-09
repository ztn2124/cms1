@extends('layout')

@section('content')
<div class="row">
<div class="col-sm-4"></div>
    <div class="col-sm-4"><div style="width:500px; height:300px; border:1px; background:#FFFCCC; padding:10px 10px 10px 140px;">
    <h1>Login</h1>

    <!-- check for login error flash var -->
    @if (Session::has('flash_error'))
        <div id="flash_error" style="color: red;">{{ Session::get('flash_error') }}</div>
    @endif



{{ Form::open(['url'=> 'login', 'method'=>'POST']) }}



    <!-- username field -->
    <p>
        {{ Form::label('username', 'Username') }}<br/>
        {{ Form::text('username', Input::old('username')) }}
    </p>

    <!-- password field -->
    <p>
        {{ Form::label('password', 'Password') }}<br/>
        {{ Form::password('password') }}
    </p>

    <!--
    <p>
        {{ Form::label('remember_token', 'Remember') }}<br/>
        {{ Form::checkBox('remember_token') }}
    </p>
    -->

    <!-- submit button -->
    <p>{{ Form::submit('Login',  ['class' => 'btn btn-primary']) }}</p>

    {{ Form::close() }}

</div>
</p> 
</div>
<div class="col-sm-4"></div>   
</div>
@stop
