<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
        font-family: 'Inter'
      }
    </style>

    <title>This wordpress is much better!</title>
  </head>
  <body>
      <div class="container">
        <?php get_header();?>
        <?php echo get_template_directory_uri() ?>/css/style.css
      </div>
    <div class="container mt-5 py-5">
      <h6 class="text-primary mt-3"><strong>Content creation</h6>
      <h1>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit.</strong></h1>
      <p class="m-0 mt-3" style="line-height: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut suscipit <br> sequi reiciendis, impedit dolorem velit corporis veniam autem.</p>
      <button class="btn btn-primary badge-pill px-5 mt-4">Click to read</button>
    </div>
    <div class="container">
        <?php get_footer();?>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>