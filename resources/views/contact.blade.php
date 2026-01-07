@extends('layouts.main')

@section('isi-konten')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    <div class="container d-flex justify-content-center py-5">
        <div class="contact-card">
            <div class="text-center mb-4">
                <h3 class="section-title">Hubungi Kami</h3>
                <p class="text-muted small">Silakan isi formulir di bawah ini dengan baik dan benar.</p>
            </div>

            <form id="contactForm" action="https://formspree.io/f/xoqookjy" method="POST">
                
                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" id="formnama" placeholder="Nama Lengkap" required>
                    <label for="floatingName" class="text-muted">Nama Lengkap</label>
                </div>

                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="tel" name="telepon" class="form-control" id="formnomor" placeholder="0812..." required>
                            <label for="floatingPhone" class="text-muted">No. Telepon/WhatsApp</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="formemail" placeholder="nama@email.com" required>
                            <label for="floatingEmail" class="text-muted">Alamat Email</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" name="keperluan" id="formselect" aria-label="Pilih Keperluan" required>
                        <option selected disabled value="">Pilih salah satu...</option>
                        <option value="Reservasi">Reservasi</option>
                        <option value="Daftar Partner">Daftar Partner</option>
                        <option value="Pertanyaan">Pertanyaan Umum</option>
                        <option value="Kritik dan Saran">Kritik dan Saran</option>
                        <option value="Keluhan">Keluhan</option>
                    </select>
                    <label for="floatingSelect" class="text-muted">Keperluan</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea class="form-control" name="pesan" placeholder="Tulis pesan disini" id="formpesan" style="height: 150px" required></textarea>
                    <label for="floatingMessage" class="text-muted">Masukan Pesan Anda</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                </div>
            </form>
            <br>
                <!-- <div class="alert alert-danger" role="alert">
                    Pastikan mengisi data kontak dengan benar, karena kami akan membalas pesan Anda melalui kontak tersebut.
                </div> -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/contact.js') }}"></script>

@endsection