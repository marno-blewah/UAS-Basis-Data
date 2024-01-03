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
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">NIM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tugas as $t) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['nim']; ?></td>
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