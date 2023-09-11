<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengembalian</title>
</head>
<body>
    <div class="col-lg-12">
        <!-- a -->
        <h2><center>Pengembalian Inventaris</center></h2> <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">Daftar Barang Yang Dipinjam</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pinjam</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12-10-2023</td>
                            <td>Abdul Somat</td>
                            <td>Laptop</td>
                            <td>190</td>
                            <td>13-10-2023</td>
                            <td>
                                <label for="" class="label label-warning">Dipinjam</label>
                            </td>
                            <td>
                                <a href="?p=detail_pengembalian" class="btn btn-sm btn-primary ">Konfirmasi</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>