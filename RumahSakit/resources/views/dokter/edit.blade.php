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
            <h3 class="card-title">Edit Dokter</h3>
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
            <form method="POST" action="{{ route('dokter.update', $dokter->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="dokter">Nama Dokter</label>
                    <input type="text" class="form-control" id="dokter" placeholder="Masukkan Nama dokter"
                        name="tNamaDokter" value="{{ $dokter->nama_dokter }}">
                </div>

                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" class="form-control" id="spesialis" placeholder="Masukkan Spesialis"
                        name="tSpesialis" value="{{ $dokter->spesialis_dokter }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="tEmail"
                        value="{{ $dokter->email_dokter }}">
                </div>

                <div class="form-group">
                    <label for="notelp">No Telp</label>
                    <input type="text" class="form-control" id="notelp" placeholder="Masukkan No Telepon"
                        name="tNoTelp" value="{{ $dokter->noTelp_dokter }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="tAlamat" id="alamat" cols="10" rows="5" class="form-control"
                        value="{{ $dokter->alamat_dokter }}"></textarea>
                </div>

                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
@endsection
