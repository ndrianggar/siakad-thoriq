$(document).ready(function(){
    // Sembunyikan loading simpan, loading ubah, loading hapus, pesan error, pesan sukes, dan tombol reset
    $("#loading-simpan, #loading-ubah, #loading-hapus, #pesan-error, #pesan-sukses, #btn-reset").hide();
    
    // $("#btn-tambah").click(function(){ // Ketika tombol tambah diklik
    //   $("#btn-ubah").hide(); // Sembunyikan tombol ubah dan checkbox foto
    //   $("#btn-simpan").show(); // Munculkan tombol simpan
      
    //   // Set judul modal dialog menjadi Form Simpan Data
    //   $("#modal-title").html("Form Simpan data");
    // });
    
    $("#submit").submit(function(e){ // Ketika tombol simpan di klik
      // Buat variabel data untuk menampung data hasil input dari form
      alert("test");
      e.preventDefault();
      var data = new FormData();
      data.append('nis', $("#nis").val()); 
      data.append('nisn', $("#nisn").val()); 
      data.append('jekel', $("#jekel").val()); 
      data.append('nama', $("#nama").val()); 
      data.append('tempat', $("#tempat").val()); 
      data.append('alamat', $("#alamat").val());
      data.append('tlp', $("#tlp").val()); 
      data.append('tgl_lahir', $("#tgl_lahir").val()); 
      data.append('agama', $("#agama").val()); 
      data.append('kewarganegaraan', $("#kewarganegaraan").val()); 
      data.append('anak_ke', $("#anak_ke").val()); 
      data.append('jml_saudara', $("#jml_saudara").val()); 
      data.append('jarak', $("#jarak").val()); 
      data.append('ayah', $("#ayah").val()); 
      data.append('ibu', $("#ibu").val()); 
      data.append('pekerjaan_ayah', $("#pekerjaan_ayah").val()); 
      data.append('pekerjaan_ibu', $("#pekerjaan_ibu").val()); 
      data.append('tk_asal', $("#tk_asal").val()); 
      data.append('skl_asal', $("#skl_asal").val()); 
      data.append('kls_pindahan', $("#kls_pindahan").val()); 
      data.append('tgl_diterima', $("#tgl_diterima").val());
      data.append('tamat_belajar', $("#tamat_belajar").val()); 
      data.append('pindah_ke_skl', $("#pindah_ke_skl").val()); 
      data.append('kls_keluar', $("#kls_keluar").val()); 
      data.append('tgl_keluar', $("#tgl_keluar").val()); 
      data.append('alasan', $("#alasan").val()); 
      
    //   data.append('foto', $("#foto")[0].files[0]);
      
      $("#loading-simpan").show(); // Munculkan loading simpan
      
      $.ajax({
        url: 'process_save.php', // File tujuan
        type: 'POST', // Tentukan type nya POST atau GET
        data: data, // Set data yang akan dikirim
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          $("#loading-simpan").hide(); // Sembunyikan loading simpan
          
          if(response.status == "sukses"){ // Jika Statusnya = sukses
            // Ganti isi dari div view dengan view yang diambil dari proses_simpan.php
            $("#view").html(response.html);
            
            /*
             * Ambil pesan suksesnya dan set ke div pesan-sukses
             * Lalu munculkan div pesan-sukes nya
             * Setelah 10 detik, sembunyikan kembali pesan suksesnya
             */
            $("#pesan-sukses").html(response.pesan).fadeIn().delay(10000).fadeOut();
            
            $("#form input, #form select").val(""); // Untuk meng-clear isian pada form
            $("#form-modal").modal('hide'); // Close / Tutup Modal Dialog
          }else{ // Jika statusnya = gagal
            /*
             * Ambil pesan errornya dan set ke div pesan-error
             * Lalu munculkan div pesan-error nya
             */
            $("#pesan-error").html(response.pesan).show();
          }
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
          alert(xhr.responseText); // munculkan alert
        }
      });
    });
    
    // $("#btn-ubah").click(function(){ // Ketika tombol ubah di klik
    //   // Buat variabel data untuk menampung data hasil input dari form
    //   var data = new FormData();
      
    //   data.append('nis', $("#nis").val()); // Ambil data nis
    //   data.append('nama', $("#nama").val()); // Ambil data nama
    //   data.append('jenis_kelamin', $("#jenis_kelamin").val()); // Ambil data jenis kelamin
    //   data.append('telp', $("#telp").val()); // Ambil data telepon
    //   data.append('alamat', $("#alamat").val()); // Ambil data alamat
      
    //   // Cek apakah checkbox ubah foto di ceklis
    //   if($("#ubah_foto").is(":checked")) // Jika di ceklis
    //     data.append('ubah_foto', $("#ubah_foto").val()); // Ambil data ubah foto (dari checkbox foto)
      
    //   // Ambil data foto yang dipilih pada form, dan masukkan ke variabel data
    //   data.append('foto', $("#foto")[0].files[0]);
      
    //   $("#loading-ubah").show(); // Munculkan loading ubah
      
    //   $.ajax({
    //     url: 'proses_ubah.php', // File tujuan
    //     type: 'POST', // Tentukan type nya POST atau GET
    //     data: data, // Set data yang akan dikirim
    //     processData: false,
    //     contentType: false,
    //     dataType: "json",
    //     beforeSend: function(e) {
    //       if(e && e.overrideMimeType) {
    //         e.overrideMimeType("application/json;charset=UTF-8");
    //       }
    //     },
    //     success: function(response){ // Ketika proses pengiriman berhasil
    //       $("#loading-ubah").hide(); // Sembunyikan loading ubah
          
    //       if(response.status == "sukses"){ // Jika Statusnya = sukses
    //         // Ganti isi dari div view dengan view yang diambil dari proses_ubah.php
    //         $("#view").html(response.html);
            
    //         /*
    //          * Ambil pesan suksesnya dan set ke div pesan-sukses
    //          * Lalu munculkan div pesan-sukes nya
    //          * Setelah 10 detik, sembunyikan kembali pesan suksesnya
    //          */
    //         $("#pesan-sukses").html(response.pesan).fadeIn().delay(10000).fadeOut();
            
    //         $("#form input, #form select").val(""); // Untuk meng-clear isian pada form
    //         $("#form-modal").modal('hide'); // Close / Tutup Modal Dialog
    //       }else{ // Jika statusnya = gagal
    //         /*
    //          * Ambil pesan errornya dan set ke div pesan-error
    //          * Lalu munculkan div pesan-error nya
    //          */
    //         $("#pesan-error").html(response.pesan).show();
    //       }
    //     },
    //     error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
    //       alert(xhr.responseText); // Munculkan alert
    //     }
    //   });
    // });
    
    $("#btn-hapus").click(function(){ // Ketika tombol hapus di klik
      // Buat variabel data untuk menampung data hasil input dari form
      var data = new FormData();
      data.append('nis', $("#data-nis").val()); // Ambil data nis
      
      $("#loading-hapus").show(); // Munculkan loading hapus
      
      $.ajax({
        url: 'process_delete.php', // File tujuan
        type: 'POST', // Tentukan type nya POST atau GET
        data: data, // Set data yang akan dikirim
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          $("#loading-hapus").hide(); // Sembunyikan loading hapus
          
          // Ganti isi dari div view dengan view yang diambil dari proses_hapus.php
          $("#data-siswa").html(response.html);
          
          /*
           * Ambil pesan suksesnya dan set ke div pesan-sukses
           * Lalu munculkan div pesan-sukes nya
           * Setelah 10 detik, sembunyikan kembali pesan suksesnya
           */
          $("#pesan-sukses").html(response.pesan).fadeIn().delay(10000).fadeOut();
          
          $("#delete-modal").modal('hide'); // Close / Tutup Modal Dialog
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
          alert("ERROR : "+xhr.responseText); // Munculkan alert
        }
      });
    });
    
    // $('#form-modal').on('hidden.bs.modal', function (e){ // Ketika Modal Dialog di Close / tertutup
    //   $("#btn-reset").click(); // Klik tombol reset agar form kembali bersih
    //   $("#nis").removeAttr('readonly'); // Enable textbox nis
    // });
  });