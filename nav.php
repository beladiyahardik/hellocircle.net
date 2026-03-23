<?php
// Shared navigation bar with clean URLs.
$nav_items = [
    'Home' => '',
    'About' => 'about',
    'Product' => 'product',
    'Solution' => 'solution',
    'Comparison' => 'comparison',
    'Contact' => 'contact',
    'Privacy' => 'privacy'
];
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($base_path !== '' && str_starts_with($current_path, $base_path)) {
    $current_path = substr($current_path, strlen($base_path));
}
$current_slug = trim($current_path, '/');
if ($current_slug === '' || $current_slug === 'index.php') {
    $current_slug = '';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo $base_path !== '' ? $base_path . '/' : './'; ?>">
            <i class="fa-solid fa-circle-nodes text-primary me-1"></i> Circle
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#circleNavbar" aria-controls="circleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="circleNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($nav_items as $label => $link): ?>
                    <?php
                        $slug = trim($link, '/');
                        $is_active = $current_slug === $slug;
                        $href = $base_path . ($slug === '' ? '/' : '/' . $slug);
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $is_active ? 'active fw-semibold' : ''; ?>" href="<?php echo $href; ?>">
                            <?php echo htmlspecialchars($label); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-dark ms-lg-3 d-flex align-items-center gap-2" href="#">
                <i class="fa-brands fa-google-play"></i>
                Install from Play Store
            </a>
        </div>
    </div>
</nav>


