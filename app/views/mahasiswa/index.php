
<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();  ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#form">
                Tambah Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach ($data["mhs"] as $mhs) :?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs["nama"] ?>
                    <div>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="btn btn-info">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs["id"]; ?>" class="btn btn-danger"
                            onclick="return confirmDelete(event, this.href)"
                        >Delete</a>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="form" tabindex="-1" aria-labelledby="add-data" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add-data">Tambah Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/add" method="post" >
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select name="prodi" id="prodi" class="form-select">
                            <option selected>Ilmu Komputer</option>
                            <option value="1">Teknik Informatika</option>
                            <option value="2">Sistem Informasi</option>
                            <option value="3">Manajemen Informatika</option>
                            <option value="4">Teknik Mesin</option>
                            <option value="5">Teknik Elektro</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label">Email</label>
                        <input type="email" class="form-control" id="prodi" name="email">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>