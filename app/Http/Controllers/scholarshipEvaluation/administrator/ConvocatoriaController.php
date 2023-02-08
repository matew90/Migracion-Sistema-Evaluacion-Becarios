<?php

namespace App\Http\Controllers\scholarshipEvaluation\administrator;

use App\Http\Controllers\Controller;
use App\Models\convocations;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ConvocatoriaController extends Controller
{
    
    public function index()
    {
        //
        
        $convocatorias = convocations::all();
        return view('scholarshipEvaluation.convocations.show', ['convocatorias'=>$convocatorias]);
    }

    public function create()
    {
        //
        return view('scholarshipEvaluation.convocations.create');
    }

    
    public function store(Request $request)
    {
        convocations::create([
            'conv_uID' => Str::uuid(),
            'conv_name' => $request->nombre,
            'conv_period' => $request->periodo,
            'conv_email' => base64_encode($request->email),
            'conv_comments' => $request->comentarios,
            'conv_end_date' => $request->fecha_fin,
            'conv_start_date' => $request->fecha_inicio,
            'created_by' => Auth::user()->us_uID,
            'updated_by' => Auth::user()->us_uID,
          ]);

        return redirect()->route('convocatoria-becarios.convocatoria.create')->with('success','Convocatoria creada correctamente');
    }

    
    public function show()
    {
        //
        
        
        return view('scholarshipEvaluation.convocations.show');

    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
        $convocatoria = convocations::find($id);
        $convocatoria->delete();
        $convocatorias = convocations::all();
        return view('scholarshipEvaluation.convocations.show', ['convocatorias'=>$convocatorias])->with('success','Registro correctamente eliminado');
    }
}
