<div class="container">
    <div class="row mt-3">
        <div class=" col-md-6 ">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header text-center"><?= $mahasiswa['nama'] ?></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><?= $mahasiswa['stambuk'] ?></h5>
                    <p class="card-text"><?= $mahasiswa['email'] ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="badge badge-primary
                     float-right">kembali</a>
                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mahasiswa['id']; ?>" class="badge badge-success float-right mr-2">edit</a>
                </div>
            </div>
        </div>
    </div>
</div>