<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Sistem Penjualan</h1></center>
      <h3>Tabel Pelanggan </h3>
      <table>
         <thead>
            <tr>
               <th>ID Pelanggan</th>
               <th>Nama</th>
               <th>Nomer Telepon</th>
               <th>Tanggal Lahir</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_pelanggan'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Nomer_Telepon'] ?></td>
               <td><?php echo $row['Tanggal_Lahir'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Barang </h3>
      <table>
         <thead>
            <tr>
               <th>ID Barang</th>
               <th>Nama Barang</th>
               <th>Harga</th>
               <th>Stok</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
            <tr>
               <td><?php echo $row['ID_Pegawai'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Jabatan'] ?></td>
               <td><?php echo $row['Nomer_Telpon'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Pemasok </h3>
      <table>
      <thead>
            <tr>
               <th>ID Pemasok</th>
               <th>Nama Pemasok</th>
               <th>Alamat Pemasok</th>
               <th>Nomer Telepon</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pemasok';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
            <tr>
               <td><?php echo $row['ID_Pemasok'] ?></td>
               <td><?php echo $row['Nama_Pemasok'] ?></td>
               <td><?php echo $row['Alamat'] ?></td>
               <td><?php echo $row['Nomer_Telepon'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Buku </h3>
      <table>
      <thead>
            <tr>
               <th>ID Buku</th>
               <th>Judul</th>
               <th>Pengarang</th>
               <th>Penerbit</th>
               <th>Harga</th>
               <th>Stok</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM Buku';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
            <tr>
               <td><?php echo $row['ID_Buku'] ?></td>
               <td><?php echo $row['Judul'] ?></td>
               <td><?php echo $row['Pengarang'] ?></td>
               <td><?php echo $row['Penerbit'] ?></td>
               <td><?php echo $row['Harga'] ?></td>
               <td><?php echo $row['Stok'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Transaksi </h3>
      <table>
      <thead>
            <tr>
               <th>ID Transaksi</th>
               <th>ID Pelanggan</th>
               <th>ID Pegawai</th>
               <th>Tanggal Transaksi</th>
               <th>Total Biaya</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
            <tr>
               <td><?php echo $row['ID_Transaksi'] ?></td>
               <td><?php echo $row['ID_Pelanggan'] ?></td>
               <td><?php echo $row['ID_Pegawai'] ?></td>
               <td><?php echo $row['Tanggal_Transaksi'] ?></td>
               <td><?php echo $row['Total_Biaya'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>
        <h3>Detail Transaksi </h3>
        <table>
        <thead>
            <tr>
               <th>ID Transaksi</th>
               <th>ID Buku</th>
               <th>Jumlah</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM detail_transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
            <tr>
               <td><?php echo $row['ID_Transaksi'] ?></td>
               <td><?php echo $row['ID_Buku'] ?></td>
               <td><?php echo $row['Jumlah'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>
        
            </body>
</html>
    
   </body>
</html>