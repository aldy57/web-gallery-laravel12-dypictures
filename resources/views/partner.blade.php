@extends('layouts.main')

@section('isi-konten')

    <header class="py-5 text-center container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="fw-bold display-4">Partner Kami</h1>
                <p class="text-muted lead fs-6">Dy Pictures sudah memiliki partner kerja diantaranya :</p>
            </div>
        </div>
    </header>

    
    <div class="d-flex gap-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/cament.jpg" height="1080" widht="1080" class="img-fluid rounded-start" alt="partner logo">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Cament Photography</h5>
                    <p class="text-muted lead fs-6">Cament Photography yang dimilik oleh Imam Nurrahman telah resmi bergabung menjadi partner Dy Pictures.</p>
                    <p class="card-text"><small class="text-muted">Bergabung sejak 2022</small></p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/nadin.JPG" class="img-fluid rounded-start" alt="partner logo">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Nandini Ananda Syifa</h5>
                    <p class="text-muted lead fs-6">Nandini Ananda Syifa telah resmi bergabung menjadi partner Dy Pictures untuk menambah wawasan fotografi.</p>
                    <p class="card-text"><small class="text-muted">Bergabung sejak 2024</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

<div class="py-5 text-center container"></div>

    <div class="container py-5 my-4 bg-light text-dark text-center">
	<div class="row pt-4 mb-2">
	</div>
	<div class="row justify-content-center mb-4">

		<div class="lc-block col-xl-8">
			<h1 editable="inline" class="display-2 fw-bold">Ingin menjadi <span class="text-primary">partner</span> kami? Daftar sekarang!</h1>
		</div>

	</div>
	<div class="row justify-content-center mb-4">

		<div class="lc-block col-xl-6 lh-lg">
			<div editable="rich">
				<p class="">&nbsp;Pendaftaran terbuka untuk siapapun, baik untuk individu maupun kelompok/komunitas/organisasi. Yuk daftar sekarang dan dapatkan semua benefitnya! Syarat & Ketentuan berlaku.
				</p>
			</div>
		</div><!-- /lc-block -->

	</div>
	<div class="row pb-4">
		<div class="col-md-12 d-">
			<div class="lc-block d-grid gap-3 d-md-block">
				<a class="btn btn-lg btn-primary me-md-2" href="/kontak" role="button">Daftar Sekarang</a>
			</div>
		</div><!-- /col -->
	</div>
</div>
    
@endsection