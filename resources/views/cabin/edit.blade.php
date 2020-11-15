@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Cabin Update</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('cabin.index')}}">Cabin List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('cabin.update', $cabin->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="ward_id" class="font-weight-bold text-italic">Ward Name</label>
						<select name="ward_id" id="ward_id" class="form-control">
							<option value="0">Select One....</option>
							@foreach(App\Models\Ward::getAllWard() as $ward)
								<option {{$ward->id == $cabin->ward_id ? 'selected':''}} value="{{$ward->id}}">{{$ward->ward_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="space_location" class="font-weight-bold text-italic">Space Location</label>
						<input type="text" id="space_location" name="space_location" class="form-control" placeholder="Enter Space Location" value="{{$cabin->space_location}}">
					</div>
					<div class="form-group">
						<label for="price" class="font-weight-bold text-italic">Price</label>
						<input type="number" id="price" name="price" class="form-control" placeholder="Enter Cabin Price" value="{{$cabin->price}}">
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="condition" class="font-weight-bold text-italic">Condition</label>
								<select name="condition" id="condition" class="form-control">
									<option value="1" {{$cabin->condition == 1?'selected':''}}>Available</option>
									<option value="0" {{$cabin->condition == 0?'selected':''}}>Maintainance</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="status" class="font-weight-bold text-italic">Status</label>
								<select name="status" id="status" class="form-control">
									<option value="1" {{$cabin->status == 1?'selected':''}}>Active</option>
									<option value="0" {{$cabin->status == 0?'selected':''}}>In Active</option>
								</select>
							</div>
						</div>
					</div><!-- .row end -->
					<input type="submit" class="btn btn-success" value="Update Cabin">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .cabin end -->
@endsection('content')