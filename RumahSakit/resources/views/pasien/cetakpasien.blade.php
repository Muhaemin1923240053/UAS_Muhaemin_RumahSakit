<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK DATA PASIEN</title>
    <style>
        p {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="form-group">
        <center>
            <p><b>Laporan Data Pasien</b></p>
        </center>

        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pasien as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>{{ $item->nama_pasien }}</td>
                        <td>{{ $item->jk_pasien }}</td>
                        <td>{{ $item->email_pasien }}</td>
                        <td>{{ $item->noTelp_pasien }}</td>
                        <td>{{ $item->alamat_pasien }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</body>
<script>
    window.print();
</script>

</html>
