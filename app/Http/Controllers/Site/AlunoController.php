<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
 
    public function index()
    {
        return view('site.alunos.create');
    }

    public function create()
    {
        
        return view('site.alunos.create');
    }

  
    public function store(Request $request)
    {
        $data = $request->all();
        $senseis = Alunos::create($data);
        return redirect()->route('home');
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
