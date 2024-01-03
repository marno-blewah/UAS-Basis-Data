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
                    <a class="nav-link active" data-bs-toggle="tab" href="#headerrps">Header RPS</a>
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
                    <a class="nav-link" data-bs-toggle="tab" href="<?= base_url('user/createMateri'); ?>">Tambah Materi</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="headerrps" class="container tab-pane active"><br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('user/create'); ?>" method="POST">
                                    <label for="sel1">Program Studi (select one):</label>
                                    <select class="form-control" name="program_studi" id="sel1">
                                        <option>D3 Teknik Informatika</option>
                                        <option>D3 Manajemen Informatika</option>
                                        <option>S1 Informatika</option>
                                        <option>S1 Sistem Informasi</option>
                                    </select>
                                    <div class="my-3">
                                        <label for="text1" class="form-label">Dosen Pengampu</label>
                                        <input class="form-control" id="text3" type="text" name="dosen_pengampu" placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text2" class="form-label">Nama Mata Kuliah</label>
                                        <input class="form-control" id="text3" type="text" name="nama_matkul" placeholder="Nama Mata Kuliah" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text3" class="form-label">Semester</label>
                                        <input class="form-control" id="text3" type="text" name="semester" placeholder="Semester" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text3" class="form-label">Bobot SKS</label>
                                        <input class="form-control" id="text3" type="text" name="bobot_sks" placeholder="Bobot SKS" />
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