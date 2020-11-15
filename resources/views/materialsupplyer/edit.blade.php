@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Supplyer Edit</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('materialsupplyer.index')}}">Material Supplyer List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('materialsupplyer.update', $materialsupplyer->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="name">Material Supplyer Name</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Enter Material Supplyer Name" value="{{$materialsupplyer->name}}">
					</div>
					<div class="form-group">
						<label for="company_name">Material Supplyer Company Name</label>
						<input type="text" id="company_name" name="company_name" class="form-control" placeholder="Enter Material Supplyer Company Name" value="{{$materialsupplyer->company_name}}">
					</div>
					<div class="form-group">
						<label for="contact">Material Supplyer Contact</label>
						<input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Material Supplyer Contact" value="{{$materialsupplyer->contact}}">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1" {{$materialsupplyer->status == 1? 'selected':''}}>Active</option>
							<option value="0" {{$materialsupplyer->status == 0? 'selected':''}}>Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Update Supplyer">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')