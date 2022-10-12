<?= $this->extend('layout/index-login'); ?>
<?= $this->section('content'); ?>
 
 
    <section class="my-6 py-10">
      <div class="container mx-auto px-4 flex flex-col lg:flex-col">
      <!-- component -->
      <script
        defer
        src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"
      ></script>
     
      <section
        class="antialiased bg-gray-100 text-gray-600 h-screen px-4 my-8 py-4"
        x-data="app"
      >
        <div class="flex flex-col justify-center h-full my-8">
          <!-- Table -->
          <div
            class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200"
          >
            <header class="px-5 py-4 border-b border-gray-100">
              <div class="font-semibold text-gray-800">Meja s </div>
            </header>

          
            <!-- total amount -->
            <div
            class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4"
            >
              <div class="mr-3">Total = </div>
              <div class="text-blue-600">
                Rp. <span x-text="total"></span>
              </div>
            </div>

            <div class="flex justify-end">
              <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
              <input
                type="hidden"
                class="border border-black bg-gray-50"
                x-model="selected"
              />
            </div>
          
          </div>
          
        </div>
      </section>
   
      
    </div>
    </section>
    
    
   

<?= $this->endSection() ?>