<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4 align="center">Bukti Donasi</h4>
    <div class="tab-content pt-2 ml-3 custom-text-box">
        <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title text-center mb-3">Donasi Details</h5>

            <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama</div>
                <div class="col-lg-9 col-md-8">: {{ $row->donatur->nama }}</div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 label ">Keterangan</div>
                <div class="col-lg-9 col-md-8">: {{ $row->keterangan }}</div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 label">Metode Pembayaran</div>
                <div class="col-lg-9 col-md-8">: {{ $row->metode_pembayaran->nama }}</div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-4 label">Jumlah</div>
                <div class="col-lg-9 col-md-8">: {{ $row->jml_donasi }}</div>
            </div>

        </div>
    </div>

</body>

</html>
