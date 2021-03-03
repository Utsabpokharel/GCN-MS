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
use App\Http\Controllers\Admin\smsController;
use App\Http\Controllers\Admin\visitedController;
use App\Http\Controllers\Admin\examController;
use App\Http\Controllers\Admin\sectionController;
use App\Http\Controllers\Admin\batchController;
use App\Http\Controllers\Admin\disciplinaryController;
use App\Http\Controllers\Admin\employeeterminationController;
use App\Http\Controllers\Admin\documentmanagementController;
use App\Http\Controllers\Admin\rcourseController;
use App\Http\Controllers\Admin\customfieldController;
use App\Http\Controllers\Admin\educationController;
use App\Http\Controllers\Admin\languageController;
use App\Http\Controllers\Admin\skillController;
use App\Http\Controllers\Admin\licenseController;
use App\Http\Controllers\Admin\reportingController;
use App\Http\Controllers\Admin\employeecontractController;
use App\Http\Controllers\Admin\employeeotherinfoController;
use App\Http\Controllers\Admin\employeequalificationController;
use App\Http\Controllers\Admin\employeeresignationController;
use App\Http\Controllers\Admin\employmentstatusController;
use App\Http\Controllers\Admin\employmentstatusverificationController;
use App\Http\Controllers\Admin\salaryController;
use App\Http\Controllers\Admin\paycalendarController;
use App\Http\Controllers\Admin\advancedController;
use App\Http\Controllers\Admin\benefitdeductionController;
use App\Http\Controllers\Admin\invoiceController;







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
//document management
Route::resource('documentmanagement', documentmanagementController::class);
// recruitment course
Route::resource('rcourse', rcourseController::class);
// custom field
Route::resource('customfield', customfieldController::class);
// education
Route::resource('education', educationController::class);
// language
Route::resource('language', languageController::class);
// skill
Route::resource('skill', skillController::class);
// license
Route::resource('license', licenseController::class);
// disciplinary
Route::resource('disciplinary', disciplinaryController::class);
// reporting
Route::resource('reporting', reportingController::class);
// employee contract
Route::resource('employeecontract', employeecontractController::class);
// employee other info
Route::resource('employeeotherinfo', employeeotherinfoController::class);
// employee qualification
Route::resource('employeequalification', employeequalificationController::class);
// employee resignation
Route::resource('employeeresignation', employeeresignationController::class);
// employment status
Route::resource('employmentstatus', employmentStatusController::class);
// employment status verification
Route::resource('employmentstatusverification', employmentstatusverificationController::class);
// employee termination
Route::resource('employeetermination', employeeterminationController::class);
// salary
Route::resource('salary', salaryController::class);
// pay calendar
Route::resource('paycalendar', paycalendarController::class);
// advanced
Route::resource('advanced', advancedController::class);
// benefit/deduction
Route::resource('benefitdeduction', benefitdeductionController::class);
// invoice
Route::resource('invoice', invoiceController::class);