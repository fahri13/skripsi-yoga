<?= $this->extend('layout/index-login'); ?>
<?= $this->section('content'); ?>

<section>
  <div class="mb-16 h-40">
    <div class="text-gray-900 body-font bg-yellow-400">
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
      <h3 class="items-center justify-center text-center font-semibold text-lg mb-10">Login Admin</h3>
      <form action="<?= base_url('admin/auth') ?>" method="post" class="mx-auto justify-center">
        <div class="items-center justify-center font-normal text-center mb-4 text-base">
          <input type="text" placeholder="Email or Username"
            class="border-b-4 outline-none border-gray-900 rounded-sm px-2" name="username" />
        </div>
        <div class="items-center justify-center font-normal text-center mb-4 text-base">
          <input type="password" placeholder="Password"
            class="border-b-4 outline-none border-gray-900 rounded-sm px-2" name="password"/>
        </div>
        <div class="justify-center text-center items-center">
          <button type="submit" class="w-24 px-2 py-2 rounded-full font-semibold text-white bg-yellow-400 hover:bg-yellow-600">Login</button>

        </div>
      </form>
    </div>
  </div>
</section>




<?= $this->endSection() ?>