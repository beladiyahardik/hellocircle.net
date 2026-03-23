<?php
// Header with shared HTML head and opening layout.
if (!isset($page_title)) {
    $page_title = "Circle";
}
if (!isset($page_description)) {
    $page_description = "Circle is the private social home for real-life groups. Share memories, plan easily, and keep everything in one calm, private space.";
}
if (!isset($page_canonical)) {
    $page_canonical = "index.php";
}
if (!isset($page_og_image)) {
    $page_og_image = "assets/og-circle-placeholder.jpg";
}
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($base_path === '' || $base_path === '/') {
    $base_path = '/' . basename(__DIR__);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>">

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_og_image); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($page_og_image); ?>">
    <link rel="icon" type="image/png" href="<?php echo $base_path; ?>/favicon.png">

    <!-- Bootstrap 5 CSS (jsDelivr) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" referrerpolicy="no-referrer" />

    <style>
        :root {
            --circle-primary: #1877f2; /* Meta Blue */
            --circle-secondary: #42b72a; /* Meta Green */
            --circle-dark: #0f172a;
            --circle-soft: #e7f0ff;
        }
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #0f172a;
            background-color: #f5f7fb;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(24,119,242,0.12), rgba(66,183,42,0.12));
        }
        .hero-glow {
            background: radial-gradient(circle at top right, rgba(24,119,242,0.18), transparent 55%),
                        radial-gradient(circle at bottom left, rgba(66,183,42,0.18), transparent 50%);
        }
        .section-padding {
            padding: 4rem 0;
        }
        .tagline {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-size: 0.8rem;
            color: var(--circle-primary);
            font-weight: 700;
        }
        .card-shadow {
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
            border: 0;
        }
        .icon-pill {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(24, 119, 242, 0.12);
            color: var(--circle-primary);
        }
        .cta-banner {
            background: linear-gradient(120deg, #1877f2, #42b72a);
            color: #ffffff;
        }
        .table-icon-check {
            color: #42b72a;
        }
        .table-icon-cross {
            color: #dc3545;
        }
        .table-icon-neutral {
            color: #6c757d;
        }
        .badge-soft {
            background: var(--circle-soft);
            color: var(--circle-primary);
        }
        .quote-card {
            border-left: 4px solid rgba(24, 119, 242, 0.4);
        }
        .persona-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 0.75rem;
        }
        .brand-badge {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--circle-primary);
        }
        .brand-word {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: 0.02em;
            color: var(--circle-dark);
        }
        .brand-o {
            display: inline-block;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid var(--circle-primary);
            vertical-align: -2px;
            margin: 0 2px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include __DIR__ . '/nav.php'; ?>
<main>

