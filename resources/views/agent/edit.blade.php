@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Agent Edit</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('servicecatgeories.index')}}">Agent List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('agent.update', $agent->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="name">Agent Name</label>
						<input type="text" id="name" name="name" class="form-control" value="{{$agent->name}}" placeholder="Enter Agent Name">
					</div>
					<div class="form-group">
						<label for="phone">Agent Phone</label>
						<input type="number" id="phone" name="phone" class="form-control" value="{{$agent->phone}}" placeholder="Enter Agent Phone">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1" {{$agent->status == 1?'selected':''}}>Active</option>
							<option value="0" {{$agent->status == 0?'selected':''}}>Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Update Agent">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@endsection('content')