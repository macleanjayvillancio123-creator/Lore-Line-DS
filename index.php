<?php
// Each item in this array = one slide
$slides = [
  [
    'img'   => 'assets/img/hero1.jpg',
    'tag'   => 'Your next favorite story',
    'title' => 'Every world has a story.',
    'text'  => 'Discover new worlds, unforgettable characters, and stories written by passionate authors.',
    'btn'   => 'Explore Stories',
    'link'  => 'discover.php',
  ],
  [
    'img'   => 'assets/img/hero2.jpg',
    'tag'   => 'Trending now',
    'title' => 'Find your next obsession.',
    'text'  => 'Read the stories everyone is talking about this week.',
    'btn'   => 'See Trending',
    'link'  => 'discover.php',
  ],
  [
    'img'   => 'assets/img/hero3.jpg',
    'tag'   => 'For writers',
    'title' => 'Have a story to tell?',
    'text'  => 'Share your imagination with the LoreLine community.',
    'btn'   => 'Start Writing',
    'link'  => 'write.php',
  ],
];
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main">
  <?php include 'includes/topbar.php'; ?>

  <div class="content">

        <!-- HERO BANNER -->
    <div id="heroBanner" class="carousel slide carousel-fade hero" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- dots -->
      <div class="carousel-indicators">
        <?php foreach ($slides as $i => $slide): ?>
          <button type="button"
                  data-bs-target="#heroBanner"
                  data-bs-slide-to="<?= $i ?>"
                  class="<?= $i === 0 ? 'active' : '' ?>"
                  <?= $i === 0 ? 'aria-current="true"' : '' ?>
                  aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>

      <!-- slides -->
      <div class="carousel-inner">
        <?php foreach ($slides as $i => $slide): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <img src="<?= htmlspecialchars($slide['img']) ?>" alt="">
            <div class="hero-overlay"></div>

            <div class="hero-text">
              <span class="hero-tag"><?= htmlspecialchars($slide['tag']) ?></span>
              <h1><?= htmlspecialchars($slide['title']) ?></h1>
              <p><?= htmlspecialchars($slide['text']) ?></p>
              <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn-gold">
                <?= htmlspecialchars($slide['btn']) ?> <i class="bi bi-arrow-right"></i>
              </a>
            </div><!-- /hero-text -->
          </div><!-- /carousel-item -->
        <?php endforeach; ?>
      </div><!-- /carousel-inner -->

      <!-- arrows -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroBanner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroBanner" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div><!-- /#heroBanner -->
    <!-- /HERO BANNER -->

    <!-- next sections go here -->

  </div>
</main>

<?php include 'includes/footer.php'; ?>