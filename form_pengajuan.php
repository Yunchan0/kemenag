<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>

	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
    <?php include 'navbar.php'; ?>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
     <?php include 'header.php'; ?>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Form Elements</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                                <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Surat Tugas</h5>
                        </div>
                        <div class="card-body">
                        <form action="surat-tugas.php" method="post">
    <!-- Isian untuk Surat Tugas -->
    <div class="form-group">
        <label for="wilayah_penugasan">Wilayah penugasan:</label>
        <input type="text" class="form-control" id="wilayah_penugasan" name="wilayah_penugasan" required>
    </div>
    <div class="form-group">
        <label for="alamat_wilayah_penugasan">Alamat wilayah penugasan:</label>
        <textarea class="form-control" id="alamat_wilayah_penugasan" name="alamat_wilayah_penugasan" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="nomor_surat">Nomor surat:</label>
        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="tempat_tanggal_lahir">Tempat tanggal lahir:</label>
        <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>
    </div>
    <div class="form-group">
        <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
    </div>
    <div class="form-group">
        <label for="noreg">Noreg:</label>
        <input type="text" class="form-control" id="noreg" name="noreg" required>
    </div>
    <div class="form-group">
        <label for="bidang_tugas">Bidang tugas / spesialisasi:</label>
        <input type="text" class="form-control" id="bidang_tugas" name="bidang_tugas" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="bimbingan_penyuluhan">Bimbingan dan penyuluhan Agama:</label>
        <input type="text" class="form-control" id="bimbingan_penyuluhan" name="bimbingan_penyuluhan" required>
    </div>
    <div class="form-group">
        <label for="uraian_tugas">Uraian tugas:</label>
        <textarea class="form-control" id="uraian_tugas" name="uraian_tugas" rows="5" required></textarea>
    </div>
    <div class="form-group">
        <label for="tempat">Tempat:</label>
        <input type="text" class="form-control" id="tempat" name="tempat" required>
    </div>
    <div class="form-group">
        <label for="tgl_bl_thn">Tanggal (tgl/bln/thn):</label>
        <input type="text" class="form-control" id="tgl_bl_thn" name="tgl_bl_thn" required>
    </div>
    <div class="form-group">
        <label for="upload_ttd">Upload tanda tangan:</label>
        <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
    </div>
    <div class="form-group">
        <label for="nama_ttd_bersangkuta">Nama yang menandatangani surat:</label>
        <input type="text" class="form-control" id="nama_ttd_bersangkuta" name="nama_ttd_bersangkuta" required>
    </div>
    <div class="form-group">
        <label for="nip">NIP:</label>
        <input type="text" class="form-control" id="nip" name="nip" required>
    </div>
    <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h5>Form cascsaca</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="wilayah_penugasan">Isian wilayah penugasan:</label>
                                            <input type="text" class="form-control" id="wilayah_penugasan" name="wilayah_penugasan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_wilayah_penugasan">Isian alamat wilayah penugasan:</label>
                                            <textarea class="form-control" id="alamat_wilayah_penugasan" name="alamat_wilayah_penugasan" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_surat">Nomor surat:</label>
                                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir">Tempat tanggal lahir:</label>
                                            <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bersangkutan">Bersangkutan untuk melaksanakan bimbingan:</label>
                                            <input type="text" class="form-control" id="bersangkutan" name="bersangkutan" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="agama">Agama:</label>
                                            <select class="form-control" id="agama" name="agama" required>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelompok_sasaran">Kelompok sasaran / binaan di:</label>
                                            <input type="text" class="form-control" id="kelompok_sasaran" name="kelompok_sasaran" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="uraian_tugas">Dengan uraian tugas sbb:</label>
                                            <textarea class="form-control" id="uraian_tugas" name="uraian_tugas" rows="5" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg">Noreg:</label>
                                            <input type="text" class="form-control" id="noreg" name="noreg" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bidang_tugas">Bidang tugas / spesialisasi:</label>
                                            <input type="text" class="form-control" id="bidang_tugas" name="bidang_tugas" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat:</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>
