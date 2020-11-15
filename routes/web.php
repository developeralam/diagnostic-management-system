<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\CreditVoucherController;
use App\Http\Controllers\DebitVoucherController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\DoesController;
use App\Http\Controllers\DrugAdviceController;
use App\Http\Controllers\DrugDurationController;
use App\Http\Controllers\FoodAdviceController;
use App\Http\Controllers\FundTransferController;
use App\Http\Controllers\InventoryMaterialController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\MaterialNameController;
use App\Http\Controllers\MaterialSupplyerController;
use App\Http\Controllers\OutdoorShiftController;
use App\Http\Controllers\PatinetAdmissionController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RefferedDoctorController;
use App\Http\Controllers\ServiceCatgegoriesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\WardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Dashboard Route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resources([
	'account' => DashboardController::class,
	'agent' => AgentController::class,
	'appointment' => AppointmentController::class,
	'cabin' => CabinController::class,
	'chartofaccount' => ChartOfAccountController::class,
	'creditvoucher' => CreditVoucherController::class,
	'debitvoucher' => DebitVoucherController::class,
	'doctorappointment' => DoctorAppointmentController::class,
	'dose' => DoesController::class,
	'drugadvice' => DrugAdviceController::class,
	'drugduration' => DrugDurationController::class,
	'foodadvice' => FoodAdviceController::class,
	'fundtransfer' => FundTransferController::class,
	'inventorymaterial' => InventoryMaterialController::class,
	'investigation' => InvestigationController::class,
	'materialname' => MaterialNameController::class,
	'materialsupplyer' => MaterialSupplyerController::class,
	'outdoorshift' => OutdoorShiftController::class,
	'patinetadmission' => PatinetAdmissionController::class,
	'paymentmethod' => PatinetAdmissionController::class,
	'prescription' => PrescriptionController::class,
	'reffereddoctor' => RefferedDoctorController::class,
	'servicecatgeories' => ServiceCatgegoriesController::class,
	'hospitalservice' => ServiceController::class,
	'unit' => UnitController::class,
	'ward' => WardController::class,
]);


//Get Existing Quantity
Route::get('/exist-quantity/{id}', [InventoryMaterialController::class, 'existQuantity']);

