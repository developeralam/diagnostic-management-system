@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Cabin</span>
			<span class="float-right"><a href="{{route('cabin.create')}}" class="btn btn-success btn-sm">Add Cabin</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="cabin-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="20%">Ward Name</th>
							<th width="30%">Space Location</th>
							<th width="30%">Price</th>
							<th width="30%">Condition</th>
							<th width="30%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\Cabin::getAllCabin() as $cabin)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$cabin->ward->ward_name}}</td>
							<td>{{$cabin->space_location}}</td>
							<td>{{$cabin->price}}</td>
							<td>{{$cabin->condition == 1? 'Available' : 'Maintainced'}}</td>
							<td>{{$cabin->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('cabin.edit', $cabin->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('cabin.destroy', $cabin->id)}}" method="post">
									@csrf
									<input type="hidden" name="_method" value="DELETE">
									<button class="border-0" type="submit"><i class="ion-trash-a"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- .cabin-list end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .warcabind end -->
@endsection('content')