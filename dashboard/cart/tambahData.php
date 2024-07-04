<?php
require_once("../layout/top.php"); 
require_once("../../koneksi.php"); 


if (isset($_POST["submit"]))
{
    $id_user = $_POST["id_user"];
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $stock = $_POST["stock"];
    $status =$_POST["status"];
    $created_at = $_POST["create_at"];
    $update_at = $_POST["update_at"];
  
   
    

    $query = "INSERT INTO cart VALUES (NULL,'$id_user', '$id_barang', '$nama_barang', '$stock', '$status', 'create_at', '$update_at')";
  



    if($result = $koneksi->query($query)){
        echo "Berhasil menambahkan data";    
        header('location:index.php');   
    }else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}


?>

<div class="w-full text-black bg-{#EFF0FB} p-5 flex flex-col overflow-y-scroll">
<form class="flex flex-col" method="POST" action="" enctype="multipart/form-data">
        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="id_user" class="block text-sm font-medium leading-6 text-gray-900">Id_User</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="id_user"
                  id="id_user"
                  autocomplete="id_user"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="id_barang" class="block text-sm font-medium leading-6 text-gray-900">Id_Barang</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="id_barang"
                  id="id_barang"
                  autocomplete="id_barang"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                />
              </div>
            </div>
          </div>
        </div>

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
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
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
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
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
              <option>Belum Bayar</option>
              <option>Dikemas</option>
              <option>Dikirim</option>
            </select>
          </div>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            
            <label for="create_at" class="block text-sm font-medium leading-6 text-gray-900">create_at</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="create_at"
                  id="create_at"
                  autocomplete="create_at"
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

    