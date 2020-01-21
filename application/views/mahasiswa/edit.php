<div class="container">

    <div class="col-md-6 mt-5 mx-auto">
        <div class="card">
            <div class="card-header text-center">Form edit data</div>
            <form action="<?= base_url();  ?>mahasiswa/edit/<?= $mahasiswa['id'] ?>" method="POST">
                <div class="card-body">
                    <?php if (validation_errors()) :  ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="hidden" name="id" require value="<?= $mahasiswa['id'] ?>">
                        <label for="stambuk">stambuk</label>
                        <input type="number" class="form-control" id="stambuk" name="stambuk" value="<?= $mahasiswa['stambuk']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="jurusan" name="jurusan" id="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($j == $mahasiswa['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right  mb-2" name="edit">edit</button>
                </div>
            </form>
        </div>

    </div>

</div>