<div class="min-h-screen bg-white">
  <!-- header -->
  <header class="sticky top-0 z-10 bg-white shadow-sm">
    <div class="container mx-auto px-4 py-8 flex items-center">
      <!-- logo -->
      <div class="mr-auto md:w-48 flex-shrink-0">
        <img class="h-8 md:h-10 rounded-md" src="/images/Logo.png" alt="" />
      </div>
      <!-- search -->
      <div
        class="w-full max-w-xs xl:max-w-lg 2xl:max-w-2xl bg-gray-100 rounded-md hidden lg:flex items-center"
      >
      <form method="post" action="<?= base_url('/menu/search'); ?>">

        <select
          class="bg-transparent uppercase font-bold text-sm p-4 mr-4"
          name="categories"
          id=""
        >
        <option value="">all categories</option>
          <option value="makanan">Makanan</option>
          <option value="minuman">Minuman</option>
        </select>
        
        <input
          class="border-l border-gray-300 bg-transparent font-semibold text-sm pl-4"
          type="text"
          placeholder="I'm searching for ..."
          name="search"
          id="search"
        />
        </form>
        <svg
          class="ml-auto h-5 px-4 text-gray-500"
          aria-hidden="true"
          focusable="false"
          data-prefix="far"
          data-icon="search"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
          class="svg-inline--fa fa-search fa-w-16 fa-9x"
        >
          <path
            fill="currentColor"
            d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"
          ></path>
        </svg>
      </div>
      <!-- phone number -->
      <!-- <div class="ml-auto md:w-48 hidden sm:flex flex-col place-items-end">
        <span class="font-bold md:text-xl">62 858 9182 9851</span>
      </div> -->
      <!-- buttons -->
      <nav class="contents">
        <ul class="ml-4 xl:w-48 flex items-center justify-end">
          <li class="ml-2 lg:ml-4 relative inline-block">
       
          <div class="relative inline-block text-left">
  <div>
  <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" type="button">
   
       
            

              <svg
                class="h-9 lg:h-10 p-2 text-gray-500"
                aria-hidden="true"
                focusable="false"
                data-prefix="far"
                data-icon="user"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                class="svg-inline--fa fa-user fa-w-14 fa-9x"
              >
                <path
                  fill="currentColor"
                  d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"
                ></path>
              </svg>
  
            </button>
            </div>

            <div id="dropdown" class="hidden right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-white">Add Product</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-white">Update Password</a>
      </li>
    </ul>
    <div class="py-1">
      <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-gray-200 dark:hover:text-white">Logout</a>
    </div>
</div>

          </li>
        </ul>
      </nav>
      <!-- cart count -->
      <div class="ml-4 hidden sm:flex flex-col font-bold">
        <span class="text-xs text-gray-400">Your Order</span>
        <span> 12 items </span>
      </div>
      
    </div>
    <hr />
    <!-- <%= render "layouts/navbar" %> -->
    <?= $this->include('layout/navbar'); ?>
  </header>
  <main>
<?= $this->renderSection('content'); ?>
<?= $this->include('layout/footer'); ?>
  </main>
</div>
<!-- <script type="text/javascript">
  const search = document.getElementById('search');

  search.addEventListener('keyup', function(){
  //  if(str.length == 0)
  //  {
  //   document.getElementById('').innerHYML = "";
  //  }
   const xhttp =  new XMLHttpRequest();
   xhttp.onreadyStatechange = function(){
    if(xhttp.readyState == 4 && xhttp.status == 200){
      document.getElementById('stok').innerHTML = this.response;
    }
   }
  //  true = mengaktifkan asyncronous
  // false = mengaktivkan synkronous atau mematikan ajaxnya
   xhttp.open('GET', '/menu/search/'+search.value, true);
  //  menjalankan ajaxnya
   xhttp.send();
  });
</script> -->
