@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
@include('warning')
<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="alert alert-info" role="alert">
                    You are logged in!
					</div>					

						@if($personcount ==0)
							<div class="py-3">
                                <div class="col-sm-3">
                                    <h3>One more registration step!</h3>
                                    <p><a href="/person/create" class="btn btn-primary">Create a character and villa</a>.</p>
                                </div>
                            </div>
						@endif
		                <!--game menu-->
                        @include('layouts.gamemenu')						
							
                </div>
            </div> 
    </div>
</div>
@endsection




