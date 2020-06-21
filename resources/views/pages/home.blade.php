@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
    
    
    <hr>
    <br>
    <div class="content mb-5">
        <div class="container mt-5">
            @foreach ($eksklusif as $item)
            <div class="row justify-content-center">
                <div class="best animate__animated animate__infinite animate__slower animate__zoomInDown text-center">
                    <h1>{{ $item->title }}</h1>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Storage::url($item->gambar1) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->gambar2) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->gambar3) }}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-md-12 mb-5 justify-content-center">
                    @foreach ($warnadompet as $item)
                        
                    
                    <i style="color: black" class="fa fa-square"></i><span> Warna Hitam</span>&emsp;&emsp;<i style="color: rgb(109, 52, 52)" class="fa fa-square"></i> <span>Warna Coklat</span>
                    <div class="row row-cols-1 mt-3 row-cols-md-3 justify-content-center">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ Storage::url($item->gambar1) }}" class="img-fluid" width="500px" alt="Dompet">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="{{ Storage::url($item->gambar2) }}" class="img-fluid" width="500px" alt="Dompet">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div> -->
                            </div>
                        </div>
                        {{-- <div class="col mb-4">
                            <div class="card h-100">
                                <img src="dompet_project/img/dompet/dompet15.jpeg" class="img-fluid" width="500px" alt="Dompet">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div> -->
                            </div>
                        </div> --}}

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center d-flex">
                    @foreach ($keunggulan as $item)
                    <div
                        class="best animate__animated animate__infinite animate__slower animate__fadeInUp pt-4 text-center">
                        <h1>{{ $item->title }}</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color: #4080ff; margin-bottom: 20px;">Ekslusif !!! Dompet Import Era Milenial Untuk Pria dan
                        Wanita</h2>
                    <strong>
                        <h3>Bahan Terbuat Dari PU Leather <span style="color:#39b54a;">100%
                                Asli, Dijamin
                                Original &
                                Berkualitas.</span></h3>
                        <h3>Tampilan <span style="color: #39b54a;">Elegan dan Awet,</span> Karena
                            Material
                            Yang Digunakan
                            Adalah Material Yang Terbaik.</h3>
                    </strong>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="gambar mb-2">
                        <img src="{{ Storage::url($item->gambar1) }}" class="img-fluid" width="500px" alt="Dompet">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="gambar mb-3">
                        <img src="{{ Storage::url($item->gambar2) }}" class="img-fluid" width="500px" alt="Dompet">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Sangat Cocok Untuk Anda Yang Ingin <span style="color: #39b54a;">Simple dan
                            Nyaman</span></h2>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="best animate__animated animate__infinite animate__slower animate__rubberBand text-center">
                    <h1>DESKRIPSI PRODUCT</h1>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="gambar mb-3">
                        <img src="dompet_project/img/dompet/dompet10.png" class="img-fluid" width="500px"
                            style="border-bottom: 2px solid black;" alt="Dompet">
                    </div>
                    <span class="uw">Warna:</span><br><br>
                    <span class="text-muted">Coklat</span><br>
                    <span class="text-muted">Hitam</span><br><br>
                    <span class="uw">Ukuran:</span><br>
                    <span class="text-muted">11 cm x 3 cm x 20 cm</span><br><br>
                    <span class="uw">Bahan</span><br>
                    <span class="text-muted">Kulit PU High Quality</span><br><br>
                    <span class="uw">Bisa Muat Banyak:</span><br>
                    <span class="text-muted">11 Slot Tempat Kartu</span><br>
                    <span class="text-muted">1 Slot Tempat Foto</span><br>
                    <span class="text-muted">2 Slot Simcard</span><br>
                    <span class="text-muted">2 Slot Tempat Uang Kertas</span><br>
                    <span class="text-muted">1 Resleting Tempat Koin</span><br>
                    <span class="text-muted">2 Slot Tempat Handphone (Maks 5.5")</span><br>
                </div>
                @foreach ($emboss as $item)
                <div
                    class="embos animate__animated animate__infinite animate__slower animate__rubberBand mt-2 text-center">
                    <h1>{{ $item->title }}</h1>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="gambar mb-3">
                        <img src="{{ Storage::url($item->gambar) }}" class="img-fluid" width="500px" alt="Dompet">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($promo as $item)
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p style="font-size: 25px; font-weight: bold;">Khusus 20 Pembeli Pertama Hari Ini,<br>
                    Kami Ada <span style="color: red;">Tambahan Promo Gratis {{ $item->nama_promo }}</span></p>
                    <p style="color: red;">GRATIS HANYA UNTUK ANDA !!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ Storage::url($item->gambar) }}" class="img-fluid" width="500px" alt="">
                </div>
            </div>
        </div>
        @endforeach
        <div class="harga-dompet">
            <div class="container mt-5 text-center">
                <div class="row justify-content-center">
                    <div
                        class="embos animate__animated animate__infinite animate__slower animate__rubberBand text-center mb-4">
                        <h1>Harga</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="harga">
                            @foreach ($harga as $item)
                            <h3>HARGA NORMAL</h3><br>
                            <p style="text-decoration: line-through; color: red; font-weight: bold;">Rp. {{ $item->harga_normal }},</p>
                            <br>
                            <p>HARGA DISCOUNT</p>
                            <p>Beli 1 Pcs Rp. {{ $item->harga_diskon }},-/pcs</p>
                            <span class="text-muted"><i>*Pengiriman 3 - 8 hari kerja (Dari Tangerang)*</i></span>
                            <p><span style="color: red;">Jangan Tertipu</span> Dengan Barang Murah<br>Toko Kami
                                Memberikan<span style="color: red;"> GARANSI 100%</span> Jika Product Tidak Sesuai
                                Gambar.</p>
                            <img src="dompet_project/img/dompet/dompet12.jpg" class="img-fluid" width="500px" alt="Dompet">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="best animate__animated animate__infinite animate__slower animate__zoomIn text-center">
                    <h3>Bayar Ke Kurir Saat Barang Datang. Transaksi Aman Tanpa Resiko.</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="dompet_project/img/dompet/dompet13.jpg" class="img-fluid" width="500px" alt="">
                </div>
            </div>
        </div>
        @foreach ($promo as $item)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 style="font-weight: bold;">Perhatian !!</h1>
                    <p style="font-size: xx-large;">Stock hari ini tersisa hanya</p>
                    <span style="color: red; font-weight: bold; font-size: 25px;"><i>{{ $item->stock_promo }} Pcs</i></span>
                    <div class="progress mt-2">
                        <div class="progress-bar animate__animated animate__infinite animate__slower animate__slideInLeft"
                            role="progressbar" style="width: {{ $item->stock_promo }}%" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center d-flex">
                    <div
                        class="best animate__animated animate__infinite animate__slower animate__rubberBand pt-4 text-center">
                        <h3>Promo Super Murah Ini akan Berakhir Dalam:</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 justify-content-center">
                <div class="col-md-6 justify-content-center">
                    <div class="example" style="text-align: center;" data-date="{{ $item->waktu_promo }}"></div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center d-flex">
                    <div class="aman mb-5 text-center">
                        <h3>Segera Amankan Promo</h3>
                        <p>Klink Link Dibawah Ini</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="promo animate__animated animate__infinite animate__slower animate__shakeY">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="customer mt-3 text-center">
                    <a href="" style="text-decoration: none;"><h3>PESAN SEKARANG</h3></a>
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <h3 style="font-weight: bold; text-align: center;">TESTIMONI YANG<br> SUDAH BELI</h3>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            @foreach ($testimoni as $item)                  
                            <div class="carousel-item active">
                                <img src="{{ Storage::url($item->testimoni) }}" height="500px" width="200px" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <span style="font-weight: bold; font-size: 20px;">Dukungan Bank Pembayaran
                        <br>& Jasa Pengiriman :</span>
                    <img src="dompet_project/img/bank/bank2.jpeg" class="img-fluid mt-2" height="200px" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="dompet_project/img/best.jfif"
                        class="animate__animated animate__infinite animate__slower animate__jackInTheBox" alt="best">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center">
                    <div class="cod text-center">
                        <h4 class="animate__animated animate__infinite animate__slower animate__zoomIn">BISA COD (BAYAR
                            DI TEMPAT)</h4>
                    </div>
                    @foreach ($harga as $item)         
                    <div class="diskon text-center mt-1">
                        <h2 style="color: white;">DISKON {{ $item->diskon }}%...!!!</h2>
                        <p>HARGA NORMAL <span style="text-decoration: line-through; color: red;">Rp. {{ $item->harga_normal }}</span> /
                            Pcs</p>
                        <span style="font-weight: bold; color: #ffff00;">Harga Spesial Setelah DISKON Hanya...</span>
                        <br>
                        <span style="color: white; font-weight: bold; font-size: 35px;">Rp. {{ $item->harga_diskon}} / Pcs</span>
                    </div>
                    <img src="dompet_project/img/bank/layanan.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <span style="font-size: 25px; text-align: center;">Pilih Satu Cara Terbaik di Bawah Untuk Pembelian Anda... </span><img src="dompet_project/img/bank/smille.svg" width="20px" alt="">
                    <div class="view animate__animated animate__infinite animate__slower animate__bounce text-center">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>

                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="pesan fixed-bottom">
    <div class="button-trf">
        <div class="sticky">
            <button class="btn-trf">
                <a href="#" style="font-size: 12px; font-weight: bold;"><i class="fa fa-whatsapp" style="font-size: 12px; color: white;"> BAYAR DITEMPAT (COD)</i><br>
                <del>+ POTONGAN ONGKIR Rp. {{ $item->potongan_ongkir }}</del></a>
            </button>
        </div>
    </div>
    <div class="button-cod">
        <div class="sticky text-right">
            <button class="btn-cod">
                <a href="#" style="font-size: 12px; font-weight: bold;"><i class="fa fa-whatsapp" style="font-size: 12px; color: white;"> TRANSFER BANK</i><br>
                + POTONGAN ONGKIR Rp. {{ $item->potongan_ongkir }}</a>
            </button>
        </div>
    </div>
</div>
@endforeach


@endsection
