@extends('landingpage.index')
@section('content')
<section class="section-padding section-bg" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12" >
            </div>
            <div class="col-lg-4 col-12" >
                <div class="custom-text-box text-center">
                    <h4 class="mb-2"></h4>

                    <h5 class="mb-3">Terima kasih atas Donasi yang disumbangkan</h5>

                    <p class="mb-0">Tanda Bukti Donasi dapat diunduh sini</p>
                    <p><a class="btn btn-success btn-sm mt-2" title="Unduh bukti donasi" href="{{route('donet.show', $donasi->id)}}">Detail Donasi</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12" >
            </div>
        </div>
    </div>
</section>
@endsection