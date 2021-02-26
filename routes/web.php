<?php

use App\Http\Controllers\Admin\courseController;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\bankaccountController;
use App\Http\Controllers\Admin\departmentController;
use App\Http\Controllers\Admin\emailController;
use App\Http\Controllers\Admin\emailsettingsController;
use App\Http\Controllers\Admin\enquiryController;
use App\Http\Controllers\Admin\enquirycategoryController;
use App\Http\Controllers\Admin\enquiryresponseController;
use App\Http\Controllers\Admin\enquirysourceController;
use App\Http\Controllers\Admin\feeController;
use App\Http\Controllers\Admin\generalsettingsController;
use App\Http\Controllers\Admin\incomingController;
use App\Http\Controllers\Admin\outgoingController;
use App\Http\Controllers\Admin\passwordsettingsController;
use App\Http\Controllers\Admin\paymentsettingsController;
use App\Http\Controllers\Admin\recruitmentController;
use App\Http\Controllers\Admin\smsController;
use App\Http\Controllers\Admin\visitedController;
use App\Http\Controllers\Admin\examController;
use App\Http\Controllers\Admin\sectionController;
use App\Http\Controllers\Admin\batchController;



Route::get('/', function () {
    return view('Admin.layouts.master');
});
//user
Route::resource('user', userController::class);

//recruitment
Route::resource('recruitment', recruitmentController::class);
//department
Route::resource('department', departmentController::class);
//course
Route::resource('course', courseController::class);
//section
Route::resource('section', sectionController::class);
//batch
Route::resource('batch', batchController::class);
//exam
Route::resource('exam', examController::class);
//incoming
Route::resource('incoming', incomingController::class);
//outgoing
Route::resource('outgoing', outgoingController::class);
//visited
Route::resource('visited', visitedController::class);
//enquiry
Route::resource('enquiry', enquiryController::class);
//enquiry category
Route::resource('enquirycategory', enquirycategoryController::class);
//enquiry source
Route::resource('enquirysource', enquirysourceController::class);
//enquiry response
Route::resource('enquiryresponse', enquiryresponseController::class);
//sms
Route::resource('sms', smsController::class);
//email
Route::resource('email', emailController::class);
//fee
Route::resource('fee', feeController::class);
//bank account
Route::resource('bankaccount', bankaccountController::class);
//general settings
Route::resource('generalsettings', generalsettingsController::class);
//email
Route::resource('emailsettings', emailsettingsController::class);
//password
Route::resource('password', passwordsettingsController::class);
//payment
Route::resource('payment', paymentsettingsController::class);