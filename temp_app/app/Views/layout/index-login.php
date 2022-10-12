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
    <link rel="stylesheet" href="/css/app.css">
    <?= $this->include('layout/style.css'); ?>
    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>

  <body>
    <!-- <%= yield %> -->
    <?= $this->renderSection('content'); ?>
  </body>
</html>
