@extends('layouts.main')

@section('isi-konten') 
    
<div class="container-fluid pt-5">
	<div class="row mb-4 mb-lg-5 justify-content-lg-between">
		<div class="col-3 col-md-1 col-lg-2 d-none d-md-flex align-items-center">
			<div class="lc-block bg-dark ratio ratio-1x1 opacity-25" style=""> </div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-4 col-md-3 col-lg-2 d-flex flex-column justify-content-between">
			<div class="lc-block bg-primary ratio ratio-1x1 opacity-25" style=""> </div><!-- /lc-block -->
			<div class="lc-block">
				<img class="img-fluid" src="/img/p5.jpg" alt="Dy Pictures">
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-4 col-md-4 col-lg-3"> <img class="img-fluid" src="img/p4.jpg" style="object-fit:cover" alt="Dy Pictures"></div><!-- /col -->
		<div class="col-4 col-md-3 col-lg-2 d-flex flex-column justify-content-between">
			<div class="lc-block">
				<img class="img-fluid" src="img/p6.jpg" alt="Dy Pictures">
			</div><!-- /lc-block -->
			<div class="lc-block bg-primary ratio ratio-1x1 opacity-25" style=""> </div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-3 col-md-1 col-lg-2 d-none d-md-flex  align-items-center">
			<div class="lc-block bg-dark ratio ratio-1x1 opacity-25" style=""> </div><!-- /lc-block -->
		</div><!-- /col -->
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="lc-block text-center col-md-8">
			<div editable="rich">
				<h1 class="fw-bold display-5">Capture The Moment.</h1>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="lc-block text-center col-xxl-6 col-md-8">
			<div editable="rich">
				<p class="lead">Abadikan momenmu bersama Dy Pictures.</p>
			</div>
		</div><!-- /lc-block -->
	</div>
</div>

<div class="py-5 text-center container"></div>

<div class="container py-4 py-lg-6">
	<div class="row align-items-center">
		<div class="col-lg-6 mb-5 mb-lg-0">
			<div class="lc-block px-4">
				<!--  If you want to remove px-4 please add overflow-hidden class to the section -->
				<div class="position-relative">
					<div class="lc-block position-absolute top-0 end-0 w-100 h-100 bg-dark mt-4 me-4"> </div>

					<img class="position-relative img-fluid" src="img/bunga-persegi.png" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080" alt="Photo by Spacejoy" loading="lazy">
				</div>
			</div>
		</div>
		<div class="col-lg-6 ">
			<div class="lc-block mb-4">
				<div editable="rich">

					<h2 class="fw-bold display-5">Mengapa harus pilih Dy Pictures?</h2>
				</div>
			</div>
			<div class="lc-block mb-5">
				<div editable="rich">
					<!-- <p class="lead text-muted">Dy Pictures memiliki kelebihan diantaranya :</p> -->
				</div>
			</div>

			<div class="lc-block d-sm-flex align-items-center mb-4 overflow-hidden position-relative">
				<div class="d-inline-flex">
					<div>
						<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
					</div>

					<div class="ms-3 align-self-center" editable="rich">
						<p>4th+ pengalaman dibidang Fotografi</p>
					</div>
				</div>
			</div>
			<div class="lc-block d-sm-flex align-items-center mb-4">
				<div class="d-inline-flex">
					<div>
						<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
					</div>

					<div class="ms-3 align-self-center" editable="rich">
						<p>Kualitas foto terbaik</p>
					</div>
				</div>
			</div>
			<div class="lc-block d-sm-flex align-items-center mb-4">
				<div class="d-inline-flex">
					<div>
						<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
					</div>

					<div class="ms-3 align-self-center" editable="rich">
						<p>Menggunakan peralatan fotografi terbaik</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="py-5 text-center container"></div>
    
 
  
    <div class="container py-4 py-md-6">
	<div class="row mb-6">
		<div class="lc-block">
			<div editable="rich">
				<h3 class="fw-bold display-5">Dipercaya oleh 10+ klien
				</h3>
			</div>
		</div>
		<div class="lc-block">
			<div editable="rich">
				<p class="lead">Dy Pictures memberikan jasa fotografi terbaik bagi pelanggan.</p>
			</div>
		</div>
	</div>
	<div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 g-4 g-xl-5 justify-content-center">
		<div class="col">
			<div class="card shadow h-100 align-items-center">
				<div class="card-body align-items-center justify-content-center d-flex py-6">
					<img class="col-10" src="img/xtik-logo.png" alt="">
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow h-100 align-items-center">
				<div class="card-body align-items-center justify-content-center d-flex py-6">
					<img class="col-10" src="img/jurnalistiksmekda-logo.png" alt="">
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow h-100 align-items-center">
				<div class="card-body align-items-center justify-content-center d-flex py-6">
					<img class="col-10" src="img/smekda-logo.png" alt="">
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow h-100 align-items-center">
				<div class="card-body align-items-center justify-content-center d-flex py-6">
					<img class="col-10" src="img/naquinity-logo.png" alt="">
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow h-100 align-items-center">
				<div class="card-body align-items-center justify-content-center d-flex py-6">
					<img class="col-10" src="img/hima-psti.png" alt="">
				</div>
			</div>
		</div>
	</div>

