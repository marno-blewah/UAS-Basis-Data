<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="col-lg">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr class="tr">
                        <th class="satu">No</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Dosen Pengampu</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Bobot SKS</th>
                        <th scope="col" class="text-center">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($datarps as $rps) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $rps['program_studi']; ?></td>
                            <td><?= $rps['dosen_pengampu']; ?></td>
                            <td><?= $rps['nama_matkul']; ?></td>
                            <td class="text-center"><?= $rps['semester']; ?></td>
                            <td class="text-center"><?= $rps['bobot_sks']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('user/listMateri'); ?>" class="badge badge-warning">Materi</a>
                                <a href="<?= base_url('user/editMatkul/') . $rps['id_data']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('user/delete/') . $rps['id_data']; ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->