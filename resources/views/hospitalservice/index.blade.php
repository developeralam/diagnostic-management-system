@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Hostpital Services</span>
			<span class="float-right"><a href="{{route('hospitalservice.create')}}" class="btn btn-success btn-sm">Add Services</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="hospitalservice-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="5%">SI</th>
							<th width="20%">Service Name</th>
							<th width="15%">Service Code</th>
							<th width="15%">Service Price</th>
							<th width="20%">Service Category</th>
							<th width="15%">Status</th>
							<th width="10%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\Service::getAllService() as $service)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$service->service_name}}</td>
							<td>{{$service->service_code}}</td>
							<td>{{$service->service_price}}</td>
							<td>{{$service->category->category_name}}</td>
							<td>{{$service->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('hospitalservice.edit', $service->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('hospitalservice.destroy', $service->id)}}" method="post">
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