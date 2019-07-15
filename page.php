<?php include("header-2.php");?>  
  <!-- #header -->
<!-- Contenido -->


<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Actividades destacadas</h1>
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
  
  <div class="container">
  <div class="row">
  <?php $cats_to_get = array('actividades'); ?>
<?php foreach($cats_to_get as $cat_to_get): ?>
<?php query_posts('category_name='.$cat_to_get.'&posts_per_page=10'); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="span3 col-lg-4 col-md-6 col-sm-12">
                    <div class="home-post">
                        <div class="post-image">
                            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array( 'class' => 'max-img' ));
                            } ?>
                            </a>
                        </div>
                        <div class="post-meta">
                            <i class="far fa-calendar-check icon-2x"></i>
                            <span class="date"> <?php echo get_the_date(); ?> </span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h5>
                            <p>
                            <?php the_excerpt(); ?> &hellip;
                            </p>
                            <a href="<?php the_permalink(); ?>" class="more">Ver más...</a>
                        </div>
                    </div>
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