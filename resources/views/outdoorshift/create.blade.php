@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">OutDoor Shift</span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="outdoor-shift-form">
				<form action="{{route('outdoorshift.store')}}" method="post">
					@csrf
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="name" class="font-weight-bold font-italic">Name:</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
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
										<input type="number" class="form-control" id="rank" name="rank" placeholder="Enter Rank">
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
											<option value="1">Active</option>
											<option value="0">In Active</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div>
						<div class="col-2">
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
					</div>
				</form>
			</div><!-- .outdoor-shift-form end -->
			<div class="outdoor-shift-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="10%">SI</th>
							<th width="30%">Shift Name</th>
							<th width="20%">Rank</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\OutdoorShift::getAllOutDoorShift() as $data)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$data->name}}</td>
							<td>{{$data->rank}}</td>
							<td>{{$data->status == 1 ? 'Active' : 'Inactive'}}</td>
							<td>
								<a href="{{route('outdoorshift.edit', $data->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('outdoorshift.destroy', $data->id)}}" method="post">
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