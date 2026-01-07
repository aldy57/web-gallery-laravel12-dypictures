<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css" rel="stylesheet">

    <title>Dashboard - Dy Pictures</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>



    <main class="main-content">
        <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
            @if(session('success'))
                <div class="toast show" role="alert" id="successToast">
                    <div class="toast-header bg-success text-white">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong class="me-auto">Berhasil!</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if(session('error'))
                <div class="toast show" role="alert" id="errorToast">
                    <div class="toast-header bg-danger text-white">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <strong class="me-auto">Error!</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
        </div>

        <div class="top-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold m-0">Dy Pictures Dashboard</h4>

                <div class="user-profile" onclick="toggleUserDropdown()">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    
                    <div class="user-dropdown" id="userDropdown">
                        <div class="user-dropdown-header">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(session('user_name') ?? 'Admin') }}&background=000&color=fff" 
                                 alt="{{ session('user_name') ?? 'Admin' }}">
                            <div class="user-dropdown-name">{{ session('user_name') ?? 'Admin' }}</div>
                        </div>

                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                            <a href="#" class="user-dropdown-item logout" onclick="event.preventDefault(); confirmLogout();">
                                Keluar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-light p-3 rounded-circle"><i class="fas fa-user fa-lg text-dark"></i></div>
                    <div>
                        <h6 class="text-muted mb-0 small">Selamat Datang,</h6>
                        <h4 class="fw-bold m-0">{{ session('user_name') ?? 'Admin' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-light p-3 rounded-circle"><i class="fas fa-image fa-lg text-primary"></i></div>
                    <div>
                        <h6 class="text-muted mb-0 small">Total Foto</h6>
                        <h4 class="fw-bold m-0">{{ $totalFotos ?? 0 }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0">Daftar Foto</h5>
                <button class="btn btn-dark btn-sm px-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="fas fa-plus me-2"></i>Tambah Foto
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Preview</th>
                            <th>Judul & Lokasi</th>
                            <th>Ditambahkan</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($fotos as $foto)
                            <tr>
                                <td>
                                    <img src="{{ asset($foto->gambar) }}" class="table-image" alt="{{ $foto->nama_foto }}"
                                        onerror="this.src='https://via.placeholder.com/50'">
                                </td>
                                <td>
                                    <div class="fw-bold">{{ $foto->nama_foto }}</div>
                                    <div class="text-muted small"><i
                                            class="fas fa-map-marker-alt me-1"></i>{{ $foto->lokasi }}</div>
                                </td>
                                <td class="text-muted small">{{ $foto->created_at->format('d M Y') }}</td>
                                <td class="text-end">
                                    <button class="btn btn-light btn-action text-primary me-1"
                                        onclick="editPhoto({{ $foto->id_foto }}, '{{ $foto->nama_foto }}', '{{ $foto->lokasi }}')"><i
                                            class="fas fa-pen"></i></button>
                                    <form action="{{ route('foto.delete', $foto->id_foto) }}" method="POST"
                                        style="display:inline;" id="deleteForm{{ $foto->id_foto }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-light btn-action text-danger"
                                            onclick="deletePhoto({{ $foto->id_foto }})"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    <i class="fas fa-image fa-3x mb-3 d-block"></i>
                                    Belum ada foto yang diupload
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="modal fade" id="uploadModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Upload Foto Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small text-muted">Nama Foto <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="nama_foto" class="form-control"
                                placeholder="Misal: Pemandangan Kota" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Lokasi Pengambilan <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="lokasi" class="form-control"
                                placeholder="Contoh: Bandung, Indonesia" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">File Foto <span
                                    class="text-danger">*</span></label>
                            <input type="file" name="gambar" class="form-control" accept="image/*" required>
                            <small class="text-muted">Format: JPG, PNG, GIF</small>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Edit Data Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="editId" name="id_foto">
                        <div class="mb-3">
                            <label class="form-label small text-muted">Nama Foto <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="nama_foto" class="form-control" id="editTitle" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Lokasi Pengambilan <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="lokasi" class="form-control" id="editLocation" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Ganti Gambar (Opsional)</label>
                            <input type="file" name="gambar" class="form-control" accept="image/*">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar. Format: JPG, PNG,
                                GIF</small>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>