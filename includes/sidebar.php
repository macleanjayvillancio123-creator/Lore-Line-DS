<aside class="offcanvas-lg offcanvas-start sidebar" tabindex="-1" id="sidebar">
  <div class="offcanvas-header">
    <span class="brand">LoreLine</span>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
  </div>

  <div class="offcanvas-body flex-column">
    <a href="index.php" class="brand d-none d-lg-block">LoreLine</a>

    <nav class="side-nav">
      <a href="index.php"    class="<?= $page === 'index.php' ? 'active' : '' ?>"><i class="bi bi-house"></i> Home</a>
      <a href="discover.php" class="<?= $page === 'discover.php' ? 'active' : '' ?>"><i class="bi bi-compass"></i> Discover</a>
      <a href="genres.php"   class="<?= $page === 'genres.php' ? 'active' : '' ?>"><i class="bi bi-grid"></i> Genres</a>
      <a href="library.php"  class="<?= $page === 'library.php' ? 'active' : '' ?>"><i class="bi bi-book"></i> My Library</a>
      <a href="write.php"    class="<?= $page === 'write.php' ? 'active' : '' ?>"><i class="bi bi-pen"></i> Write</a>

      <hr>

      <a href="notifications.php" class="<?= $page === 'notifications.php' ? 'active' : '' ?>"><i class="bi bi-bell"></i> Notifications</a>
      <a href="profile.php"       class="<?= $page === 'profile.php' ? 'active' : '' ?>"><i class="bi bi-person"></i> Profile</a>
    </nav>
  </div>
</aside>
