<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-4 center">
            <div class="panel panel-primary">
                <div class="panel-heading">Tambah Inventaris</div>
                <div class="panel-body">
                        <form action="">
                            <div class="form-group">
                                <label>Kode Inventaris</label>
                                <input type="text" class="form-control" placeholder="Masukkan Kode Barang">
                            </div>
                            <div class="form-group">
                                <label>Nama Inventaris</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Barang">
                            </div>
                            <div class="form-group">
                                <label>Kondisi</label>
                                <select name="" id="" class="form-control">
                                    <option value="" name="" class="form-control">Pilih</option>
                                    <option value="" name="" class="form-control">Baru</option>
                                    <option value="" name="" class="form-control">Rusak</option>
                                    <option value="" name="" class="form-control">Bekas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" class="form-control" placeholder="Masukkan Jumlah Barang">
                            </div>
                            <div class="form-group">
                                <label>Nama Ruang</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ruang">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="" id="" cols="30" rows="5" placeholder="Masukkan Keterangan" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-md btn-primary">Simpan</button>
                                <a href="?p=list_barang" class="btn btn-md btn-default">Kembali</a>
                            </div>
                        </form>
                </div>
                </div>
            </div>
    </div>
</body>
</html>