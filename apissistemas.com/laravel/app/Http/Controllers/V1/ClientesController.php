<?php
 
namespace App\Http\Controllers\V1;
 
use App\Models\Cliente;
use App\Http\Controllers\Controller;
 
class ClientesController extends Controller
{
    public function getClientes()
    {
        $response_local=new \stdClass();

        $response_local->success=true;
        $response_local->data=cliente::all();

        return response()->json($response_local,200);
    }
}