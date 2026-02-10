<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Project;
use App\Models\LeaveRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'employees' => Employee::count(),
            'departments' => Department::count(),
            'projects' => Project::count(),
            'pendingLeaves' => LeaveRequest::where('final_status', 'pending')->count(),
        ];

        return view('admin.dashboard', compact('data'));
    }
}
