<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white py-3">
                        <h5 class="mb-0 text-center">Tambah Karyawan Baru</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('karyawan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Masukkan nama...">
                                @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Alamat Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="contoh@email.com">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}" placeholder="Misal: Staff IT">
                                @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                                <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">Batal & Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>