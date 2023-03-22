<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header>
  <div class="header-container">
    <div class="header-logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Social Brothers">
      </a>
    </div>
    <div class="menu">
      <a href="/blog">Blog</a>
      <a href="/events">Events</a>
      <div class="search-icon">
					<img src="search.png" alt="Search Icon">
				</div>
    </div>
    <button type="button" id="login-btn">Login</button>
  </div>
</header>

<main>