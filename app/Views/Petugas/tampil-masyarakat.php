<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<h2>Data Masyarakat</h2>
<p>Berikut ini daftar masyarakat aplikasi Pelayanan Pengaduan yang
sudah masuk .</p>
<p>
<a href="/masyarakat/tambah" class="btn btn-primary
btn-sm"><i class="fa-solid fa-plus"></i> Tambah Masyarakat</a>
</p>
<table class="table table-bordered table-hovered text-center">
  <thead class="thead-dark">
<tr>
<th>No</th>
<th>NIK</th>
<th>Nama</th>
<th>Nomor Telphone</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListMasyarakat as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/masyarakat/edit/<?= $row['nik']?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit </i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus')" href="/masyarakat/hapus/<?=$row['nik']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"> Hapus </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>