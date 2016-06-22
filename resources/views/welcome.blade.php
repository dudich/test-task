@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
		
		@if (Auth::guest())
			Welcome Guest
		@else
			Welcome  {{ Auth::user()->name }}! You are logged in!
		@endif
		</div>

                <div class="panel-body">
                    Test task for "Full time Full Stack Developer" job
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
