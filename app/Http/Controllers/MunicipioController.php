<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::with('departamento')->get();
        return view('municipios.index', compact('municipios'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('municipios.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_municipio' => 'required',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Municipio::create($request->all());

        return redirect()->route('municipios.index')->with('success', 'Municipio creado exitosamente.');
    }

    public function edit(Municipio $municipio)
    {
        $departamentos = Departamento::all();
        return view('municipios.edit', compact('municipio', 'departamentos'));
    }

    public function update(Request $request, Municipio $municipio)
    {
        $request->validate([
            'nombre_municipio' => 'required',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $municipio->update($request->all());

        return redirect()->route('municipios.index')->with('success', 'Municipio actualizado exitosamente.');
    }

    public function destroy(Municipio $municipio)
    {
        $municipio->delete();

        return redirect()->route('municipios.index')->with('success', 'Municipio eliminado exitosamente.');
    }
}
