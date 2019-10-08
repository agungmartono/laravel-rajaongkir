<center><h5 class="card-title">Hasil pelacakan paket {{ $willbillJsonDecode["rajaongkir"]["query"]["waybill"] }}, {{ strtoupper($willbillJsonDecode["rajaongkir"]["query"]["courier"]) }}</h5></center>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Nomor Resi</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["summary"]["waybill_number"] }}</td>
        </tr>
        <tr>
            <th>Jenis Layanan</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["summary"]["service_code"] }}</td>
        </tr>
        <tr>
            <th>Tanggal Pengiriman</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["summary"]["waybill_date"] }}</td>
        </tr>
        <tr>
            <th>Berat Kiriman</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["weight"] }} Kg</td>
        </tr>
        <tr>
            <th>Nama Pengirim</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["shippper_name"] }}</td>
        </tr>
        <tr>
            <th>Kota Asal Pengirim</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["shipper_address1"] }}</td>
        </tr>
        <tr>
            <th>Nama Penerima</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["receiver_name"] }}</td>
        </tr>
        <tr>
            <th>Alamat Penerima</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["receiver_address1"] }},
                {{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["receiver_address2"] }},
                {{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["receiver_address3"] }},
                {{ $willbillJsonDecode["rajaongkir"]["result"]["details"]["receiver_city"] }}
            </td>
        </tr>
    </tbody>
</table>

<br>
<center><h5 class="card-title">Status Pengiriman</h5></center>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Status</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["delivery_status"]["status"] }}</td>
        </tr>
        <tr>
            <th>Nama Penerima</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["delivery_status"]["pod_receiver"] }}</td>
        </tr>
        <tr>
            <th>Tanggal Diterima</th>
            <td>{{ $willbillJsonDecode["rajaongkir"]["result"]["delivery_status"]["pod_date"] }},
                {{ $willbillJsonDecode["rajaongkir"]["result"]["delivery_status"]["pod_time"] }}
            </td>
        </tr>
    </tbody>
</table>

<br>
<center><h5 class="card-title">Riwayat Pengiriman</h5></center>
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