<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Departamento;
use App\Models\Ciudad;
use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Exports\RegisterExport;
use Maatwebsite\Excel\Facades\Excel;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();

        return view('register', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, 
            [ 
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'cedula' => 'required|numeric|unique:App\Models\Persona',
                'celular' => 'required|numeric|unique:App\Models\Persona',
                'correo' => 'required|email|unique:App\Models\Persona',
                'departamento_id' => 'required|integer',
                'ciudad_id' => 'required|integer'
            ]);

        $persona = Persona::create($request->all());
        
        if (Persona::all()->count() >= 5 ) {
            $ganador = Persona::inRandomOrder()->first();
            return redirect()->route('readRegister')->with('winner',  compact('ganador'));
        }else{
            return redirect()->route('readRegister')->with('success',  'Registro completado exitosamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }

    public function getCities(Request $request){     
        if ($request->ajax()) {
            $ciudades = Ciudad::where('departamento_id', '=', $request->departamento)->get();

            foreach ($ciudades as $keyCity => $city) {
                $arrayCities[$city->id] = $city->nombre;
            }

            return response()->json($arrayCities);
        }
    }
    
    public function exportExcel(){
        return Excel::download(new RegisterExport, 'registros.xlsx');
    }
}
