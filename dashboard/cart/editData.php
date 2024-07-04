<?php 
require_once("../layout/top.php");
require_once("../../koneksi.php"); 

$id = $_GET ['id'];

$data = $koneksi->query("SELECT * FROM cart WHERE id='$id'");
$data = $data->fetch_assoc();


if (isset($_POST["submit"]))
{
    $nama_barang = $_POST["id_user"];
    $nama_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $stock = $_POST["stock"];
    $status =$_POST["status"];
    $created_at = $_POST["created_at"];
    $update_at = $_POST["update_at"];

  $query = "UPDATE cart SET nama_barang='$nama_barang',stock='$stock', status='$status', update_at='$update_at', created_at='created_at WHERE id='$id'";

    if ($koneksi -> query ($query)===TRUE){
        header('location:index.php');
    }else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

?>

<div class="w-full text-black bg-{#EFF0FB} p-5 flex flex-col overflow-y-scroll">
<form class="flex flex-col" action="" method="POST">
<input type="hidden" name="id" value="<?php echo $data ['id']?>">

<div class="w-full text-black bg-{#EFF0FB} p-5 flex flex-col overflow-y-scroll">
<form class="flex flex-col" method="POST" action="" enctype="multipart/form-data">
        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            
            <label for="nama_barang" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="nama_barang"
                  id="nama_barang"
                  autocomplete="nama_barang"
                  value="<?= $data['nama_barang'] ?>"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                required
                  />
              </div>
            </div>
          </div>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stock</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="stock"
                  id="stock"
                  autocomplete="stock"
                  value="<?= $data['stock'] ?>"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                required
                  />
              </div>
            </div>
          </div>
        </div>

        <div class="mt-3 sm:col-span-3">
          <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
          <div class="mt-2">
            <select
              id="status"
              name="status"
              autocomplete="status-name"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
            >
              <option <?php if($data['status']== "Belum Bayar") echo "selected" ?> >Belum Bayar</option>
              <option <?php if($data['status']== "Dikemas") echo "selected" ?> >Dikemas</option>
              <option <?php if($data['status']== "Dikirim") echo "selected" ?> >Dikirim</option>
            </select>
          </div>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            
            <label for="created_at" class="block text-sm font-medium leading-6 text-gray-900">Created_at</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="created_at"
                  id="created_at"
                  autocomplete="created_at"
                  value="<?= $data['created_at'] ?>"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            
            <label for="update_at" class="block text-sm font-medium leading-6 text-gray-900">Update_at</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="update_at"
                  id="update_at"
                  autocomplete="update_at"
                  value="<?= $data['update_at'] ?>"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                />
              </div>
            </div>
          </div>
        </div>



        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button
            type="submit"
            name="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Save
          </button>
          <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        </div>
      </form>
</div>
<?php require_once("../layout/footer.php"); ?>

    