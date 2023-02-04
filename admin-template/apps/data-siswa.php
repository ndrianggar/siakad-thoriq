<?php
if ($_GET['page'] == 'data-siswa') {

    $data = '<a href="index.php?page=home">Beranda ></a> <b>Data Siswa</b>';
?>
 <div class="d-sm-flex align-items-right mb-4">
    <a href="#" data-toggle="modal"
                data-target="#inputModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50 align-right"></i> Tambah Data</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
   
    <div class="card-header py-3">
        
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $data ?></h6>
    </div>
   
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nis</th>
                        <th>nisn</th>
                        <th>nama</th>
                        <th>jekel</th>
                        <th>tempat</th>
                        <th>tgl_lahir</th>
                        <th>agama</th>
                        <th>kewarganegaraan</th>
                        <th>anak_ke</th>
                        <th>jml_saudara</th>
                        <th>alamat</th>
                        <th>tlp</th>
                        <th>jarak</th>
                        <th>ayah</th>
                        <th>ibu</th>
                        <th>pekerjaan_ayah</th>
                        <th>pekerjaan_ibu</th>
                        <th>tk_asal</th>
                        <th>sekolah_asal</th>
                        <th>kls_pindahan</th>
                        <th>tgl_diterima</th>
                        <th>tamat_belajar</th>
                        <th>pindah_ke_skl</th>
                        <th>kls_keluar</th>
                        <th>tgl_keluar</th>
                        <th>alasan</th>
                        <th>Aksi</th>
                    </tr>

                </thead>


                <tbody>
                    <?php
                    // $datasantri = neangandata("Select * FROM siswa");
                    $datasantri = $pdo->prepare("SELECT * FROM siswa");
                    $datasantri->execute(); // Eksekusi querynya


                    $i = 1; ?>
                    <?php foreach ($datasantri as $ds) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?php echo $ds["nis"]; ?></td>
                            <td><?php echo $ds["nisn"]; ?></td>
                            <td><?php echo $ds["nama"]; ?></td>
                            <td><?php echo $ds["jekel"]; ?></td>
                            <td><?php echo $ds["tempat"]; ?></td>
                            <td><?php echo $ds["tgl_lahir"]; ?></td>
                            <td><?php echo $ds["agama"]; ?></td>
                            <td><?php echo $ds["kewarganegaraan"]; ?></td>
                            <td><?php echo $ds["anak_ke"]; ?></td>
                            <td><?php echo $ds["jml_saudara"]; ?></td>
                            <td><?php echo $ds["alamat"]; ?></td>
                            <td><?php echo $ds["tlp"]; ?></td>
                            <td><?php echo $ds["jarak"]; ?></td>
                            <td><?php echo $ds["ayah"]; ?></td>
                            <td><?php echo $ds["ibu"]; ?></td>
                            <td><?php echo $ds["pekerjaan_ayah"]; ?></td>
                            <td><?php echo $ds["pekerjaan_ibu"]; ?></td>
                            <td><?php echo $ds["tk_asal"]; ?></td>
                            <td><?php echo $ds["skl_asal"]; ?></td>
                            <td><?php echo $ds["kls_pindahan"]; ?></td>
                            <td><?php echo $ds["tgl_diterima"]; ?></td>
                            <td><?php echo $ds["tamat_belajar"]; ?></td>
                            <td><?php echo $ds["pindah_ke_skl"]; ?></td>
                            <td><?php echo $ds["kls_keluar"]; ?></td>
                            <td><?php echo $ds["tgl_keluar"]; ?></td>
                            <td><?php echo $ds["alasan"]; ?></td>
                            <td> <a href="#" data-toggle="modal"
                data-target="#deleteModal" class="btn btn-danger btn-circle btn-sm" id="btn-hapus" onclick="hapus(<?php echo $ds['id']; ?>" >
                                        <i class="fas fa-trash"></i>
                                    </a><a href="#" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a> </td>


                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    
<?php } ?>