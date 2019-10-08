<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    <title>Cek Ongkir</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Cek Ongkos Kirim</strong> <a href="{{ url('/resi') }}" class="btn btn-primary">Lacak Paket</a></div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="province">Provinsi Asal</label>
                                        <select class="form-control" name="province" id="province">
                                            <option value="" selected disabled>Pilih Provinsi</option>
                                            @foreach ($province as $item)
                                            <option value="{{$item['province_id']}}">
                                                {{$item["province"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="city">Kota Asal</label>
                                        <select class="form-control" name="city" id="city">
                                            <option value="" selected disabled>Pilih Kota</option>
                                            @foreach ($city as $item)
                                            <option value="{{$item['city_id']}}">
                                                {{$item["city_name"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="subdistrict">Kecamatan Asal</label>
                                        <select class="form-control" name="subdistrict" id="subdistrict">
                                            <option value="" selected disabled>Pilih Kecamatan</option>
                                            @foreach ($subdistrictJson as $item)
                                            <option value="{{$item['subdistrict_id']}}">
                                                {{$item["subdistrict_name"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="provinceDest">Provinsi Tujuan</label>
                                        <select class="form-control" name="provinceDest" id="provinceDest">
                                            <option value="" selected disabled>Pilih Provinsi</option>
                                            @foreach ($provinceDest as $item)
                                            <option value="{{$item['province_id']}}">
                                                {{$item["province"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="cityDest">Kota Tujuan</label>
                                        <select class="form-control" name="cityDest" id="cityDest">
                                            <option value="" selected disabled>Pilih Kota</option>
                                            @foreach ($cityDest as $item)
                                            <option value="{{$item['city_id']}}">
                                                {{$item["city_name"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="subdistrictDest">Kecamatan Tujuan</label>
                                        <select class="form-control" name="subdistrictDest" id="subdistrictDest">
                                            <option value="" selected disabled>Pilih Kecamatan</option>
                                            @foreach ($subdistrictDestJson as $item)
                                            <option value="{{$item['subdistrict_id']}}">
                                                {{$item["subdistrict_name"]}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="weight">Berat (gram)</label>
                                        <input class="form-control" name="weight" id="weight" type="number"
                                            placeholder="Berat (gram)" autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="curier">Kurir</label>
                                        <select class="form-control" id="curier" name="curier">
                                            <option value="" selected disabled>Pilih Kurir</option>
                                            <option value="pos">POS INDONESIA</option>
                                            <option value="tiki">TIKI</option>
                                            <option value="jne">JNE</option>
                                            <option value="jnt">J&T</option>
                                            <option value="pcp">PCP</option>
                                            <option value="esl">ESL</option>
                                            <option value="pandu">Pandu</option>
                                            <option value="pahala">Pahala</option>
                                            <option value="cahaya">Cahaya</option>
                                            <option value="sap">Sap</option>
                                            <option value="jet">Jet</option>
                                            <option value="indah">Indah</option>
                                            <option value="dse">DSE</option>
                                            <option value="slis">Slis</option>
                                            <option value="first">First</option>
                                            <option value="ncs">NCS</option>
                                            <option value="star">Star</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary" id="tombolCost">Cek Ongkos</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Hasil</strong></div>
                            <div class="card-body">
                                <div id="cost"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src={{asset('js/rajaongkir.js')}}></script>

</body>

</html>
