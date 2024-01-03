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
                <thead class="text-center">
                    <tr class="tr">
                        <th class="satu">No</th>
                        <th scope="col">Judul Materi</th>
                        <th scope="col">Indikator</th>
                        <th scope="col">Metode Pembelajaran</th>
                        <th scope="col">Bobot Penilaian</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($datarps as $rps) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $rps['judul_materi']; ?></td>
                            <td class="text-center"><?= $rps['indikator']; ?></td>
                            <td class="text-center"><?= $rps['metode']; ?></td>
                            <td class="text-center"><?= $rps['bobot_penilaian']; ?></td>
                            <td><?= $rps['deskripsi']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('user/view'); ?>" class="badge badge-warning">View</a>
                                <a href="<?= base_url('user/editMateri/') . $rps['id_materi']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('user/deleteMateri/') . $rps['id_materi']; ?>" class="badge badge-danger">Delete</a>
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