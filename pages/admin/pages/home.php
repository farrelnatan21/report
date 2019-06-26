<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Laporan Pengadaan Barang</h3>
        <div class="row">
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i><a href="?p=pdf"> CETAK</h4></a>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Company</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM konten");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['topik']; ?></td>
                    <td><?php echo $m['tanggal']; ?></td>
                    <td><img src="../../function/user/images/<?php echo $m['gambar'];?>" height="50"></td>
                    <td><?php echo $m['deskripsi']; ?></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                 <?php
        }
                 ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    