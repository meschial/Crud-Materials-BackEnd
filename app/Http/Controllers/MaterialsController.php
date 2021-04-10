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
        return $this->materials->getId($id);
    }
    
    public function store(Request $request)
    {
        return $this->materials->store($request);
    }

    public function update($id, Request $request)
    {
        return $this->materials->edit($id, $request);
    }

    public function destroy($id)
    {
        return $this->materials->destroyMaterial($id);
    }
}
