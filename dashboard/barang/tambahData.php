<?php
require_once("../layout/top.php"); 
require_once("../../koneksi.php"); 


if (isset($_POST["submit"]))
{
    $nama_barang = $_POST["nama_barang"];
    $harga = $_POST["harga"];
    $ukuran =$_POST["ukuran"];
    $stock = $_POST["stock"];
    $kategori =$_POST["kategori"];
    $gambar = $_POST["gambar"];
    $keterangan = $_POST["keterangan"];
  
   
    

    $query = "INSERT INTO barang VALUES (NULL,'$nama_barang','$harga','$ukuran','$stock', '$kategori','$gambar', '$keterangan')";
  



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

        <div class="mt-3 sm:col-span-3">
          <label for="kategori" class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
          <div class="mt-2">
            <select
              id="kategori"
              name="kategori"
              autocomplete="kategori-name"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
            >
              <option>Dress</option>
              <option>Bags</option>
              <option>Acessories</option>
            </select>
          </div>
        </div>

        <div class="mt-3 sm:col-span-3">
          <label for="ukuran" class="block text-sm font-medium leading-6 text-gray-900">Ukuran</label>
          <div class="mt-2">
            <select
              id="ukuran"
              name="ukuran"
              autocomplete="ukuran-name"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
            >
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
            </select>
          </div>
        </div>

        <div class="mt-3 rid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
            <div class="mt-2">
              <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
              >
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input
                  type="text"
                  name="harga"
                  id="harga"
                  autocomplete="harga"
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

        <div class="mt-3 col-span-full">
          <label for="gambar" class="block text-sm font-medium leading-6 text-gray-900">Gambar</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                  clip-rule="evenodd"
                />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label
                  for="gambar"
                  class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
                >
                  <span>Upload a file</span>
                  <input id="gambar" name="gambar" type="file" class="sr-only" />
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="keterangan" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
          <div class="mt-2">
            <textarea
              id="keterangan"
              name="keterangan"
              rows="3"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            ></textarea>
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

    