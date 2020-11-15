@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Service Categories Create</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('servicecatgeories.index')}}">Service Categories List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('servicecatgeories.store')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="category_name">Service Category Name</label>
						<input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter Service Category Name">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Add Service">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')