<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header>
  <div class="container-fluid custom-header">
    <nav class="navbar navbar-expand-lg navbar-light vertical-align">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Social Brothers">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events-archive">Events</a>
          </li>
        </ul>
        <div class="search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <button type="button" class="custom-btn">Log in</button>
      </div>
    </nav>
  </div>
</header>
<main>