<?php 
require_once("../layout/top.php"); 
require_once("../../koneksi.php"); 

$data = $koneksi->query("SELECT * FROM barang");


?>




<div class="w-full text-black bg-{#EFF0FB} p-10 flex flex-col items-center overflow-y-scroll gap-2">
  <div class="flex justify-end w-full">
    <a href="tambahData.php" class="py-1 px-2 rounded bg-blue-300">Tambah Data</a>
  </div>
   <table class="border-collapse border border-l-slate-400 w-full">
    <thead>
      <tr>
        <th class="border border-slate-300 p-2">No</th>
        <th class="border border-slate-300 p-2">Nama Barang</th>
        <th class="border border-slate-300 p-2">Kategori</th>
        <th class="border border-slate-300 p-2">Ukuran</th>
        <th class="border border-slate-300 p-2">Harga</th>
        <th class="border border-slate-300 p-2">Stock</th>
        <th class="border border-slate-300 p-2">Gambar</th>
        <th class="border border-slate-300 p-2">Keterangan</th>
        <th class="border border-slate-300 p-2">Action</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($data as $index=>$row) { ?>
      <tr>
                <td><?php  echo $index+1 ?> </td>
                <td><?php  echo $row ['nama_barang'] ?></td>
                <td><?php  echo $row ['harga'] ?></td>
                <td><?php  echo $row ['ukuran'] ?></td>
                <td><?php  echo $row ['stock'] ?></td>
                <td><?php  echo $row ['kategori'] ?></td>
                <td> <img src="<?php  echo $row ['gambar'] ?>" width="100" /> </td>
                <td><?php  echo $row ['keterangan'] ?></td>
        <td>
          <div class="flex gap-3 p-2">
          <a href="editData.php?id=<?= $row ['id']?>" class="py-1 px-2 rounded bg-blue-300">Edit</a>
          <a href="deleteData.php?id=<?=$row ['id'] ?>" class="py-1 px-2 rounded bg-blue-300">Delete</a>

            </div>
          </td>
        </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
<?php require_once("../layout/footer.php"); ?>

    