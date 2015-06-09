@extends('layout')

@section('content')
    <p>Home page</p>
        @if (Session::has('message'))
        <div id="flash_error">{{ Session::get('message') }}</div>
    @endif
    

@if ($articles->isEmpty())
                <p> Sorry ! there are no articles available right now. </p>
                @else
               
                	@foreach($articles as $article)
                    
                    <article>
                    	
					<h2> {{ $article->articletitle }} </h2>
					<hr />
                        
                       <p style="font-size: 18px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $article->articlebody }} </p>

                    </article>

                    @endforeach
                @endif


@stop
