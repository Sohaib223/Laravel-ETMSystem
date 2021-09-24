<?php

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
Auth::routes();

Route::resource('/','AdminController');
Route::get('get_client_info','AdminController@clientInfo');
Route::get('get_client_info1','AdminController@clientInfo1');
Route::get('get_emp_info','AdminController@empinfo');


Route::middleware(['auth','historyRedirect'])->group(function(){

Route::get('/dashboard','AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/EmployeeDetails','EmployeeController@Index')->name('updateEmployee');
Route::get('/EmployeeCreate','EmployeeController@EmployeeCreate');
Route::post('/AddEmployee','EmployeeController@AddEmployee');
Route::get('/EditEmployee/{id}','EmployeeController@edit');
Route::post('/UpdateEmployee/{id}', 'EmployeeController@Update');
Route::get('/DeleteEmployee/{id}', 'EmployeeController@destroy');
Route::get('/EmployeeAttendance', 'EmployeeAttendance@index');
Route::post('/uploadFile', 'EmployeeAttendance@store');
Route::get('/EmployeeLeaves', 'EmployeeLeaveController@index');


Route::get('/DutiesDetails','DutiesController@index')->name('UpdateDuties');
Route::get('/DutiesCreate','DutiesController@DutiesCreate');
Route::post('/AssignDuties', 'DutiesController@store');
Route::get('/DutiesEdit/{id}','DutiesController@edit');
Route::post('/UpdateDuties/{id}','DutiesController@update');
Route::get('/DeleteDuties/{id}', 'DutiesController@destroy');

Route::get('/NotificationCreate','NotificationController@createview');
Route::get('/NotificationDetails','NotificationController@index');
Route::post('/create','NotificationController@create');

Route::get('/ClientDetials','ClientController@index')->name('UpdateClient');
Route::get('/CreateClient','ClientController@ClientCreate');
Route::get('/create', 'ClientController@create');
Route::get('/ClientEdit/{id}','ClientController@edit');
Route::post('/UpdateClient/{id}','ClientController@update');
Route::get('/DeleteClient/{id}', 'ClientController@destroy');
// Route::get('/AssignClientDuties', 'ClientController@AssignEmployee');
// Route::post('/AssignCDuties', 'ClientController@store');

Route::get('/Reporting','ReportController@EmployeeReport');

Route::get('/Inquiries','InquiriesController@index');
Route::get('/CreateInquiries','InquiriesController@create');
Route::get('/CreateInquirie' , 'InquiriesController@store');
Route::get('/sendmail/{id}' , 'InquiriesController@show');

Route::get('/UserDetails','UserController@index');
Route::get('/CreateUser','UserController@store');
Route::post('/AddUsers','UserController@Create');

Route::get('/GetNotificationDeatils/{id}', 'OtherController@edit');
Route::get('/GetNotificationDeatils', 'OtherController@index');

Route::get('/Expences','ExpencesController@detail');
Route::get('/addexpences','ExpencesController@index');
Route::post('/CreateExpences', 'ExpencesController@store');
Route::get('/Editedexpences/{id}','ExpencesController@show');
Route::post('/UpdateExpences/{id}','ExpencesController@update');


Route::get('/payroll','MakePayrollController@index');
Route::get('/MakePayroll/{id}','MakePayrollController@show');
Route::post('/addpayroll', 'MakePayrollController@store');

// Employee Dashbaord
Route::get('/Duties-Details','FinishDutiesController@index');
Route::get('/Update-Dueties-Status/{id}','FinishDutiesController@show');
Route::post('/UpdateDutiesStatus/{id}','FinishDutiesController@update');


Route::get('/Employee-Leave','EmployeeLeaveController@getmyview');
Route::get('/Create-Leave','EmployeeLeaveController@createleave');
Route::post('/CreateLeave','EmployeeLeaveController@create');

Route::get('/Employee-Notification','EmployeeNotificationController@index');
Route::get('/Employee-Create-Notification','EmployeeNotificationController@getcreateview');
Route::post('/CreateNotify','EmployeeNotificationController@create');

Route::get('/EmployeeReporting','EmployeeReportingController@index');
});

