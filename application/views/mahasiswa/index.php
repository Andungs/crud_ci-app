<div class="container mt-4">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data
                    <strong><?= $this->session->flashdata('flash'); ?></strong> .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-5">
            <h3>Daftar Mahasiswa</h3>
            <a href="<?= base_url(); ?>/mahasiswa/tambah" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url(); ?>mahasiswa" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger mt-4" role="alert">
                    Mahasiswa Tidak di Temukan
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item"> <?= $mhs['nama']; ?>
                    <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Hapus <?= $mhs['nama'] ?>?');">Hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right ml-2">Detail</a>
                </li>
            <?php endforeach; ?>

        </div>
    </div>

</div>