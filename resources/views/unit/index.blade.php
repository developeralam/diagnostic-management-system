@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Unit List</span>
			<span class="float-right"><a href="{{route('unit.create')}}" class="btn btn-success btn-sm">Add Unit</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="40%">Unit Name</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\Unit::getAllUnit() as $unit)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$unit->unit_name}}</td>
							<td>{{$unit->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('unit.edit', $unit->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('unit.destroy', $unit->id)}}" method="post">
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