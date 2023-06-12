<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peminjaman</title>
</head>
<body>
    <!-- row start -->
    <div class="row">
        <h2><center>Peminjaman Inventaris</center></h2>
                            <hr>
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Peminjaman</div>
                <div class="panel-body">
                    <form action="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kode Peminjaman</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Peminjam</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Nama Pegawai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Laptop</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-md btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Daftar Barang Pinjam</div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tgl. Pinjam</th>
                                <th>Nama Peminjam</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Tgl. Kembali</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>11-11-2023</td>
                                <td>Andika</td>
                                <td>Laptop</td>
                                <td>10</td>
                                <td>12-11-2023</td>
                                <td>
                                    <label for=""class="label label-danger">Belum</label>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>12-11-2023</td>
                                <td>Soleh</td>
                                <td>Laptop</td>
                                <td>10</td>
                                <td>14-11-2023</td>
                                <td>
                                    <label for=""class="label label-warning">Dipinjam</label>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- row end -->
</body>
</html>