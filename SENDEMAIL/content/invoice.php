<?php

// load query database
$ency = $_GET['id'];
$id = base64_decode($ency);


 ?>
<?php

    $say = "Hello, My Name is Ahmad Bastiar";
    $namaPenerimaEmail = "nsjm.cs@gmail.com";

    echo $say;
    
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>invoice <?php echo date('d-m-Y'); ?></title>
   </head>
   <body>
      <h1>Selamat Pagi <?php echo  $namaPenerimaEmail; ?></h1>
      <table border="1">
        <thead>
          <th>id</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kategori member</th>
        </thead>
        <tbody>
            <?php
            $query = mysql_query("SELECT * FROM tbl_member m join ref_category c on m.category_id_fk = c.category_id where m.category_id_fk='".$id."' ");
              while ($row = mysql_fetch_array($query)) {
             ?>
             <tr>
               <td><?php echo $row['member_id']; ?></td>
               <td><?php echo $row['member_name']; ?></td>
               <td><?php echo $row['member_address']; ?></td>
               <td><?php echo $row['category_name']; ?></td>
             </tr>
             <?php } ?>

        </tbody>
      </table>
   </body>
 </html>
