<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class AdminAuditController extends Controller
{
    public function index(Request $request)
    {
        $query = AuditLog::with('user')->latest();

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }
        if ($request->filled('event')) {
            $query->where('event', $request->event);
        }
        if ($request->filled('model')) {
            $query->where('auditable_type', 'App\\Models\\' . $request->model);
        }

        $logs = $query->paginate(30);
        $users = \App\Models\User::all();
        $models = AuditLog::distinct()->pluck('auditable_type')->map(fn($t) => class_basename($t))->sort()->values();

        return view('admin.audit.index', compact('logs', 'users', 'models'));
    }
}
