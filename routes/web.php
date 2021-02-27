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
use App\Http\Controllers\Admin\staffController;
use App\Http\Controllers\Admin\customerController;
use App\Http\Controllers\Admin\vendorController;
use App\Http\Controllers\Admin\studentController;
use App\Http\Controllers\Admin\teacherController;
use App\Http\Controllers\Admin\roleController;
use App\Http\Controllers\Admin\awardController;
use App\Http\Controllers\Admin\designationController;
use App\Http\Controllers\Admin\titleController;
use App\Http\Controllers\Admin\levelController;
use App\Http\Controllers\Admin\servicesController;
use App\Http\Controllers\Admin\incomeController;
use App\Http\Controllers\Admin\incomecategoryController;
use App\Http\Controllers\Admin\expenseController;
use App\Http\Controllers\Admin\expensecategoryController;
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
//staff
Route::resource('staff', staffController::class);
//customer
Route::resource('customer', customerController::class);
//vendor
Route::resource('vendor', vendorController::class);
//student
Route::resource('student', studentController::class);
//teacher
Route::resource('teacher', teacherController::class);
//role
Route::resource('role', roleController::class);
//award
Route::resource('award', awardController::class);
//designation
Route::resource('designation', designationController::class);
//title
Route::resource('title', titleController::class);
//level
Route::resource('level', levelController::class);
//services
Route::resource('services', servicesController::class);
//income
Route::resource('income', incomeController::class);
//incomecategory
Route::resource('incomecategory', incomecategoryController::class);
//expense
Route::resource('expense', expenseController::class);
//expensecategory
Route::resource('expensecategory', expensecategoryController::class);
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