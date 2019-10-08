<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Service</th>
        <th>Deskripsi</th>
        <th>Tarif</th>
        <th>Perkiraan Waktu Kedatangan</th>
    </tr>
    @foreach($cost as $var)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ucfirst($code)}}</td>
        <td>{{$name}}</td>
        <td>{{$var["service"]}}</td>
        <td>{{$var["description"]}}</td>
        <td>Rp.{{ number_format($var["cost"][0]["value"],0,',','.') }}</td>
        <td>{{$var["cost"][0]["etd"]}}</td>
    </tr>
    @endforeach
</table>