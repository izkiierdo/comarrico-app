<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class PedidoController extends Controller
{

    public function index()
    {
        return view('pedido.index', ['lista' => pedido::all()]);
    }

    public function show($nombre)
    {
        return view('pedido.show', ['pedido' => $nombre]);
    }

    public function create()
    {
        return view('pedido.create');
    }

   public function store(Request $request)
   {

        $validacion = $request->validate([
            'id' => 'required |unique:pedidos',
            'nombres' => 'required',
            'direccion' => 'required'
        ]

        );

        $pedido = new pedido();
        $pedido->id = $request->input('id');
        $pedido->nombres = $request->input('nombres');
        $pedido->telefono = $request->input('telefono');
        $pedido->direccion = $request->input('direccion');
        $pedido->detalles = $request->input('detalles');
        $pedido->activo = 1;
        $pedido->save();
        return redirect("pedidos");
    }

   public function edit($id)
   {
    $pedido = pedido::find($id);

    return view('pedido.edit', ['id' => $id, 'pedido' => $pedido]);
   }

   public function update(Request $request, $id)
   {
    $pedido = pedido::find($id);
    $pedido->nombres = $request->input('nombres');
    $pedido->telefono = $request->input('telefono');
    $pedido->direccion = $request->input('direccion');
    $pedido->detalles = $request->input('detalles');
    $pedido->activo = 1;
    $pedido->save();
    return redirect("pedidos");
    
   }

   public function destroy($id)
   {

    $pedido = pedido::find($id);
    $pedido->delete();
    return redirect("pedidos");
   }
}
