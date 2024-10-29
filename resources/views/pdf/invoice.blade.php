<div>
    <h1>factura</h1>
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
                    <td>{{$item['nameProduct']}}</td>
                    <td>{{$item['cantidad']}}</td>
                    <td>{{$item['price']}}</td>
                  

                </tr>
            @endforeach
        </tbody>
        <hr>
        <p>Total: </p>
    </table>

</div>
