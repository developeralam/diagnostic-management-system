@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Service Categories</span>
			<span class="float-right"><a href="{{route('servicecatgeories.create')}}" class="btn btn-success btn-sm">Add Categories</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="servicecatgeories-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="20%">SI</th>
							<th width="40%">Service Categories Name</th>
							<th width="20%">Status</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Models\ServiceCatgegories::getAllServiceCategory() as $cat)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$cat->category_name}}</td>
							<td>{{$cat->status == 1? 'Active' : 'InActive'}}</td>
							<td>
								<a href="{{route('servicecatgeories.edit', $cat->id)}}"><i class="ion-edit"></i></a>
								<form class="d-inline" action="{{route('servicecatgeories.destroy', $cat->id)}}" method="post">
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