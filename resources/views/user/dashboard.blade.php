@extends('adminlte::page')

@section('title', 'Dashhboard')

@section('content_header')
@stop

@section('custom_css')

@stop

@section('content')
<div class="row  mt-2">
	@if(sizeof($users)>0)
    @foreach($users as $user)
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="card">
			<div class="header bg-blue">
				<h3 class="ml-3">{{$user->name}}</h3>
			</div>
			<div class="card-body">
				<div class="row py-3">
                    <div class="col-md-12">Email - {{$user->email}}</div>
                    <br/>
                    <div class="col-md-12">Dob - {{$user->dob}}</div>
                    <br/>
                    <div class="col-md-12">Gender - {{$user->gender}}</div>
                    <br/>
                    <div class="col-md-12">Annual Income - {{$user->annual_income}}</div>
					<br/>
                    <div class="col-md-12">Occupation - {{$user->occupation}}</div>
				</div>
                <div class="row py-3">
                    @php
                    $random = rand(10,100);
                    @endphp
                    <button class="btn btn-sm btn-block bg-green">{{$random}}% Matchied</button>
                </div>
			</div>
		</div>
	</div>
    @endforeach
    @endif
</div>
@stop

@section('custom_js')
<script type="text/javascript">
	$(document).ready(function() {
		$("body").addClass('sidebar-collapse');
    });
</script>
@stop