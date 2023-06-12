<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan</title>
</head>
<body>
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Laporan Peminjaman Inventaris</div>
            <div class="panel-body">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <label for="">Tanggal Awal</label><br>
                        <input type="date" name="tglDari" id="tgl_awal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Sampai</label><br>
                        <input type="date" name="tglSampai" id="tgl_sampai" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="" id="" class="btn btn-sm btn-primary" value="Filter">
                        <button class="btn btn-sm btn-success">Cetak Laporan</button>
                    </div>
                </form>
                <br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Inventaris</th>
                            <th>Jumlah</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Suleman</td>
                            <td>Laptop</td>
                            <td>102</td>
                            <td>12-12-2023</td>
                            <td>13-12-2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>