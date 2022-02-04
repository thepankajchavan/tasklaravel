@extends('adminlte::page')

@section('title', 'Dashhboard')

@section('content_header')
@stop

@section('custom_css')

@stop

@section('content')
<div class="row container pt-3">
	<div class="col-md-2 col-sm-6 col-xs-12">
		<a href="{{url('admin/companyMaster')}}">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Company</span>
				<span class="info-box-number">{{$companyCount}}</span>
			</div>
		</div>
		</a>
	</div>
	<div class="col-md-2 col-sm-6 col-xs-12">
		<a href="{{url('admin/fcMaster')}}">
		<div class="info-box">
			<span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">FC</span>
				<span class="info-box-number">{{$totalFc}}</span>
			</div>
		</div>
		</a>
	</div>

	<div class="col-md-2 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Active FC</span>
				<span class="info-box-number">{{$activeFc}}</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-red"><i class="fa fa-user-times"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Inactive FC</span>
				<span class="info-box-number">{{$inActiveFc}}</span>
			</div>
		</div>
	</div>
</div>

<div class="row py-3 container">
    @isset($fcs)
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Recently Joined</h3>
			</div>
			<div class="box-body">
				<ul class="products-list product-list-in-box">
					@foreach($fcs as $value)
					<li class="item">
						<div class="product-img">
							@if($value->profile->profile_image_url!=null && $value!="")
							<img src="{{$value->profile->profile_image_url}}" alt="{{$value->name}}">
							@else
							<img src="{{asset('uploads/agency/user.png')}}" alt="{{$value->name}}">
							@endif
						</div>
						<div class="product-info">
							<a href="{{url('admin/editFC/'.$value->id)}}" class="product-title">{{$value->id}} - {{$value->name}}
								<span class="label label-warning pull-right">{{$value->user_type->type}} - {{$value->user_type->title}}</span>
							</a>
							<span class="product-description">
								Mobile : {{$value->profile->mobile}}
								<br>
								City : {{$value->city->name}}
							</span>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="box-footer text-center">
				<a href="{{url('admin/agencyMaster')}}" class="uppercase">View All Agency</a>
			</div>
		</div>
	</div>
@endisset
</div>
@stop

@section('custom_js')
<script type="text/javascript">
	$(document).ready(function() {
		$("body").addClass('sidebar-collapse');
    });
</script>
@stop