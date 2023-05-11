@extends('landingpage.index')
@section('content')
    {{--  <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                </div>
                <div class="tab-content pt-2 ml-3">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">Donasi Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama</div>
                            <div class="col-lg-9 col-md-8">{{ $row->donatur->nama }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Keterangan</div>
                            <div class="col-lg-9 col-md-8">{{ $row->keterangan }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Metode Pembayaran</div>
                            <div class="col-lg-9 col-md-8">{{ $row->metode_pembayaran->nama }}</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Jumlah</div>
                            <div class="col-lg-9 col-md-8">{{ $row->jml_donasi }}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <a class="bn btn-info btn-sm" href="#">Back</a>
            </div>
        </div>
    </section>  --}}


    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12" >
                </div>
                <div class="col-lg-8 col-12" >
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
                        <p class="text-center">Silakan unduh bukti donasi Anda di bawah ini!</p>
                        <p><a class="btn btn-success btn-sm mt-2 text-center mx-auto" title="Unduh bukti donasi" 
                        href="{{route('donetPDFlink', $row->id)}}"><i class="bi bi-arrow-down-circle-fill"></i>  Unduh</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12" >
                </div>
            </div>
        </div>
    </section>

@endsection
