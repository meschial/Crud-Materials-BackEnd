<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    private $materials;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Materials $materials)
    {
        $this->materials = $materials;
    }

    public function index()
    {
        return $this->materials->get();
    }

    public function show($id)
    {
        return $this->materials->find($id);
    }
    
    public function store(Request $request)
    {
        $this->materials->create($request->all());
        return response()->json(['data' => ['message' => 'Material foi criado com sucesso!']]);
    }

    public function update($id, Request $request)
    {
        $materials = $this->materials->find($id);
        $materials->update($request->all());
        return response()->json(['data' => ['message' => 'Material foi atualizado com sucesso!']]);
    }

    public function destroy($id)
    {
        $materials = $this->materials->find($id);
        $materials->delete();
        return response()->json(['data' => ['message' => 'Material foi deletado com sucesso!']]);
    }
}
