@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Dose</span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="dose-shift-form">
				<form action="{{route('drugduration.store')}}" method="post">
					@csrf
					<div class="row">
						<div class="col-7">
							<div class="form-group">
								<div class="row">
									<div class="col-2">
										<label for="duration_name" class="font-weight-bold font-italic">Dose Name:</label>
									</div><!-- .col-4 end -->
									<div class="col-10">
										<input type="text" class="form-control" id="duration_name" name="duration_name" placeholder="Enter Duration Name">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div><!-- .col-5 end -->
						<div class="col-3">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="status" class="font-weight-bold font-italic">Status:</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="status" id="status" class="form-control">
											<option value="1">Active</option>
											<option value="0">In Active</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div>
						<div class="col-2">
							<input type="submit" class="btn btn-success btn-sm" value="Submit">
						</div>
					</div>
				</form>
			</div><!-- .outdoor-shift-form end -->
			<div class="outdoor-shift-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="15%">SI</th>
							<th width="50%">Dose Name</th>
							<th width="20%">Status</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\DrugDuration::getAllDuration() as $duration)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$duration->duration_name}}</td>
							<td>{{$duration->status == 1 ? 'Active' : 'Inactive'}}</td>
							<td>
								<a href="{{route('drugduration.edit', $duration->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('drugduration.destroy', $duration->id)}}" method="post">
									@csrf
									<input type="hidden" name="_method" value="DELETE">
									<button class="border-0" type="submit"><i class="ion-trash-a"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- .outdoor-shift-list end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .appointment end -->
@endsection('content')