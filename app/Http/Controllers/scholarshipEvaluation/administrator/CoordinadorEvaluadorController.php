<?php

namespace App\Http\Controllers\scholarshipEvaluation\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoordinadorEvaluadorController extends Controller
{
    
    public function index()
    {
        //
        return view('scholarshipEvaluation.coordinator.show');
    }

    
    public function create()
    {
        //
        return view('scholarshipEvaluation.coordinator.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show()
    {
        //
        
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
    }

    public function import(){
        return view('scholarshipEvaluation.coordinator.import');
    }
}
