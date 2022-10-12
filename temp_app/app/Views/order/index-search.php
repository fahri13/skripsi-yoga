<!-- <%= render "layouts/style" %> -->
<?= $this->extend('layout/index'); ?> 
<?= $this->section('content'); ?>
 
    <section class="my-6 py-10">
      <div class="container mx-auto px-4 flex flex-col lg:flex-col">
      <!-- component -->
      <script
        defer
        src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"
      ></script>
    
        <!-- <php if($o['table'] <= $o['id'] || $o['table'] >= $o['id']) : ?> -->
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
              <div class="font-semibold text-gray-800">Meja <?= $table['table']; ?> </div>
            </header>

            <div class="overflow-x-auto p-3">
              <table class="table-auto w-full">
                <thead
                  class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
                >
                  <tr>
                    <th></th>
                    <th class="p-2">
                      <div class="font-semibold text-left">Menu</div>
                    </th>
                    <th class="p-2">
                      <div class="font-semibold text-left">Quantity</div>
                    </th>
                    <th class="p-2">
                      <div class="font-semibold text-left">Total</div>
                    </th>
                    <th class="p-2">
                      <div class="font-semibold text-center">Action</div>
                    </th>
                  </tr>
                </thead>

                <tbody class="text-sm divide-y divide-gray-100">
                  <!-- record 1 -->
                  <!-- <= $o['table']; ?> -->
                  <?php foreach($orders as $o) : ?>
                     
                  <tr>
                    <td class="p-2">
                      <input
                        type="checkbox"
                        class="w-5 h-5"
                        value="id-1"
                        @click="toggleCheckbox($el, <%= lt[:totalPrice] %>)"
                      />
                    </td>
                    <td class="p-2">
                      <div class="font-medium text-gray-800">
                        <?= $o['menu']; ?>
                      </div>
                    </td>
                    <td class="p-2">
                      <div class="text-left"><?= $o['totalItem']; ?></div>
                    </td>
                    <td class="p-2">
                      <div class="text-left font-medium text-green-500">
                        Rp. <?= $o['totalPrice']; ?>
                      </div>
                    </td>
                    <td class="p-2">
                      <div class="flex justify-center">
                        <a href="<?= base_url('/order/delete/'.$o['id']); ?>">
                          <svg
                            class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                            ></path>
                          </svg>
                    </a>
                      </div>
                    </td>
                  </tr>
                  
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

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
            <script>
              document.addEventListener("alpine:init", () => {
                Alpine.data("app", () => ({
                  total: 0,
                  selected: [],
                  
                  toggleCheckbox(element, amount) {
                    if (element.checked) {
                      this.selected.push(element.value);
                      this.total += amount;
                    } else {
                      const index = this.selected.indexOf(element.value);
                      
                      if (index > -1) this.selected.splice(index, 1);
      
                      this.total -= amount;
                    }
                  },
                }));
              });
            </script>
          </div>
          
        </div>
      </section>
  
      
    </div>
    </section>
    
    
    
    <?= $this->endSection(); ?>
