<!-- <%= render "layouts/style" %> -->
<?= $this->extend('layout/index'); ?> 
<?= $this->section('content'); ?>
 
    <section class="my-10 py-10">
      <div class="container mx-auto px-4 flex flex-col lg:flex-row">
        <!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<div class="p-2">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 w-4 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							Name
						</th>
						<th scope="col" class="px-6 py-3 ml-4">
							Status
						</th>
						<th scope="col" class="px-6 py-3 md:ml-4">
							Action
						</th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($menus as $m) : ?>
					<tr
						class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<th scope="row" class="px-6 py-4 md:ml-4 font-medium text-gray-900 dark:text-white">
							<?= $m['name'] ?>
						</th>
						<td class="px-6 py-4">
              <div class="py-2 md:ml-4">
                <?= $m['stock'] ?>
              </div>
						</td>
						<td class="px-6 py-4">
							<!-- <%= link_to "#{m[:stock] == 'tersedia' ? 'Menu Habis' : 'Menu Tersedia'}", "/availablestock/#{m[:id]}", class: "py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-yellow-400 focus:bg-yellow-400 focus:outline-none focus:shadow-outline" %>  -->
							<!-- <a placeholder="<= ($m['stok'] == 'tersedia') ? 'Menu Tersedia' : 'Menu Habis' ?>" class="py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-yellow-400 focus:bg-yellow-400 focus:outline-none focus:shadow-outline" %>  -->
							<a href="<?= base_url('/menu/stok/'.$m['name']); ?>" class="py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-yellow-400 focus:bg-yellow-400 focus:outline-none focus:shadow-outline"><?= ($m['stock'] == 'tersedia') ? 'Menu Habis' : 'Menu Tersedia' ?></a> 
						</td>
					</tr>
        <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
      </div>
    </section>

 
<?= $this->endSection(); ?>
