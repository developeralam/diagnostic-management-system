@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Name Edit</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('materialname.index')}}">Material List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('materialname.update', $material->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="material_name">Material Name</label>
						<input type="text" id="material_name" name="material_name" class="form-control" value="{{$material->material_name}}" placeholder="Enter Material Name">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="unit_id" id="status" class="form-control">
							@foreach(App\Models\Unit::getAllUnit() as $unit)
							<option value="{{$unit->id}}" {{$unit->id == $material->unit_id ? 'selected':''}}>{{$unit->unit_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1" {{$material->status == 1 ? 'selected': ''}}>Active</option>
							<option value="0" {{$material->status == 0 ? 'selected': ''}}>Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Add Unit">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')