<div class="container">

    <div class="col-md-6 mt-5 mx-auto">
        <div class="card">
            <div class="card-header text-center">Form Tambah data</div>
            <form action="<?= base_url();  ?>mahasiswa/tambah" method="POST">
                <div class="card-body">

                    <div class="form-group">
                        <label for="stambuk">stambuk</label>
                        <input type="number" class="form-control" id="stambuk" name="stambuk">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small class="form-text text-danger"><?= form_error('nama') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small class="form-text text-danger"><?= form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan" name="jurusan" id="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ($jurusan as $j) : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right  mb-2" name="tambah">Tambah</button>
                </div>
            </form>
        </div>

    </div>

</div>