<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // GET /api/employees (Untuk Master Employee di Next.js)
    public function index()
    {
        return response()->json(Employee::latest()->get());
    }

    // POST /api/employees
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:employees,email',
            'position' => 'required|string|max:100',
            'role'     => 'in:hr,employee',
        ]);

        $employee = Employee::create($validated);
        return response()->json($employee, 201);
    }
}
