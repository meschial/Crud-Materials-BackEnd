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
        $material = $this->materials->getId($id);
        return $material;
    }
    
    public function store(Request $request)
    {
        $material = $this->materials->store($request);
        return $material;
    }

    public function update($id, Request $request)
    {
        $material = $this->materials->edit($id, $request);
        return $material;
    }

    public function destroy($id)
    {
        $material = $this->materials->destroyMaterial($id);
        return $material;
    }
}
