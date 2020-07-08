
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<body>



  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Business Name or Tagline</h1>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
        <a class="btn btn-primary" href="http://localhost/GlobalStreet/promociones/">Call to Action!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->
 
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>






<section class="page container">
<div class="row ">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="col-md-4  col-lg-3 "style="widt: 300px; height: 400px;">
<div class="card" >
<img style=" height: 200px;" src="<?php the_post_thumbnail() ?>
<div class="card-body">
<h5 class="card-title"><?php  the_title();   ?></h5>
<p class="card-text"><?php  the_field('frontaxtrac'); ?></p>
<a href="<?php 
$enlace = get_permalink('id');
echo $enlace;
$enlace2 = get_permalink();
echo $enlace2;
$enlace = get_permalink('id', 'true');
echo $enlace; ?>" class="btn btn-primary">Conoce más</a>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</section>
<p></p>
 <?php get_footer(); ?>





