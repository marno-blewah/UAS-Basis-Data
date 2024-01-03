<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTugasModal">Tambah Tugas</a>

    <div class="col-lg">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr class="tr">
                        <th class="satu">No</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Deadline</th>
                        <th scope="col" class="text-center">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tugas as $t) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['kode']; ?></td>
                            <td><?= $t['matkul']; ?></td>
                            <td><?= $t['deskripsi']; ?></td>
                            <td><?= $t['deadline']; ?></td>
                            <td class="text-center">
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('user/deleteTugas/') . $t['id_tugas']; ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="newTugasModal" tabindex="-1" aria-labelledby="newTugasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newTugasModalLabel">Tambah Tugas</h1>
                <button type="submit" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="<?= base_url('user/tugas'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Mata Kuliah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Mata Kuliah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->