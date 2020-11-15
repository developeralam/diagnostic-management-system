@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Supplyer Create</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('materialsupplyer.index')}}">Material Supplyer List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('materialsupplyer.store')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="name">Material Supplyer Name</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Enter Material Supplyer Name">
					</div>
					<div class="form-group">
						<label for="company_name">Material Supplyer Company Name</label>
						<input type="text" id="company_name" name="company_name" class="form-control" placeholder="Enter Material Supplyer Company Name">
					</div>
					<div class="form-group">
						<label for="contact">Material Supplyer Contact</label>
						<input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Material Supplyer Contact">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Add Supplyer">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')