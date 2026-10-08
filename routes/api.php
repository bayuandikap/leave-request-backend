<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\LeaveRequestController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);

Route::get('/leaves', [LeaveRequestController::class, 'index']);
Route::post('/leaves', [LeaveRequestController::class, 'store']);
Route::patch('/leaves/{id}/status', [LeaveRequestController::class, 'updateStatus']);
