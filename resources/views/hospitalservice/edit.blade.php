@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Hospital Service Edit</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('hospitalservice.index')}}">Hospital Service List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('hospitalservice.update', $service->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="service_name">Service Name</label>
						<input type="text" id="service_name" name="service_name" class="form-control" value="{{$service->service_name}}" placeholder="Enter Service Name">
					</div>
					<div class="form-group">
						<label for="service_code">Service Code</label>
						<input type="number" id="service_code" name="service_code" class="form-control" value="{{$service->service_code}}" placeholder="Enter Service Code">
					</div>
					<div class="form-group">
						<label for="service_price">Service Price</label>
						<input type="number" value="{{$service->service_price}}" id="service_price" name="service_price" class="form-control" placeholder="Enter Service Price">
					</div>
					<div class="form-group">
						<label for="service_category">Service Category</label>
						<select name="service_category" id="service_category" class="form-control">
							@foreach(App\Models\ServiceCatgegories::getAllServiceCategory() as $cat)
							<option value="{{$cat->id}}" {{$cat->id == $service->service_category? 'selected':''}}>{{$cat->category_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1" {{$service->status == 1? 'selected':''}}>Active</option>
							<option value="0" {{$service->status == 0? 'selected':''}}>Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Update Service">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')