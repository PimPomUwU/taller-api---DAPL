<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $centers = \App\Models\Center::with('employee_manager')->get();

        if ($request->wantsJson()) {
            return response()->json(['data' => $centers], 200);
        }

        return view('center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $employees_manager = \App\Models\Employee::doesntHave('center')->with('center')->get();

        return view('center.create', compact('employees_manager'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|min:0',
            'poblacion' => 'required|integer|min:0',
            'employee_manager_id' => 'nullable|exists:employees,id|unique:centers,employee_manager_id',
        ]);

        $center = Center::create($validated);

        if ($request->wantsJson()) {
            return response()->json(['data' => $center], 201);
        }

        return redirect()->route('centers.index')->with('success', 'Centro creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Center $center)
    {

        if ($request->wantsJson()) {
            return response()->json(['data' => $center], 200);
        }

        return view('center.show', compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Center $center)
    {
        $employees_manager = \App\Models\Employee::doesntHave('center')->with('center')->get();
        $center = Center::with('employee_manager')->find($center->id);


        if ($request->wantsJson()) {
            return response()->json(['message' => 'Use PUT/PATCH /items/{id} para editar'], 405);
        }

        return view('center.edit', compact('center', 'employees_manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {


        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|min:0',
            'poblacion' => 'required|integer|min:0',

            'employee_manager_id' => 'nullable|exists:employees,id|unique:centers,employee_manager_id',
        ]);

        $center->employee_manager_id = $request->employee_manager_id;


        $center->update($validated);

        if ($request->wantsJson()) {
            return response()->json(['data' => $center], 200);
        }

        return redirect()->route('centers.index')->with('success', 'Item actualizado');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Center $center)
    {
        $center->delete();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Item eliminado'], 200);
        }

        return redirect()->route('centers.index')->with('success', 'Item eliminado');
    }
}
