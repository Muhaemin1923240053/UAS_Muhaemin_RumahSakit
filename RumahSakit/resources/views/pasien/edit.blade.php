@extends('home')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Pasien</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="pasien">Nama Pasien</label>
                    <input type="text" class="form-control" id="pasien" placeholder="Masukkan Nama Pasien"
                        name="tNamaPasien" value="{{ $pasien->nama_pasien }}">
                </div>

                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jeniskelamin" placeholder="Masukkan Jenis Kelamin"
                        name="tJenisKelamin" value="{{ $pasien->jk_pasien }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="tEmail"
                        value="{{ $pasien->email_pasien }}">
                </div>

                <div class="form-group">
                    <label for="notelp">No Telp</label>
                    <input type="text" class="form-control" id="notelp" placeholder="Masukkan No Telepon"
                        name="tNoTelp" value="{{ $pasien->noTelp_pasien }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="tAlamat" id="alamat" cols="10" rows="5" class="form-control"
                        value="{{ $pasien->alamat_pasien }}"></textarea>
                </div>

                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
@endsection
