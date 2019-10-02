<?php get_header(); ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<!-- Page Header -->
<?php $image = get_field('banner'); ?>
<header class="masthead" style="background-image: url('<?php echo $image['url'];?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title() ?></h1>
            <span class="subheading"><?php the_field('subheader') ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endwhile; else: ?>
<p>Sorry, page not found</p>

<?php endif; ?>
<?php get_footer(); ?>