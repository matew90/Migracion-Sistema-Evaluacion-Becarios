<?php

namespace App\Http\Controllers\scholarshipEvaluation\administrator;

use App\Http\Controllers\Controller;
use App\Models\convocations;
use Illuminate\Http\Request;

class BecariosController extends Controller
{
    
    public function index()
    {
        //
        return view('scholarshipEvaluation.scholarship.show');
    }

    
    public function create()
    {
        //
        return view('scholarshipEvaluation.scholarship.create');
    }

    
    public function store(Request $request)
    {
        //
        
    }

    
    public function show()
    {
        //
        return view('scholarshipEvaluation.scholarship.import');
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
        return view('scholarshipEvaluation.scholarship.import');
    }
}
