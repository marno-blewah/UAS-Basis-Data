<div class="tab-content">
                <div id="headerrps" class="container tab-pane active"><br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('user/editMateri/') . $datarps['id_materi']; ?>" method="POST">
                                    <div class="my-3">
                                        <label for="text1" class="form-label">Judul Materi</label>
                                        <input class="form-control" id="text3" type="text" name="judul_materi" value="<?= $datarps['judul_materi']; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text2" class="form-label">Indikator</label>
                                        <input class="form-control" id="text3" type="text" name="indikator" value="<?= $datarps['indikator']; ?>"/>
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
                                        <input class="form-control" id="text3" type="text" name="bobot_penilaian" value="<?= $datarps['bobot_penilaian']; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="text3" class="form-label">Deskripsi</label>
                                        <input class="form-control" id="text3" type="text" name="deskripsi" value="<?= $datarps['deskripsi']; ?>"/>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <tr>
                                                <!--bikin tombol daftar-->
                                                <td colspan="2">
                                                    <button type="submit" class="btn btn-primary">Save</button>
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