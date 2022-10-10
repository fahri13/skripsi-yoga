<!-- <%= render "layouts/style" %> -->
<?= $this->extend('layout/index'); ?> 
<?= $this->section('content'); ?>
 
    <section class="relative bg-yellow-200 bg-opacity-90 py-10">
      <div class="container mx-auto px-4 flex flex-col lg:flex-row">
        <!-- left -->
        <div class="juice relative overflow-x-auto lg:w-2/3 rounded-xl bg-secondary-lite bg-cover p-8 md:p-16">
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
 
<?= $this->endSection(); ?>