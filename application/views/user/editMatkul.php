<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="headerrps" class="container tab-pane active"><br>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('user/editMatkul/') . $datarps['id_data']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="sel1" class="form-label">Program Studi (select one):</label>
                                <select class="form-control" name="program_studi" id="sel1">
                                    <option>D3 Teknik Informatika</option>
                                    <option>D3 Manajemen Informatika</option>
                                    <option>S1 Informatika</option>
                                    <option>S1 Sistem Informasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="text3" class="form-label">Dosen Pengampu</label>
                                <input class="form-control" id="text3" type="text" name="dosen_pengampu" placeholder="Nama Lengkap" value="<?= $datarps['dosen_pengampu']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="text3" class="form-label">Nama Mata Kuliah</label>
                                <input class="form-control" id="text3" type="text" name="nama_matkul" placeholder="Nama Mata Kuliah" value="<?= $datarps['nama_matkul']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="text3" class="form-label">Semester</label>
                                <input class="form-control" id="text3" type="text" name="semester" placeholder="Semester" value="<?= $datarps['semester']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="text3" class="form-label">Bobot SKS</label>
                                <input class="form-control" id="text3" type="text" name="bobot_sks" placeholder="Bobot SKS" value="<?= $datarps['bobot_sks']; ?>" />
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>