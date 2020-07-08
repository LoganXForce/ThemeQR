<?php get_header(); ?>


   
<!DOCTYPE html>
<html lang="en">

<body>
  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5"> <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?php the_post_thumbnail() ?>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?php  the_title();   ?></h1>
        <p ><?php  the_content(); ?></p>
        <a href="<?php the_field('web'); ?>" class="btn btn-primary">Conoce más</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Informacion</p>
      </div>
    </div>
      <!-- /.col-md-4 -->
        
         <div>
        <div >
            <?php $images = get_field('galeria'); if( $images ): ?>
              <h1 align="center">Galeria</h1>
              <div>
            <?php $image_ids = get_field('galeria', false, false); 
            $shortcode = '[' . 'gallery ids="' . implode(',', $image_ids) . '" link="file"]'; 
            echo do_shortcode( $shortcode );  ?>
            </div>
          </div>
        </div><?php endif;  endwhile; endif; ?>
        <p></p>
      </div>

    </div>
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



<?php get_footer(); ?>