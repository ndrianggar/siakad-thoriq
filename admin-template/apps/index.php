<?php
session_start();
error_reporting(0);
include "../../config/function.php";
// if($_GET['page'] == 'home'){

if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SD Thoriq - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        /* body {
            background-color: #f1f1f1;
        } */

        #formSiswa {
            background-color: #ffffff;
            margin-left: 700px;
            margin-top: 50px;
            font-family: Raleway;
            padding: 10px;
            width: 20%;
            min-width: 30px;
            height: 700px;
        }

        h1 {
            text-align: center;
        }

        /* input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }  */

        /* textarea{
            padding: 10px;
            width: 80%;
        }  */

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        .submit{
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer; 
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-table;
            opacity: 0.5;

        }

        .box-step {
            text-align: center;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }

        */
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <?php include 'sidebar.php'; ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                include 'header.php'; ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php include "body.php"; 
                    ?>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Input Modal-->
    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form class="formSiswa">
                    <div class="modal-body">
                        <h1>Register:</h1>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <p>
                                <label><b>Nis :</b></label> &nbsp; &nbsp;
                                <input type="number" id="nis" class="form-control" placeholder="Nis" name="nis" required>
                            </p>
                            <p>
                                <label><b>Nisn :</b></label> &nbsp; &nbsp;
                                <input type="number" id="nisn" class="form-control" placeholder="Nisn" name="nisn">
                            </p>

                            <p>
                                <label><b>Name :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="name" placeholder="Name" name="name">
                            </p>
                            <p>
                                <label><b>Gender :</b></label> </br>
                                <label for="lk">Laki-Laki </br><input type="radio"  id="jekel" name="jekel" value="L"></label>&nbsp; &nbsp;
                                <label for="pr">Perempuan</br> <input type="radio"  id="jekel" name="jekel" value="P"></label>
                            </p>
                            <p>
                                <label><b>Tempat Lahir :</b></label> &nbsp; &nbsp;
                                <input class="form-control"  id="tempat" placeholder="Tempat Lahir" name="tempat">
                            </p>
                            <p>
                            <p>
                                <label><b>Tanggal Lahir :</b></label> &nbsp; &nbsp;
                            <div class="input-group input-group-joined" style="width: 16.5rem;">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar fa-sm text-blue-50"></i>
                                </span>
                                <input class="form-control ps-0" name="tanggal" data-provide="datepicker" id="datepicker" placeholder="Pilih Tanggal..." />
                            </div>
                            </p>
                            <p>
                        </div>
                        <div class="tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="agama">
                                    <option selected>Pilih...</option>
                                    <option id="agama" value="islam" name="agama">Islam</option>
                                    <option id="agama"  value="budha" name="agama">Budha</option>
                                    <option id="agama" value="kristen" name="agama">Kristen</option>
                                    <option id="agama" value="konghucu" name="agama">Konghucu</option>
                                    <option id="agama" value="katolik" name="agama">Katolik</option>

                                </select>
                            </div>
                            <p>
                                <label><b>Kewarganegaraan :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan..." name="kewarganegaraan">
                            </p>
                            <p>
                                <label><b>Anak ke :</b></label> &nbsp; &nbsp;
                                <input type="number" id="anak_ke" class="form-control" placeholder="anak ke..." name="anak_ke">
                            </p>
                            <p>
                                <label><b>Jumlah Saudara :</b></label> &nbsp; &nbsp;
                                <input type="number" id="jml_saudara" class="form-control" placeholder="jumlah saudara" name="jml_saudara">
                            </p>
                            <p>
                                <label><b>Alamat :</b></label> &nbsp; &nbsp;
                                <textarea class="form-control" id="alamat"></textarea>
                                <p>
                                <label><b>Tel :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="tlp" type="tel" name="tlp" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><small>Format: +628</small><br><br></br></br>
                        </div>
                        <div class="tab">
                            <p>
                                <label><b>jarak :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="jarak" placeholder="jarak..." name="jarak">
                            </p>
                            <p>
                                <label><b>Nama Ayah :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="ayah" placeholder="Nama Ayah..." name="ayah">
                            </p>
                            <p>
                                <label><b>Nama Ibu :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="ibu" placeholder="Nama Ibu" name="ibu">
                            </p>
                            <p>
                                <label><b>Pekerjaan Ayah :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah">
                            </p>
                            <p>
                                <label><b>Pekerjaan Ibu :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu">
                            </p>
                        </div>
                        <div class="tab">
                            <p>
                                <label><b>TK Asal :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="tk_asal" placeholder="TK Asal" name="tk_asal">
                            </p>
                            <p>
                                <label><b>Sekolah Asal :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="skl_asal" placeholder="Sekolah Asal" name="skl_asal">
                            </p>
                            <p>
                                <label><b>Kelas Pindahan :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="kls_pindahan" placeholder="Kelas Pindahan..." name="kls_pindahan">
                            </p>
                            <p>
                                <label><b>Tanggal Terima :</b></label> &nbsp; &nbsp;
                            <div class="input-group input-group-joined" style="width: 16.5rem;">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar fa-sm text-blue-50"></i>
                                </span>
                                <input class="form-control ps-0" id="tgl_diterima" name="tgl_diterima" data-provide="datepicker"  placeholder="Tanggal Terima..." />
                            </div>
                            </p>
                            <p>
                                <label><b>Tamat Belajar :</b></label> &nbsp; &nbsp;
                            <div class="input-group input-group-joined" style="width: 16.5rem;">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar fa-sm text-blue-50"></i>
                                </span>
                                <input class="form-control ps-0" name="tamat_belajar" id="tamat_belajar" data-provide="datepicker" placeholder="Tamat Belajar..." />
                            </div>
                            </p>
                        </div>
                        <div class="tab">

                            <p>
                                <label><b>Pindahan Ke Sekolah :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="pindah_ke_skl" placeholder="Pindahan Ke Sekolah..." name="pindah_ke_skl">
                            </p>
                            <p>
                                <label><b>Kelas keluar :</b></label> &nbsp; &nbsp;
                                <input class="form-control" id="kls_keluar" placeholder="Pindahan Ke Sekolah..." name="kls_keluar">
                            </p>
                            </p>
                            <p>
                                <label><b>Tanggal Keluar :</b></label> &nbsp; &nbsp;
                            <div class="input-group input-group-joined" style="width: 16.5rem;">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar fa-sm text-blue-50"></i>
                                </span>
                                <input class="form-control ps-0" name="tgl_keluar" id="tgl_keluar" data-provide="datepicker" placeholder="Tamat Belajar..." />
                            </div>
                            </p>
                            <p>
                                <label><b>Alasan:</b></label> &nbsp; &nbsp;
                                <textarea class="form-control" id="alasan" placeholder="Alasan..." name="alasan"></textarea>
                            </p>
                            </p>
                        </div>
                        </br>
                        </br>
                        <div class="box-step">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </div>
                </form>


                <div class="modal-footer">
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                    <input type="hidden" id="data-nis">
                        Konfirmasi
                    </h4>
                </div>
                <div class="modal-body">
                    <!--
            -- Beri id "data-nis" untuk textbox nis yang digunakan untuk menampung
            -- data nis yang akan dihapus
            -->
                    <input type="hidden" id="data-nis">

                    Apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <!-- Beri id "loading-hapus" untuk loading ketika klik tombol hapus -->
                    <div id="loading-hapus" class="pull-left">
                        <b>Sedang meghapus...</b>
                    </div>

                    <!-- Beri id "btn-hapus" untuk tombol hapus nya -->
                    <button type="button" class="btn btn-primary" id="btn-hapus">Ya</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div id="loading-simpan" class="pull-left">
              <b>Sedang menyimpan...</b>
            </div>
           
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        function showTab(n) {
                    // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "  <a type='button' id='submit'>Submit</a>";
                
               
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
        }
           
            //... and run a function that will display the correct step indicator:
            // fixStepIndicator(n)
        
        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            // if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("inputModal").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        // function validateForm() {
        //    var className ="";
        //     // This function deals with validation of the form fields
        //     var x, y, i, m,n, valid = true;
        //     x = document.getElementsByClassName("tab");
        //     y = x[currentTab].getElementsByTagName("input");
        //     m =x[currentTab].getElementsByTagName("textarea");
        //     n=x[currentTab].getElementsByTagName("select");
        //     // A loop that checks every input field in the current tab:
        //     for (i = 0; i < y.length; i++) {
        //         // If a field is empty...
        //         if (y[i].value == "") {
        //             // add an "invalid" class to the field:
        //             y[i].className += " invalid";
        //             // and set the current valid status to false
        //             valid = false;
        //         }
        //     }
        //     // If the valid status is true, mark the step as finished and valid:
        //     if (valid) {
        //         document.getElementsByClassName("step")[currentTab].className += " finish";
        //     }
        //     return valid; // return the valid status
        // }
        

        // function fixStepIndicator(n) {
        //     // This function removes the "active" class of all steps...
        //     var i, x = document.getElementsByClassName("step");
        //     for (i = 0; i < x.length; i++) {
        //         x[i].className = x[i].className.replace(" active", "");
        //     }
        //     //... and adds the "active" class on the current step:
        //     x[n].className += " active";
        // }

        // function SendData(){
        //     jQuery("#submit").click(
        //         alert("sakdfjlkasfdj")
        //     )
        // }
        // $(document).ready(function() {
        //     ('#datepicker').datepicker();

        // });

        function hapus(no){
  var nis = $("#nis-value-" + no).val();
  $("#data-nis").val(id);
        }
    </script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Datepicker -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="./vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script> -->
    <script src="../js/ajax.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
<!-- -->