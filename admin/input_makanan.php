
		<div class="col-md-8">
		<div class="panel panel-default">
		<div class="panel-heading">
		<h3>Tambah Data Makanan</h3>
		</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
								<form  action="" method="post" enctype="multipart/form-data" role="form">
								<div class="form-group">
								    <label>Nama Barang</label>
								    <input type="text" name="br_nm" class="form-control" placeholder="Masukkan nama Barang" />							 
								</div>
								<div class="form-group">
								    <label>Jumlah Item</label>
								    <input type="text" name="br_item" class="form-control" placeholder=" Masukkan Jumlah item" />
								</div>
								<div class="form-group">
								    <label> Harga Barang</label>
								    <input type="text" name="br_hrg" class="form-control" placeholder=" Masukkan Harga Barang" />
								</div>
								<div class="form-group">
								    <label> Stock Barang</label>
								    <input type="text" name="br_stok" class="form-control" placeholder=" Masukkan Jumlah Stock" />
								</div>
								<div class="form-group">
								    <label> Barang Satuan</label>
								    <input type="text" name="br_satuan" class="form-control" placeholder=" Masukkan Satuan Barang" />
								</div>
								
								<div class="form-group">
								    <label> Keterangan</label>
								    <input type="text" name="ket" class="form-control" placeholder=" Masukkan Satuan Barang" />
								</div>
									<div class="form-group">
								    <label> Status Barang</label> 
								    <select class="form-control" style=" width: 300px; height: 30px; border: 2px; " name="br_sts">
								    	<option> -- Pilih Status </option>
								    	<option name="br_sts" value="Y"> Y </option>
								    	<option name="br_sts" value="N"> N</option>
								    </select>
								</div>
								<div class="form-group">
								    <label>Gambar Barang</label>

								    <input type="file" name="br_gbr" style="background-color: black; color: white; height: 30px;" />
								</div>
								<div class="form-group">
									<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
									<input type="reset" name="reset" value="Reset" class="btn btn-danger">
									
								</div>
								</form>
								<?php
								include 'koneksi.php';

       $br_id = @$_POST['br_id'];
        $br_nm = @$_POST['br_nm'];
      $br_item = @$_POST['br_item'];
      $br_hrg = @$_POST['br_hrg'];
      $br_stok = @$_POST['br_stok'];
      $br_satuan = @$_POST['br_satuan'];
      $ket = @$_POST['ket'];
      $br_sts = @$_POST['br_sts'];


      $sumber = @$_FILES['br_gbr']['tmp_name'];
      $target = 'assets/images/makanan/';
      $nama_gambar = @$_FILES['br_gbr']['name'];


      $simpan_data = @$_POST['simpan']; 

      if ($simpan_data) {

        if ($br_nm == "" || $br_item == "" || $br_hrg == "" || $br_stok == "" || $br_satuan== "" || $ket=="" || $br_sts=="" || $nama_gambar == ""){
                   ?>

                   <script type="text/javascript">
                  
         alert("Inputan harus diisi, silahkan Lengkapi lagi !!");
                   </script>
                   <?php
           
       } else{


        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

        if ($pindah) {
          mysql_query("insert into makanan values ('$br_id','$br_nm','$br_item','$br_hrg','$br_stok','$br_satuan', '$ket','$br_sts' ,'$nama_gambar')") or die (mysql_error());
           ?>

         <script type="text/javascript">
          alert(" Sukses !  Data berhasil disimpan! ");     
         </script>
         <?php

       } else{


        ?>
         <script type="text/javascript">
                  
         alert("Oops...", "gambar gagal disimpan  !!:(", "error");
          </script>         

        <?php
       }

        }

        }
      

     ?>
	
					</div>
				</div>
			</div>
		</div>
	</div>