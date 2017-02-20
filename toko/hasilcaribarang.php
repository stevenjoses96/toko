<div class="row" style="text-align: center; margin-top:50px; margin-left:300px; margin-bottom:50px;">
        <?php 
            include('koneksi.php');

            if(isset($_POST['namabrg'])){
        ?>
        <table border="1" width="75%" cellspacing="50">
        <tr style="background-color:#F5DEB3;">
          <td style="width:20%;height:40px; border: 10px ridge chocolate;" > 
            <div >
              <h3><b>Nama Barang</b></h3>
            </div>
          </td>

          <td style="width:30%;height:40px; border: 10px ridge chocolate;">
            <div >
              <h3><b>Harga Barang</b></h3>
            </div>
          </td>

          <td style="width:15%;height:40px; border: 10px ridge chocolate;">
            <div >
              <h3><b>Stok Barang</b></h3>
            </div>
          </td>

          <td style="width:45%;height:40px; border: 10px ridge chocolate;">
            <div >
              <h3 ><b>Kode Toko</b></h3>
            </div>
          </td>
        </tr>

          <?php 
          
            // global $seachbrg;
            // require_once 'hasil-cari-barang.php';
            $var=$_POST['namabrg'];
          ?>
          <script>
          var pasar = [
          <?php
              include('koneksi.php');

            
            $sql90="SELECT toko.lintang, toko.bujur, toko.nama_toko, barang.* FROM barang, toko 
                WHERE nama_barang LIKE '%$var%' AND toko.kode_toko=barang.kode_toko ORDER BY harga_barang DESC";
                
            $koordinat="";
            $res=mysqli_query($db,$sql90);
            while($data=mysqli_fetch_array($res)){
              $koordinat.="{
                      'lintang': ".$data['lintang'].",
                      'bujur':".$data['bujur'].",
                      'nama':'".$data['nama_toko']."',
                      'kd_toko':'".$data['kode_toko']."',
                      'harga_barang':'".$data['harga_barang']."',
                      'nama_barang':'".$data['nama_barang'].",' 
                       },";
            }
            $koordinat=substr($koordinat,0,strlen($koordinat)-1);// Hilangkan , terakhir
            echo $koordinat;
          ?>
          ];
          </script>
                              

          <?php
          
          $GLOBALS['seachbrg']=$_POST['namabrg'];

          $sql7="SELECT * FROM barang WHERE nama_barang LIKE '%$seachbrg%' ORDER BY harga_barang ASC";
          $query7=mysqli_query($db,$sql7) ;
          $count=mysqli_num_rows($query7) ;
          if($count==0){
              echo $output='There was no search results!';
          }else{
              while($row =mysqli_fetch_array($query7)){
        ?>

        <tr>
          <td style="border: 10px ridge chocolate; background-color:white;">
            <div>
              <h3 ><b><?php echo $nama=$row['nama_barang']; ?></b></h3>   
            </div>
          </td>

          <td style="border: 10px ridge chocolate; background-color:white;">
            <div>
              <h3 > <b><?php echo $harga=$row['harga_barang']; ?></b></h3>
            </div>
          </td>

          <td style="border: 10px ridge chocolate; background-color:white;">
            <div>
              <h3 > <b><?php echo $harga=$row['stok_barang']; ?></b></h3>
            </div>
          </td>

          <td style="border: 10px ridge chocolate; background-color:white;">
            <div>
              <h3 ><b><?php echo $harga=$row['kode_toko']; ?></b></h3>
            </div>
          </td>
        </tr>
        <?php 
        }
                }
         ?>
        </table>

        <?php  
            
        }

        ?>
      </div>