@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">OutDoor Shift</span>
			<span class="float-right"><a class="btn btn-info" href="{{route('outdoorshift.create')}}">All OutDoors Shirt</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="outdoor-shift-form">
				<form action="{{route('outdoorshift.update', $outdoors->id)}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="name" class="font-weight-bold font-italic">Name:</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$outdoors->name}}">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div><!-- .col-5 end -->
						<div class="col-3">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="rank" class="font-weight-bold font-italic">Rank:</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control" id="rank" name="rank" placeholder="Enter Rank" value="{{$outdoors->rank}}">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div>
						<div class="col-3">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="status" class="font-weight-bold font-italic">Status:</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="status" id="status" class="form-control">
											<option value="1" {{$outdoors->status == 1? 'selected':''}}>Active</option>
											<option value="0" {{$outdoors->status == 0? 'selected':''}}>In Active</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div>
						<div class="col-2">
							<input type="submit" class="btn btn-success" value="Update">
						</div>
					</div>
				</form>
			</div><!-- .outdoor-shift-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .appointment end -->
@endsection('content')