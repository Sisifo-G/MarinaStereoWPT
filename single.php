<?php include("header-2.php");?>  
  <!-- #header -->
<!-- Contenido -->
<!--/ Intro Single star /-->

<?php 
  
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>
<section class="intro-single" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php the_title(); ?></h1>
          <span class="color-text-a"><?php the_category(); ?></span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url('/')); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Actividades destacadas
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Single Star /-->
<section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="news-img-box">
        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array( 'class' => 'max-img' ));
                            } ?>
                            
        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="post-information">
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <strong>Autor: </strong>
              <span class="color-text-a"><?php the_author(); ?></span>
            </li>
            
            <li class="list-inline-item">
              <strong>Fecha: </strong>
              <span class="color-text-a"><?php echo get_the_date(); ?></span>
            </li>
          </ul>
        </div>
        <div class="post-content color-text-a">
          <p class="post-intro">
          <?php the_content(); ?>
          </p>
        </div>
        <div class="post-footer">
          <div class="post-share">
            <span>Share: </span>
            <ul class="list-inline socials">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 



  endwhile; 
  endif; 

?>



<!--/ News Single End /-->

<!-- /contenido -->

  <!-- Footer-->
  <?php get_footer(); ?>