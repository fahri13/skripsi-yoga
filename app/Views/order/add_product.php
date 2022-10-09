<?= $this->extend('layout/index-login'); ?>
<?= $this->section('content'); ?>

<section>
  <div class="mb-16 h-40">
    <div class="text-gray-900 body-font border-b-2">
      <div
        class="container px-5 py-8 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="mx-auto text-center">
          <a class="flex items-center justify-center">
            <img class="h-20" src="<?= base_url('/images/Logo.png'); ?>" alt="" />
          </a>
        </div>

      </div>

    </div>

    <div class="mt-10 mb-8 container mx-auto">
      <h3 class="items-center justify-center text-center font-semibold text-lg mb-10">Tambah Produk</h3>
      <form action="<?= base_url('menu/store_product')?>" method="post" class="mx-auto justify-center dropzone mb-12" id="add-product" enctype="multipart/form-data">
      <?= csrf_field() ?>
        <div class="flex flex-col space-y-2 items-center mt-4">
              <label for="name_product" class="text-gray-700 select-none font-medium">Nama Produk</label>
            <input
            id="name_product"
            type="text"
            name="name_product"
            placeholder="Nama Produk"
            class="w-1/3 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
            />
        </div>
        <div class="flex flex-col space-y-2 items-center mt-4">
              <label for="price" class="text-gray-700 select-none font-medium">Harga</label>
            <input
            id="price"
            type="text"
            name="price"
            placeholder="Harga"
            class="w-1/3 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
            onkeypress="return isNumberKey(event);"
            />
        </div>

        <div class="flex flex-col space-y-2 items-center mt-4">
          <label for="categoryy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Category Product</label>
              <select id="categoryy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category">
              <option selected>Choose a category</option>
              <option value="Food">Food</option>
              <option value="Drink">Drink</option>
          </select>
        </div>

        <div class="flex flex-col space-y-2 items-center mt-4">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
              <input class="block w-1/3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file_product">
        </div>

        <div class="flex flex-col space-y-2 items-center mt-4">
              <label for="detail_product" class="text-gray-700 select-none font-medium">Keterangan</label>
            <textarea
            id="detail_product"
            type="text"
            rows="5"
            name="detail_product"
            placeholder="Keterangan"
            class="w-1/3 resize-none px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
            ></textarea>
        </div> 
      
        <div class="mt-8 mb-12 py-4 justify-center text-center items-center">
          <button type="submit" class="px-4 py-2 rounded-full font-semibold text-white bg-yellow-400 hover:bg-yellow-600">Tambah Produk</button>

        </div>
      </form>
    </div>
  </div>
</section>



<?= $this->endSection() ?>