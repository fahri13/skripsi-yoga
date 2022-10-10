    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/template/assets/css/style.css"> -->
<!DOCTYPE html>
<html>
  <head>
    <title>RM SariMinang</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <%= csrf_meta_tags %>
    <%= csp_meta_tag %>

    <%= stylesheet_link_tag "application", "data-turbo-track": "reload" %>
    <%= javascript_include_tag "application", "data-turbo-track": "reload", defer: true %> -->
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <!-- <script src="/js/app.js"></script> -->
    <!-- <script src="/js/dropzone.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function isNumberKey(evt){
          // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
      }
    </script>
  </head>

  <body>
    <!-- <%= yield %> -->
    <?= $this->renderSection('content'); ?>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  </body>
</html>
