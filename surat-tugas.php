<?php
require_once __DIR__ . '/vendor/autoload.php';

// Initialize MPDF
$mpdf = new \Mpdf\Mpdf();

// Data dari formulir POST
$wilayah_penugasan = $_POST['wilayah_penugasan'];
$alamat_wilayah_penugasan = $_POST['alamat_wilayah_penugasan'];
$nomor_surat = $_POST['nomor_surat'];
$nama = $_POST['nama'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$noreg = $_POST['noreg'];
$bidang_tugas = $_POST['bidang_tugas'];
$alamat = $_POST['alamat'];
$no_keputusan = $_POST['no_keputusan'];
$jenis_kegiatan = $_POST['jenis_kegiatan'];
$kelompok_sasaran = $_POST['kelompok_sasaran'];
$uraian_tugas = $_POST['uraian_tugas'];
$tempat = $_POST['tempat'];
$tgl_bl_thn = $_POST['tgl_bl_thn'];

$upload_dir = 'upload/';

// Mendapatkan nama file yang diunggah
$upload_file = $upload_dir . basename($_FILES['upload_ttd']['name']);

// Memindahkan file ke folder upload
if (move_uploaded_file($_FILES['upload_ttd']['tmp_name'], $upload_file)) {
    echo "File berhasil diunggah.";
    // Path file yang telah dipindahkan
    $upload_ttd = $upload_file;
} else {
    echo "Gagal mengunggah file.";
    // Jika gagal mengunggah, atur variabel $upload_ttd menjadi kosong
    $upload_ttd = '';
}

// HTML untuk surat tugas
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Surat Tugas</title>
</head>
<body>

<p style="text-align: center;"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA</b></p>
<p style="text-align: center;"><b>KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
<p style="text-align: center;">'.$wilayah_penugasan.'</p>
<p style="text-align: center;">'.$alamat_wilayah_penugasan.'</p>

<hr style="border: none; border-top: 1px solid black; margin: 10px auto;">
<hr style="border: none; border-top: 1px solid black; margin: 10px auto;">

<p style="text-align: center;"><b>SURAT TUGAS</b></p>
<p style="text-align: center;"><b>Nomor: '.$nomor_surat.'</b></p>

<p>Kepala Kantor Urusan Agama Kecamatan Remboken menugaskan</p>
<p>Penyuluh Agama Islam Non PNS</p>
<p><b>Nama: '.$nama.'</b></p>
<p><b>Tempat tanggal lahir: '.$tempat_tanggal_lahir.'</b></p>
<p><b>Pendidikan Terakhir: '.$pendidikan_terakhir.'</b></p>
<p><b>Noreg: '.$noreg.'</b></p>
<p><b>Bidang tugas / spesialisasi: '.$bidang_tugas.'</b></p>
<p><b>Alamat: '.$alamat.'</b></p>

<p>Sesuai surat keputusan Kepala Kantor Kementerian Agama Kabupaten Minahasa Nomor '.$no_keputusan.' dengan ini menugaskan yang bersangkutan untuk melaksanakan bimbingan dan penyuluhan Agama '.$jenis_kegiatan.' kepada kelompok sasaran / binaan di '.$kelompok_sasaran.' dengan uraian tugas sebagai berikut:</p>
<p>1. '.$uraian_tugas.'</p>
<p>2. Dst.</p>

<p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
<p style="text-align: right;">'.$tempat.', '.$tgl_bl_thn.'</p>

<div style="text-align: right;">
    <img src="<?= $upload_ttd ?>" alt="">
</div>


</body>
</html>
';

// Write HTML content to PDF
$mpdf->WriteHTML($html);

// Output PDF
$mpdf->Output('Surat_Tugas.pdf', 'D');
