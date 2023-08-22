<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    

</head>
<di class="text-secondary">
        <h1 class="p-3 bg-light border"> Lista de pedido </h1> 
    </div>
 <div class="  bg-white p-3 rounded-3">
    
      <table class="table table-bordered">
         <thead  >
            <tr>
                 <th class="bg-danger border-danger text-light">N° Compra</th>
                  <th class="bg-danger border-danger text-light">Nombres</th>
                  <th class="bg-danger border-danger text-light">Telefono</th>
                  <th class="bg-danger border-danger text-light">Direccion</th>
                  <th class="bg-danger border-danger text-light">Detalles</th>
                 <th class="bg-danger border-danger text-light"></th>
                 <th class="bg-danger border-danger"></th>
            </tr>
         </thead>
    

        <tbody>
             @foreach($lista AS $item)
                 <tr class="border-success">
                      <td class="border-success">{{ $item->id }}</td>
                      <td class="border-success">{{ $item->nombres }}</td>
                      <td class="border-success">{{ $item->telefono }}</td>
                      <td class="border-success">{{ $item->direccion }}</td>
                      <td class="border-success">{{ $item->detalles }}</td>
                      <td class="border-success"><a href="{{ url('pedidos/'.$item->id.'/edit' ) }}" class="btn btn-success" >EDITAR</a></td>
                      <td> 
                        <form action="{{ url('pedidos/'.$item->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">ELIMINAR</button>
                        </form>
                      </td>
                 </tr>
             @endforeach

       </div> 
     </tbody>
  </table>

   <!--<form action="" method="post">
        @method("DELETE")
        @csrf

        <button type="submit" class="btn btn-primary">ELIMINAR</button>
    </form>-->
    <div class="pt-3 mt-4 text-muted border-top">
         <a href="http://localhost/comarrico-app/public/pedidos/create" class="btn btn-primary">NUEVO PEDIDO</a>
         <a href="http://localhost/comarrico-app/public" class="btn btn-success">INICIO</a>
    </div>
</body>
</html>