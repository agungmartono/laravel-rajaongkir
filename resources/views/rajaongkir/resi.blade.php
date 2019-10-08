<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    <title>Lacak Paket</title>

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
                            <div class="card-header"><strong>Lacak Paket</strong> <a href="{{ url('/') }}"
                                    class="btn btn-primary">Cek Ongkos Kirim</a></div>
                            <div class="card-body form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="waybill" class="sr-only">Nomor Resi</label>
                                    <input type="text" class="form-control" id="waybill" name="waybill"
                                        placeholder="Masukan Serial Resi" autocomplete="off">
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="courier" class="sr-only">Kurir</label>
                                    <select class="form-control" id="courier" name="courier">
                                        <option value="" selected disabled>Pilih Kurir</option>
                                        <option value="jne">JNE</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mb-2" id="tombolResi">Cek Resi</button>
                            </div>
                            <div class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <p>Info: Saat ini kami baru menyediakan lacak paket untuk JNE, kurir yang lain menyusul.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Hasil</strong></div>
                            <div class="card-body">
                                <div id="resi"></div>
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
