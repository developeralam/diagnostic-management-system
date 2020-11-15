@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Material Supplyer Create</span>
			<span class="h4 float-right"><a class="btn btn-info btn-sm" href="{{route('inventorymaterial.index')}}">Material List</a></span>
		</div><!-- .card-header end -->
		@include('partials.message')
		<div class="card-body">
			<div class="ward-form w-75 m-auto">
				<form action="{{route('inventorymaterial.store')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="material_id">Material Name</label>
						<select name="material_id" id="material_id" class="form-control">
							<option value="">Select One..</option>
							@foreach(App\Models\MaterialName::getAllMaterialName() as $materialname)
								<option value="{{$materialname->id}}">{{$materialname->material_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="company_id">Material Supplyer Company Name</label>
						<select name="supplyer_id" id="company_id" class="form-control">
							@foreach(App\Models\MaterialSupplyer::getAllSupplyer() as $supplyer)
								<option value="{{$supplyer->id}}">{{$supplyer->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="exist_quantity">Exist Quantity</label>
						<input name="exist_quantity" id="exist_quantity" class="form-control">
					</div>
					<div class="form-group">
						<label for="quantity">Material Quantity</label>
						<input type="number" id="quantity" name="quantity" class="form-control" placeholder="Enter Material Quantity">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<input type="submit" class="btn btn-success" value="Add Supplyer">
				</form>
			</div><!-- .cabin-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .servicecatgeories end -->
@section('ajax')
	<script>
		$("#material_id").change(function(){
			var material = $("#material_id").val();
			$("#exist_quantity").val("");
			var value="";
			$.get("http://localhost/dgms/exist-quantity/"+material, function(data){
				$("#exist_quantity").val(data);
			});



		});
	</script>
@endsection(ajax)
@endsection('content')