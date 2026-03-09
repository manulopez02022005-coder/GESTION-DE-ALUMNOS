<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos',
            'curso' => 'required|in:1ºESO,2ºESO,3ºESO,4ºESO',
            'edad' => 'required|integer|min:1|max:100',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
            'curso' => 'required|in:1ºESO,2ºESO,3ºESO,4ºESO',
            'edad' => 'required|integer|min:1|max:100',
        ]);

        $alumno->update($request->all());

        return redirect()->route('alumnos.show', $alumno->id)->with('success', 'Alumno actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }
}