</div>

<div class="py-5 text-center container"></div>
  
    <div class="container py-5">
	<div class="row mb-4">
		<div class="col-md-12 text-center">
			<div class="lc-block mb-4">
					<h2 editable="inline" class="fw-bold display-5">Testimoni</h2>  
				<p editable="inline">Berikut ini adalah testimoni dari beberapa pelanggan kami</p>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/aldilah.JPG" alt="Aldilah Rihadatul'ais" class="rounded-2 shadow" srcset="img/aldilah.JPG" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">Aldilah Rihadatul'ais</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Hasil fotonya bagus-bagus, keren. Terbaik Dy Pictures!
							</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/eko.jpg" alt="Eko Muhammad Rizki" class="rounded-2 shadow" srcset="img/eko.jpg" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">Eko Muhammad Rizki&nbsp;<p></p>
								<p></p>
							</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Harga merakyat kualitas professional. The best.
							</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/fahribm.jpg" alt="Fahri Bintang Maulana" class="rounded-2 shadow" srcset="img/fahribm.jpg" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">Fahri Bintang Maulana&nbsp;<p></p>
								<p></p>
							</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Ini dia jasa fotografi terbaik dan berkualitas.</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/putri.JPG" alt="Putri Apriyanti" class="rounded-2 shadow" srcset="img/putri.JPG" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">Putri Apriyanti&nbsp;<p></p>
								<p></p>
							</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Satu-satunya jasa fotografi terbaik di Purwakarta.
							</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/nadin.JPG" alt="Nandini Ananda Syifa" class="rounded-2 shadow" srcset="img/nadin.JPG" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">
								Nandini Ananda Syifa
							</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Dengan pengalaman yang cukup, hasilnya jangan diragukan.
							</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border-0 shadow">
				<div class="card-body py-4">
					<div class="d-flex">
						<img style="width:48px;height:48px" src="img/rizkania.JPG" alt="Rizkania Hartika Putri" class="rounded-2 shadow" srcset="img/rizkania.JPG" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
						<div class="ps-2">
							<h4 editable="inline" class="rfs-7 ms-2">
								Rizkania Hartika Putri
							</h4>
						</div>
					</div>
					<div class="lc-block mt-4 text-muted">
						<div editable="rich">
							<p>Bagus banget kualitasnya. Gausah ragu buat pake jasa ini!</p>
						</div>
					</div>
					<div class="rating mt-3 text-success">
						<div class="lc-block"> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
							<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
							</svg>
						</div>
					</div>
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
			<h1 editable="inline" class="display-2 fw-bold">Masih <span class="text-primary">ragu?</span> Hubungi kami.</h1>
		</div>

	</div>
	<div class="row justify-content-center mb-4">

		<div class="lc-block col-xl-6 lh-lg">
			<div editable="rich">
				<p class="">&nbsp;Jangan ragu untuk menghubungi kami agar Anda dapat mendapatkan kualitas foto terbaik dari Dy Pictures.
				</p>
			</div>
		</div><!-- /lc-block -->

	</div>
	<div class="row pb-4">
		<div class="col-md-12 d-">
			<div class="lc-block d-grid gap-3 d-md-block">
				<a class="btn btn-lg btn-primary me-md-2" href="/kontak" role="button">Hubungi Kami</a>

				<a class="btn btn-lg btn-outline-secondary" href="/tentang" role="button">Tentang Kami</a>
			</div>
		</div><!-- /col -->
	</div>
</div>

@endsection