@extends('layouts.master')
@section('content')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div>
            <!-- OVERVIEW -->
            <div class="content-wrapper"
                style="height: 100vh; width: 100%; background-image: url('{{ asset('admin/assets/img/swalayan.jpg') }}'); background-size: cover; text-align: center;">
                <div class="panel-title">
                    <div class="" style="padding-top: 40px;">
                        <span style="color: black; font-size: 40px;">SWALAYAN</span>
                    </div>
                </div>
                <div class="panel-body" style="padding: 80px">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric"style="background-color: black">
                                <a href="/pegawai">
                                    <p style="color: black; text-align: center">Pegawai</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric"style="background-color: black">
                                <a href="/pembeli">
                                    <p style="color: black; text-align: center">Produk Makanan dan Minuman</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric"style="background-color: black">
                                <a href="/pembeli">
                                    <p style="color: black; text-align: center">Produk Rumah Tangga dan
                                        Kebersihanaaaa</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric"style="background-color: black">
                                <a href="/pembeli">
                                    <p style="color: black; text-align: center">Produk Untuk Bayi dan
                                        Anak-anak</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- END OVERVIEW -->
                </div>
                <!-- END MAIN CONTENT -->
            </div>
        @endsection
