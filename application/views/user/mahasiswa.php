<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="headerrps" class="container tab-pane active"><br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form >
                                    <label for="sel1">Program Studi (select one):</label>
                                    <select class="form-control" name="program" id="sel1">
                                        <option>D3 Teknik Informatika</option>
                                        <option>D3 Manajemen Informatika</option>
                                        <option>S1 Informatika</option>
                                        <option>S1 Sistem Informasi</option>
                                    </select>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <tr>
                                                <!--bikin tombol daftar-->
                                                <td colspan="2">
                                                    <a class="nav-link btn btn-primary" data-bs-toggle="tab" href="<?= base_url('user/listMahasiswa'); ?>">Submit</a>
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