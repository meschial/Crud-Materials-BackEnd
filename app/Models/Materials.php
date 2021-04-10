<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model 
{

    public function getId($id)
    {  
         $material = Materials::find($id);
        if($material){
          return $material;
        }
        return response()->json(['data' => ['message' => 'Material não encontrado!']]);
    }

    public function store($request)
    {
        if(Materials::create($request->all())){
          return response()->json(['data' => ['message' => 'Material foi criado com sucesso!']]);
        }
        return response()->json(['data' => ['message' => 'Não foi possível criar o material!']]);
    }

    public function edit($id, $request)
    {
        $material = Materials::find($id);
        if($material->update($request->all())){
          return response()->json(['data' => ['message' => 'Material foi atualizado com sucesso!']]);
        }
        return response()->json(['data' => ['message' => 'Não foi possível editar o material!']]);
    }

    public function destroyMaterial($id)
    {
        $materials = Materials::find($id);
        if($materials->delete()){
          return response()->json(['data' => ['message' => 'Material foi deletado com sucesso!']]);
        }
        return response()->json(['data' => ['message' => 'Não foi possível deletar o material!']]);
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
