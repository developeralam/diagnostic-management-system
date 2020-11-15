@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Inventory Material List</span>
			<span class="float-right"><a href="{{route('inventorymaterial.create')}}" class="btn btn-success btn-sm">Add To Inventory</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="5%">SI</th>
							<th width="20%">Material Name</th>
							<th width="15%">Unit Name</th>
							<th width="20%">Supplyer Name</th>
							<th width="15%">Quantity</th>
							<th width="15%">Status</th>
							<th width="10%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\InventoryMaterial::getAllMaterial() as $material)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$material->material->material_name}}</td>
							<td>{{$material->unit->unit_name}}</td>
							<td>{{$material->supplyer->company_name}}</td>
							<td>{{$material->quantity}}</td>
							<td>{{$material->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('inventorymaterial.edit', $material->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('inventorymaterial.destroy', $material->id)}}" method="post">
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