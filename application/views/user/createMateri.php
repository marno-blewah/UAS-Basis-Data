<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="col-lg text-dark bg-opacity-10">
        <div class="container">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="<?= base_url('user/create'); ?>">Header RPS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Identitas RPS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu2">Gambaran Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu3">Capaian Pembelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu4">Prasyarat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu5">Unit-Unit Pembelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu6">Tugas/Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu7">Referensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#menu7">Tambah Materi</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="headerrps" class="container tab-pane active"><br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('user/createMateri'); ?>" method="POST">
                                    <div class="my-3">
                                        <label for="text1" class="form-label">Judul Materi</label>
                                        <input class="form-control" id="text3" type="text" name="judul_materi" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text2" class="form-label">Indikator</label>
                                        <input class="form-control" id="text3" type="text" name="indikator" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="sel1">Metode Pembelajaran (select one):</label>
                                        <select class="form-control" name="metode" id="sel1">
                                            <option>-</option>
                                            <option>Luring</option>
                                            <option>Daring</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text3" class="form-label">Bobot Penilaian</label>
                                        <input class="form-control" id="text3" type="text" name="bobot_penilaian" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text3" class="form-label">Deskripsi</label>
                                        <input class="form-control" id="text3" type="text" name="deskripsi" />
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <tr>
                                                <!--bikin tombol daftar-->
                                                <td colspan="2">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                <td></td>
                                            </tr>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->