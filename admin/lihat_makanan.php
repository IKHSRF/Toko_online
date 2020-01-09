<!-- Advanced Tables -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Makanan 
                         </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> Nama Barang</th>
                                            <th> Item</th>
                                            <th>Harga(s)</th>
                                            <th>Stok</th>
                                            <th> Satuan</th>
                                            <th> Keterangan</th>
                                            <th> Statarus</th>
                                            <th> Gambar</th>
                                            <th> <center>Action</center> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	   <?php
                                include 'koneksi.php';
                                $sql = mysql_query("select * from makanan") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?> 
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['br_nm']; ?></td>
                                            <td><?php echo $data['br_item']; ?></td>
                                            <td><?php echo $data['br_hrg']; ?></td>
                                            <td class="center"><?php echo $data['br_stok']; ?></td>
                                            <td class="center"><?php echo $data['br_satuan']; ?></td>
                                            <td> <?php echo $data['ket']; ?></td>
                                            <td><?php echo $data['br_sts']; ?></td>
                                            <td>    <div class="user-info">
                            <div class="image">
                            <img src="assets/images/makanan/<?php echo $data ['br_gbr']; ?>" width='50' height='50' alt='user' style='background-color: dodgerblue;
                            border: 3px solid red;
                            border-radius: 100%;' >
                            </div>
                            </div></td>
                                            <td> <center><a href="?page=admin&aksi=edit_barang&kdbrg=<?php echo $data['br_id']; ?>"> <button class="btn btn-info"> Edit</button> </a> 
                                            	<a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=admin&aksi=hapus_barang&kdbrg=<?php echo $data['br_id']; ?>"> <button class="btn btn-danger"> Hapus</button> </a></center> </td>
                                        </tr>
                                          <?php
                                        $no++;
                                        };
                                        ?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <p class="text-center">
                                    <a href="?page=admin&aksi=makanan"> <button class="btn btn-info"> Tambah Data</button> </a>
            </p> 
                    </div>
                    <!--End Advanced Tables -->