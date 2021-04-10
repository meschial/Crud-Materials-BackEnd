<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Response;

class Materials extends Model 
{

    public function getId($id)
    {  
         $material = Materials::find($id);
        if($material){
          return response()->json( $material, Response::HTTP_ACCEPTED);
        }
        return response()->json(Response::HTTP_OK);
    }

    public function store($request)
    {
        if(Materials::create($request->all())){
          return response()->json(Response::HTTP_CREATED);
        }
        return response()->json(Response::HTTP_OK);
    }

    public function edit($id, $request)
    {
        $material = Materials::find($id);
        if($material->update($request->all())){
          return response()->json(Response::HTTP_ACCEPTED);
        }
        return response()->json(Response::HTTP_OK);
    }

    public function destroyMaterial($id)
    {
        $materials = Materials::find($id);
        if($materials->delete()){
          return response()->json(Response::HTTP_ACCEPTED);
        }
        return response()->json(Response::HTTP_OK);
    }


    protected $fillable = [
        'name', 'description', 'brand', 'quantity'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
    ];

    protected $table = "materiais";
    public $timestamps = false; 
}
