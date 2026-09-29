<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning text-dark py-3">
                        <h5 class="mb-0 text-center">Edit Data Karyawan</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}">
                                @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Alamat Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $karyawan->email }}">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="{{ $karyawan->jabatan }}">
                                @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning fw-bold">Update Data</button>
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