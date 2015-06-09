@extends('layout')

@section('content')

<div>
  <h3>Welcome "{{ Auth::user()->username }}" to the Dashboard</h3>
  <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Hi, your user ID is: {{ Auth::user()->id }} . 
  	This is your dashboard page the details you enter in the form below are added to the database 
  	and displayed on the home page. This page requires authentication and cannot be viewed without 
  	 login credentials.   </p>
</div>

 <div class="row">
  <div class="col-sm-3" style="background:#FFFCCC">

<div id="nav">
            <ul style="line-height:40px;">
                <li>{{ HTML::linkRoute('home', 'Home') }}</li>
                @if(Auth::check())
                    <li>{{ HTML::linkRoute('profile', 'Profile' ) }}</li>
                    <li>{{ HTML::linkRoute('dashboard', 'Dashboard' ) }}</li>
                    <li>{{ HTML::linkRoute('logout', 'Logout ('.Auth::user()->username.')') }}</li>
                @else
                    <li>{{ HTML::linkRoute('login', 'Login') }}</li>
                @endif
            </ul>
        </div><!-- end nav -->

</div><!-- col-sm-4 ends-->



  <div class="col-sm-9">

    <span style="color:red"> {{ HTML::ul($errors->all(), array('class'=>'errors'))}} </span>

{{ Form::open(['url'=> 'dashboard', 'method'=>'POST']) }}

@foreach($articles as $article)

    <!-- username field -->
    <p>
        {{ Form::label('articletitle', 'Type a Title for the Article') }}<br/>
        {{ Form::text('articletitle', $article->articletitle, ['size' => '110']) }}
    </p>

    <!-- password field -->
    <p>
        {{ Form::label('articlebody', 'Content here') }}<br/>
        {{ Form::textArea('articlebody', $article->articlebody, ['size' => '110x25']) }}
    </p>

    <!--
    <p>
        {{ Form::label('remember_token', 'Remember') }}<br/>
        {{ Form::checkBox('remember_token') }}
    </p>
    -->

    <!-- submit button -->
    <p>{{ Form::submit('Post Article',  ['class' => 'btn btn-primary']) }}</p>

    {{ Form::close() }}

    @endforeach



  </div><!-- col-sm-9 ends-->
</div>

@stop
