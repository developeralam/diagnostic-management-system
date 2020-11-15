@extends('layouts.app')
@section('content')
<div class="appointment pt-3">
	<div class="card">
		<div class="card-header bg-light">
			<span class="h4 float-left">Appointment Booking</span>
			<span class="float-right"><a href="{{route('appointment.index')}}" class="btn btn-success">All Appointment</a></span>
		</div><!-- .card-header end -->
		<div class="card-body">
			<div class="appointment-form">
				<form action="" method="post">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Patient Type :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="radio" id="self" value="self" name="type"> Self 
										<input type="radio" id="card" value="card" name="type"> Card 
										<input type="radio" id="corporate" value="corporate" name="type"> Corporate
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group reference d-none">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Reference By :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Reference By">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group card-number d-none">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Card Number :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Card Number">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group corporate d-none">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Corporate Clients :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="" id="" class="form-control">
											<option value="">Select One</option>
											<option value="">Select One</option>
											<option value="">Select One</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_name" class="font-weight-bold font-italic">Patient Name :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Patient Name" id="patient_name">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_id" class="font-weight-bold font-italic">Patient Id :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control" placeholder="Patient Id" id="patient_id">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="age" class="font-weight-bold font-italic">Age :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control" placeholder="Age" id="age">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Sex :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="radio" id="self" name="type"> Male 
										<input type="radio" id="card" name="type"> Female 
										<input type="radio" id="corporate" name="type"> Other's
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Mobile Number :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control" placeholder="Mobile Number" id="self" name="type">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Complaints :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
						</div><!-- .col-6 end -->

						<div class="col-6">
							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Date :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="date" id="self" class="form-control" name="type">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Doctor :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="" id="" class="form-control">
											<option value="">Select One..</option>
											<option value="">Select One..</option>
											<option value="">Select One..</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Time Schedule :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="" id="" class="form-control">
											<option value="">Select One..</option>
											<option value="">Select One..</option>
											<option value="">Select One..</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Serial Number :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" placeholder="Serial Number" class="form-control">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Doctor Fee :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<select name="" id="" class="form-control">
											<option value="">Select One</option>
											<option value="">Select One</option>
											<option value="">Select One</option>
										</select>
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Discount :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Payable Amount :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->

							<div class="form-group">
								<div class="row">
									<div class="col-4">
										<label for="patient_type" class="font-weight-bold font-italic">Paid :</label>
									</div><!-- .col-4 end -->
									<div class="col-8">
										<input type="number" class="form-control">
									</div><!-- .col-8 end -->
								</div><!-- .row end -->
							</div><!-- .form-group end -->
							<input type="submit" class="btn btn-success form-control">
						</div><!-- .col-6 end -->
					</div><!-- .row end -->
				</form>
			</div><!-- .appointment-form end -->
		</div><!-- .card-body end -->
	</div><!-- .card end -->
</div><!-- .appointment end -->
@endsection('content')