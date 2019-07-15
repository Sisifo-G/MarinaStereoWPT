
<?php
/*
Template Name: podcast
*/
?>

<?php include("header-2.php");?>  
  <!-- #header -->
<!-- Contenido -->


<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Podcast</h1>
            <span class="color-text-a">Entradas recientes</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo esc_url( home_url('/')); ?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Actividades
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <section id="portfolio">
  <div class="container wow fadeInUp">
  <div class="row" id="portfolio-wrapper">
  <?php $cats_to_get = array('podcast'); ?>
<?php foreach($cats_to_get as $cat_to_get): ?>
<?php query_posts('category_name='.$cat_to_get.'&posts_per_page=10'); ?>

<?php while (have_posts()) : the_post(); ?>


            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="">
              <img src="<?php bloginfo('template_url'); ?>/img/portfolio/app1.jpg" alt="">
                <div class="titulo-pod">  
                  <h3><i class="fas fa-podcast fa-pod"></i><br><?php the_title(); ?></h3>
                </div>
                <div class="details">
                  <h4><?php echo get_the_date(); ?> </h4>
                  <span><?php the_excerpt(); ?></span>
                </div>
              </a>
            </div>


<?php endwhile; ?>
<?php endforeach; ?> 
</div>
                          </div>


<div class="row">
           

  <!--/ News Grid Star /-->
  
 

      <div class="card-body">
          <?php get_template_part('template-parts/content', 'paginacion'); ?>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ News Grid End /-->


  <!-- Footer-->
  <?php get_footer(); ?>