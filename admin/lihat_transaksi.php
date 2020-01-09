<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID.Transaksi</th>
                                            <th>Nama Pelanggan</th>
                                            <th>No.Rekening</th>
                                            <th>Nama Rekening</th>
                                            <th>Bank</th>
                                            <th>E-Mail</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Kode Pos</th>                                            
                                            <th>Telp</th>
                                            <th> Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	include 'koneksi.php';
                                    	$sql = mysql_query("select * from transaksi") or die(mysql_error());
                                    	while ($data=mysql_fetch_array($sql)) {
                                    	 ?>
                                        <tr class="odd gradeX">
                                            <td> <?php echo $data['id_transaksi']; ?> </td>
                                            <td> <?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['no_rek']; ?></td>
                                            <td><?php echo $data['nama_rek']; ?></td>
                                            <td><?php echo $data['bank']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['kota']; ?></td>
                                            <td><?php echo $data['pos']; ?></td>
                                            <td><?php echo $data['hp']; ?></td>
                                            <td>
                                            	<a target="_blank" href="laporan.php=<?php echo $data['id_transaksi']; ?>"><button class="btn btn-danger"><i class="fa fa-print "></i> Print</button></a></td>
                                        </tr>   
                                        <?php 
                                    };
                                         ?>                                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->