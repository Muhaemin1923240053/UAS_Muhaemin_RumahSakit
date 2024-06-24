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
            <h3 class="card-title">Edit Poliklinik</h3>
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
            <form method="POST" action="{{ route('poliklinik.update', $poliklinik->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="namapoli">Nama Poliklinik</label>
                    <input type="text" class="form-control" id="namapoli" placeholder="Masukkan Nama Poliklinik"
                        name="tNamaPoli" value="{{ $poliklinik->nama_poliklinik }}">
                </div>

                <div class="form-group">
                    <label for="gedung">Gedung</label>
                    <input type="text" class="form-control" id="gedung" placeholder="Masukkan Gedung" name="tGedung"
                        value="{{ $poliklinik->gedung }}">
                </div>

                <button type="submit" class="btn btn-warning">Ubah</button>
            </form>
        </div>
    </div>
@endsection
