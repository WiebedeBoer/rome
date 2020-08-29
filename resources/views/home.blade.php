@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
    <!--game menu-->
    @include('layouts.gamemenu')
    <!--warning-->
    @include('warning')

                
		               
        <div class="card-header">Dashboard</div>
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
                                <p><a href="/persons/create" class="btn btn-primary">Create</a> a character and villa.</p>
                            </div>
                        </div>
					@endif						

@endsection
