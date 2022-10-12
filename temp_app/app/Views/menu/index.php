<!-- <%= render "layouts/style" %> -->
<?= $this->extend('layout/index'); ?> 
<?= $this->section('content'); ?>
 
    <section class="juice3 bg-yellow-200 bg-opacity-90 py-10">
      <div class="container mx-auto px-4 flex flex-col lg:flex-row">
        <!-- left -->
        <div class="juice relative lg:w-2/3 rounded-xl bg-secondary-lite bg-cover p-8 md:p-16">
          <p class="max-w-sm text-white text-3xl md:text-4xl font-semibold">Menu bervariasi dengan harga yang tipis!!</p>
          <p class="max-w-xs pr-10 text-white font-semibold mt-8">Menu baru dengan rempah pilihan dan rasa yang asli.</p>
          <button class="mt-20 bg-yellow-400 font-semibold px-8 py-2 rounded">Shop Now</button>
          
        </div>
        <!-- right -->
        <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
          <div class="max-w-sm">
            <p class="text-3xl md:text-4xl font-semibold text-white uppercase">20% sale off</p>
            <p class="mt-8 font-semibold text-white">Syncthetic seeds<br />2.0 OZ</p>
            <button class="mt-20 bg-yellow-400 font-semibold px-8 py-2 rounded">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <section class="container mx-auto pt-12 bg-white">
      <!-- title -->
      <div class="relative flex items-end font-bold">
        <h2 class="text-2xl">Browse by Category</h2>
        <a href class="ml-10 flex items-center text-gray-400">
          <span class="text-sm">All Categories</span>
          <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
        </a>
        <div class="ml-auto flex">
          <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
          </a>
          <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-yellow-400">
            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
          </a>
        </div>
      </div>
      <!-- cards -->
      <div class="mt-10">
        <!-- component -->
      </div>
    </section>
 
<?= $this->endSection(); ?>