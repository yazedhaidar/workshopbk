<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Image</th>
    </tr>
    @foreach($data as $key => $dt)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$dt->name}}</td>
        <td>{{$dt->image}}</td>
    </tr>
    @endforeach
</table>