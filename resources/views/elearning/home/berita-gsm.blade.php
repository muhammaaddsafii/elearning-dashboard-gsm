@extends('elearning.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper elearningBg">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <div>
                                <img src="{{ asset('assets/elearning/assets/images/logo_berita.png') }}"
                                    style="width:100%; height:auto; position:relative" alt="">
                            </div>
                            <div class="text-center mt-5 mb-5">
                                <h3>Silahkan Cek Berita Terbaru dari GSM Berikut :</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9" id="gambar">
                                <iframe src="https://sekolahmenyenangkan.or.id/category/inspirasi-gsm/" name="iframe"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
