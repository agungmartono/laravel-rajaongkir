<h1>Hasil pelacakan paket {{ $response["rajaongkir"]["query"]["waybill"] }},
    {{ strtoupper($response["rajaongkir"]["query"]["courier"]) }}</h1>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Nomor Resi</th>
            <td>{{ $response["rajaongkir"]["result"]["summary"]["waybill_number"] }}</td>
        </tr>
        <tr>
            <th>Jenis Layanan</th>
            <td>{{ $response["rajaongkir"]["result"]["summary"]["service_code"] }}</td>
        </tr>
        <tr>
            <th>Tanggal Pengiriman</th>
            <td>{{ $response["rajaongkir"]["result"]["summary"]["waybill_date"] }}</td>
        </tr>
        <tr>
            <th>Berat Kiriman</th>
            <td>{{ $response["rajaongkir"]["result"]["details"]["weight"] }} Kg</td>
        </tr>
        <tr>
            <th>Nama Pengirim</th>
            <td>{{ $response["rajaongkir"]["result"]["details"]["shippper_name"] }}</td>
        </tr>
        <tr>
            <th>Kota Asal Pengirim</th>
            <td>{{ $response["rajaongkir"]["result"]["details"]["shipper_address1"] }}</td>
        </tr>
        <tr>
            <th>Nama Penerima</th>
            <td>{{ $response["rajaongkir"]["result"]["details"]["receiver_name"] }}</td>
        </tr>
        <tr>
            <th>Alamat Penerima</th>
            <td>{{ $response["rajaongkir"]["result"]["details"]["receiver_address1"] }},
                {{ $response["rajaongkir"]["result"]["details"]["receiver_address2"] }},
                {{ $response["rajaongkir"]["result"]["details"]["receiver_address3"] }},
                {{ $response["rajaongkir"]["result"]["details"]["receiver_city"] }}
            </td>
        </tr>
    </tbody>
</table>

<h1>Status pengiriman</h1>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Status</th>
            <td>{{ $response["rajaongkir"]["result"]["delivery_status"]["status"] }}</td>
        </tr>
        <tr>
            <th>Nama Penerima</th>
            <td>{{ $response["rajaongkir"]["result"]["delivery_status"]["pod_receiver"] }}</td>
        </tr>
        <tr>
            <th>Tanggal Diterima</th>
            <td>{{ $response["rajaongkir"]["result"]["delivery_status"]["pod_date"] }},
                {{ $response["rajaongkir"]["result"]["delivery_status"]["pod_time"] }}
            </td>
        </tr>
    </tbody>
</table>

<h1>Riwayat pengiriman</h1>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Kota</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($willbillJson as $item)
        <tr>
            <td>{{ $item["manifest_date"] }}</td>
            <td>{{ $item["city_name"] }}</td>
            <td>{{ $item["manifest_description"] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
