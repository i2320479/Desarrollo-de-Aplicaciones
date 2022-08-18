<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

 
class ProductosController extends Controller
{
    public function getAll()
    {
        $response = new \stdClass();

        $productos = Producto::all();

        $response->success=true;
        $response->data=$productos;

        return response()->json($response,200);
    }

     public function getItem($id_producto)
    {
        $response = new \stdClass();

        $producto = producto::find($id_producto);

        $response->data = $producto;
        $response->success=true;

        return response()->json($response,200);
    }

    public function store(Request $request)
    {
        $response = new \stdClass();

        $producto = new Producto();
        $producto->codigo=$request->codigo;
        $producto->nombre=$request->nombre;
        $producto->save();


        $response->data = $producto;
        $response->success=true;
        return response()->json($response,200);

    }

    public function update(Request $request,$id_producto)
    {
        $response = new \stdClass();

        $producto = producto::find($id_producto);
        $producto->codigo=$request->codigo;
        $producto->nombre=$request->nombre;
        $producto->save();

        $response->data = $producto;
        $response->success=true;
        return response()->json($response,200);
    }

    public function patchUpdate(Request $request,$id_producto)
    {
        $response = new \stdClass();

        $producto = producto::find($id_producto);

        if($producto->codigo!=null)
        {
            $producto->codigo=$request->codigo;
        }

        if($producto->nombre!=null)
        {
            $producto->nombre=$request->nombre;
        }

        $categoria->save();
        
        $response->data = $producto;
        $response->success=true;
        return response()->json($response,200);
    }

    public function delete($id_producto)
    {
        $response = new \stdClass();

        $producto = producto::find($id_producto);
        $producto->delete();

        $response->success=true;
        return response()->json($response,200);
    }
}