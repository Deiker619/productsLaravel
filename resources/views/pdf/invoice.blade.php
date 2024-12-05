<div>
    <h1>Factura</h1>
    <div style="text-align: center">

      <p>Nombre empresa: </p>
      <p>Nombre empresa: </p>
      <p>Nombre empresa: </p>
      <p>Nombre empresa: </p>
    </div>
    <table>
        <thead>
            <tr>

                <th style="text-align: left">Name</th>
                <th>Cantidad</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
                <tr>
                    <td >{{$item['nameProduct']}}</td>
                    <td style="text-align: center"> {{$item['cantidad']}}</td>
                    <td>{{$item['price']}}</td>
                    

                </tr>
            @endforeach
        </tbody>
    </table>
    <hr style="width: 100%">
    <p>Total: </p>

</div>
