<?php
$page_title = "Contact Circle | Private Social App";
$page_description = "Get in touch with Circle. Share feedback, partnerships, or early access interest for our private social network.";
$page_canonical = "https://hellocircle.net/contact";
$page_og_image = "https://hellocircle.net/assets/og-circle-placeholder.jpg";
include __DIR__ . '/header.php';
?>

<section class="hero-gradient hero-glow section-padding">
    <div class="container">
        <p class="tagline">Circle – The private social home for your real life.</p>
        <h1 class="fw-bold"><i class="fa-solid fa-headset text-primary me-2"></i>Let us know what your Circle needs</h1>
        <p class="lead text-muted mt-3">Send a quick note. We are happy to help.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold"><i class="fa-solid fa-envelope-open-text text-primary me-2"></i>Contact form</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Your name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="you@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us about your group"></textarea>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold"><i class="fa-solid fa-location-dot text-primary me-2"></i>Circle HQ</h3>
                <p class="text-muted">We are building Circle with founders, investors, and early communities.</p>
                <div class="bg-light rounded-4 p-4 mb-3">
                    <p class="mb-1"><i class="fa-solid fa-envelope text-primary me-2"></i>hello@circle.app</p>
                    <p class="mb-1"><i class="fa-solid fa-earth-americas text-primary me-2"></i>Remote-first team</p>
                    <p class="mb-0"><i class="fa-solid fa-clock text-primary me-2"></i>Response within 48 hours</p>
                </div>
                <div class="bg-white border rounded-4 p-5 text-center">
                    <p class="text-muted mb-0"><i class="fa-solid fa-map text-primary me-2"></i>Map placeholder</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>






