<?php 
    
                            if (isset($_POST['cektambah'])){
                                $kode_toko=$_POST['kode_toko'];
                                $nama_barang=$_POST['nama_barang'];
                                $harga_barang=$_POST['harga_barang'];
                                $stok_barang=$_POST['stok_barang'];
                                $satuan=$_POST['satuan'];
                                include('koneksi.php');
                                $fileName = $_FILES['gambar']['name'];
                                // Simpan ke Database

                                 $sql="INSERT INTO `barang` (`kode_toko`, `id`, `nama_barang`, `harga_barang`, `stok_barang`, `satuan`, `gambar`) VALUES ('$kode_toko', NULL, '$nama_barang', '$harga_barang', '$stok_barang', '$satuan', '$fileName');";
                                  mysqli_query($db,$sql);
                                 // Simpan di Folder Gambar
                                 move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/img/barang/".$kode_toko.'_'.$_FILES['gambar']['name']);
                                 echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
                                }

                         ?>