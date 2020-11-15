@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Agent List</span>
			<span class="float-right"><a href="{{route('agent.create')}}" class="btn btn-success btn-sm">Add Agent</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="40%">Agent Name</th>
							<th width="40%">Agent Phone</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\Agent::getAllAgent() as $agent)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$agent->name}}</td>
							<td>{{$agent->phone}}</td>
							<td>{{$agent->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('agent.edit', $agent->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('agent.destroy', $agent->id)}}" method="post">
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
</div><!-- .servicecatgeories end -->
@endsection('content')