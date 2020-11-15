@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Supplyer Name List</span>
			<span class="float-right"><a href="{{route('materialsupplyer.create')}}" class="btn btn-success btn-sm">Add Material Supplyer</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="40%">Material Supplyer Name</th>
							<th width="40%">Company Name</th>
							<th width="20%">Contact</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\MaterialSupplyer::getAllSupplyer() as $supplyer)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$supplyer->name}}</td>
							<td>{{$supplyer->company_name}}</td>
							<td>{{$supplyer->contact}}</td>
							<td>{{$supplyer->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('materialsupplyer.edit', $supplyer->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('materialsupplyer.destroy', $supplyer->id)}}" method="post">
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