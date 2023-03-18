<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<h2>Data User</h2>
<p>Berikut ini daftar petugas pengelola aplikasi Pengaduan Masyarakat yang
sudah terdaftar dalam database.</p>
<p><a href="/petugas/tambah" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Tambah Petugas</a></p>
<table class="table table-bordered table-hovered text-center">
  <thead class="thead-dark">
<tr>
<th>No</th>
<th>Nama Petugas</th>
<th>Username</th>
<th>Level User</th>
<th>Aksi</th>
</tr>
</thead>
<tbody class="text-center">
<?php foreach($ListPetugas as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nama_petugas'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['level'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/petugas/edit/<?= $row['id_petugas']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"> Edit</i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus')" href="/petugas/hapus/<?=$row['id_petugas']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"> Hapus</i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>