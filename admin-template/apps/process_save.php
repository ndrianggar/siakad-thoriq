<?php
// Include / load file koneksi.php
include "../../config/function.php";


$nis = $_POST['nis']; $nisn= $_POST['nisn']; 
$jekel= $_POST['jekel']; $nama= $_POST['nama']; 
$tempat= $_POST['tempat']; $alamat = $_POST['alamat'];
$tlp= $_POST['tlp']; $tgl_lahir= $_POST['tgl_lahir']; 
$agama= $_POST['agama']; $kewarganegaraan= $_POST['kewarganegaraan']; 
$anak_ke= $_POST['anak_ke']; $jml_saudara=$_POST['jml_saudara']; 
$jarak = $_POST['jarak']; $ayah= $_POST['ayah']; 
$ibu= $_POST['ibu']; $pekerjaan_ayah=$_POST['pekerjaan_ayah']; 
$pekerjaan_ibu= $_POST['pekerjaan_ibu']; $tk_asal=$_POST['tk_asal']; 
$skl_asal=$_POST['skl_asal']; $kls_pindahan = $_POST['kls_pindahan']; 
$tgl_diterima= $_POST['tgl_diterima'];$tamat_belajar= $_POST['tamat_belajar']; 
$pindah_ke_skl= $_POST['pindah_ke_skl']; $kls_keluar = $_POST['kls_keluar']; 
$tgl_keluar= $_POST['tgl_keluar']; $alasan= $_POST['alasan']; 


$sql = $pdo->prepare("INSERT INTO siswa VALUES(:nis, :nisn, :jekel, :nama, :tempat, :alamat, :tlp, :tgl_lahir, :agama,
                                                :kewarganegaraan, :anak_ke, :jml_saudara, :jarak, :ayah, :ibu, :pekerjaan_ayah,
                                                 :pekerjaan_ibu, :tk_asal, :skl_asal, :kls_pindahan, :tgl_diterima, :tamat_belajar,
                                                 :pindah_ke_skl, :kls_keluar, :tgl_keluar, :alasan)");


$sql->bindParam(':nis',$nis); $sql->bindParam(':nisn',$nisn); 
$sql->bindParam(':jekel',$jekel); $sql->bindParam(':nama',$nama); 
$sql->bindParam(':tempat',$tempat); $sql->bindParam(':alamat',$alamat);
$sql->bindParam(':tlp',$tlp); $sql->bindParam(':tgl_lahir',$tgl_lahir); 
$sql->bindParam(':agama',$agama); $sql->bindParam(':kewarganegaraan',$kewarganegaraan); 
$sql->bindParam(':anak_ke',$anak_ke); $sql->bindParam(':jml_saudara',$jml_saudara); 
$sql->bindParam(':jarak',$jarak); $sql->bindParam(':ayah',$ayah); 
$sql->bindParam(':ibu',$ibu); $sql->bindParam(':pekerjaan_ayah',$pekerjaan_ayah); 
$sql->bindParam(':pekerjaan_ibu',$pekerjaan_ibu); $sql->bindParam(':tk_asal',$tk_asal); 
$sql->bindParam(':skl_asal',$skl_asal); $sql->bindParam(':kls_pindahan',$kls_pindahan); 
$sql->bindParam(':tgl_diterima',$tgl_diterima); $sql->bindParam(':tamat_belajar',$tamat_belajar); 
$sql->bindParam(':pindah_ke_skl',$pindah_ke_skl); $sql->bindParam(':kls_keluar',$kls_keluar); 
$sql->bindParam(':tgl_keluar',$tgl_keluar); $sql->bindParam(':alasan',$alasan); 
$sql->execute(); // Eksekusi query insert

  // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
  ob_start();
  include "data-siswa.php";
  $html = ob_get_contents();
  ob_end_clean();
  
  // Buat variabel reponse yang nantinya akan diambil pada proses ajax ketika sukses
  $response = array(
    'status'=>'sukses', // Set status
    'pesan'=>'Data berhasil disimpan', // Set pesan
    'html'=>$html // Set html
  );

echo json_encode($response); // konversi variabel response menjadi JSON
?>