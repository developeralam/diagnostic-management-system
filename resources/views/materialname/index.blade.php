@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Name List</span>
			<span class="float-right"><a href="{{route('materialname.create')}}" class="btn btn-success btn-sm">Add Material</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="40%">Material Name</th>
							<th width="40%">Unit Name</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\Materialname::getAllMaterialName() as $material)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$material->material_name}}</td>
							<td>{{$material->unit->unit_name}}</td>
							<td>{{$material->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('materialname.edit', $material->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('materialname.destroy', $material->id)}}" method="post">
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