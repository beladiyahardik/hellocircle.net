<?php
$page_title = "Private Social Network for Real-Life Groups | Circle";
$page_description = "Circle is a private social network for close groups. Share memories, plan together, and stay organized. Create your private Circle for free.";
$page_canonical = "https://hellocircle.net/";
$page_og_image = "https://hellocircle.net/assets/og-circle-placeholder.jpg";
include __DIR__ . '/header.php';
?>

<section class="hero-gradient hero-glow section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="tagline mb-2">Circle - The private social home for your real life.</p>
                <h1 class="display-5 fw-bold">A private social network for real-life friends, not followers.</h1>
                <p class="lead text-muted mt-3">Circle is a private social app for friends, families, roommates, and trips. It keeps your posts in order, your plans in one place, and your memories easy to find. No ads. No algorithm. No public pressure.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2"><i class="fa-solid fa-lock text-primary me-2"></i>Share in a <strong>private group chat app</strong> made for trusted people.</li>
                    <li class="mb-2"><i class="fa-solid fa-image text-primary me-2"></i>Save moments with <strong>private photo sharing for groups</strong>.</li>
                    <li class="mb-2"><i class="fa-solid fa-calendar-check text-primary me-2"></i>Plan faster with a clean, calm <strong>organize group trips app</strong>.</li>
                    <li class="mb-2"><i class="fa-solid fa-list-ol text-primary me-2"></i>See every post in a <strong>no algorithm social media for close friends</strong> feed.</li>
                </ul>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-dark btn-lg d-inline-flex align-items-center gap-2" href="#">
                        <i class="fa-brands fa-google-play"></i>
                        Install from Play Store
                    </a>
                    <span class="badge badge-soft px-3 py-2">No ads • No algorithm • 100% private</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <img
                        src="https://images.unsplash.com/flagged/photo-1570733117311-d990c3816c47?q=80&w=1200&auto=format&fit=crop"
                        class="img-fluid rounded-4 card-shadow"
                        alt="Friends sharing memories in a private group"
                    >
                </div>
                <div class="bg-white rounded-4 p-4 card-shadow">
                    <h5 class="fw-bold"><i class="fa-solid fa-users text-primary me-2"></i>Your Circle at a glance</h5>
                    <p class="text-muted">Think of Circle as the best app for friend group memories and planning.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Chronological group feed</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Auto memory timeline</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Polls and event hub</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Weekly recap nudges</li>
                    </ul>
                    <div class="alert alert-primary mb-0">
                        <strong>Perfect for:</strong> college friends, roommates, families, and trips.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end mb-4">
            <div>
                <p class="tagline">Circle - The private social home for your real life.</p>
                <h2 class="fw-bold">Why Circle beats WhatsApp, Instagram & Facebook for your real-life groups</h2>
            </div>
            <a class="btn btn-outline-secondary" href="<?php echo $base_path; ?>/comparison">See the full comparison</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Feature</th>
                        <th>WhatsApp</th>
                        <th>Instagram</th>
                        <th>Facebook</th>
                        <th>Circle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Private by design (invite-only)</td>
                        <td><i class="fa-solid fa-circle-check table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>No public visibility or performance pressure</td>
                        <td><i class="fa-solid fa-circle-check table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Chronological feed (no algorithm)</td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Built-in memory timeline</td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Auto weekly recaps</td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Lightweight event planning & polls</td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Focused on small, trusted groups</td>
                        <td><i class="fa-solid fa-circle-check table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Best app for friend group memories</td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Private alternative to Facebook groups</td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Better than Instagram for real friends</td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-xmark table-icon-cross"></i></td>
                        <td><i class="fa-solid fa-circle-minus table-icon-neutral"></i></td>
                        <td><i class="fa-solid fa-circle-check table-icon-check"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <h2 class="fw-bold">Tired of losing your best memories in endless chat threads?</h2>
        <p class="text-muted">If you have tried to keep a friend group close with WhatsApp or public social media, you already know the pain. This is where Circle becomes your private social home.</p>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-comments text-danger me-2"></i>Chaos in chats</h6>
                        <p class="text-muted">Plans get buried and photos disappear in long threads.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-eye-slash text-danger me-2"></i>Public pressure</h6>
                        <p class="text-muted">Big platforms push likes, followers, and performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-photo-film text-danger me-2"></i>Scattered memories</h6>
                        <p class="text-muted">Photos are spread across apps with no real timeline.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-calendar-xmark text-danger me-2"></i>Messy planning</h6>
                        <p class="text-muted">Trips and events take too many messages to coordinate.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted mt-4">Circle fixes this by becoming your private social home. It is a private social network built for real-life groups, not public feeds.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <p class="tagline">Circle - The private social home for your real life.</p>
            <h2 class="fw-bold">Everything your close circle needs in one private space</h2>
            <p class="text-muted">Simple features that feel natural, not noisy.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-list-ol"></i></div>
                        <h5 class="fw-bold">Group feed in order</h5>
                        <p class="text-muted">A clean, chronological feed with no algorithm. Perfect for a private group chat app.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-timeline"></i></div>
                        <h5 class="fw-bold">Auto memory timeline</h5>
                        <p class="text-muted">Your photos and posts become a living timeline. Great for private photo sharing for groups.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-calendar-check"></i></div>
                        <h5 class="fw-bold">Event hub & polls</h5>
                        <p class="text-muted">Plan dinners and trips fast. A lightweight organize group trips app for real people.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-bell"></i></div>
                        <h5 class="fw-bold">Weekly recap nudges</h5>
                        <p class="text-muted">Short summaries keep everyone in the loop without extra noise.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-user-lock"></i></div>
                        <h5 class="fw-bold">Invite-only circles</h5>
                        <p class="text-muted">Only people you trust can join. A true private social app for friends.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-thumbtack"></i></div>
                        <h5 class="fw-bold">Pinned moments</h5>
                        <p class="text-muted">Pin the best posts so memories never get lost again.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted mt-4">Circle is a WhatsApp alternative for small groups and a private alternative to Facebook groups, built for calm connection.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <h2 class="fw-bold text-center">Perfect for college friends, roommates, trips, young families & more</h2>
        <p class="text-muted text-center mb-5">Small groups deserve a private space that feels personal and easy.</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100 text-center">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-graduation-cap"></i></div>
                        <h5 class="fw-bold">College friends</h5>
                        <p class="text-muted">Keep memories and plans together through every semester.</p>
                        <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                            class="persona-image mt-3"
                            alt="College friends hanging out together"
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100 text-center">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-house-user"></i></div>
                        <h5 class="fw-bold">Roommates</h5>
                        <p class="text-muted">Plan chores, bills, and hangouts without messy threads.</p>
                        <img
                            src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200&auto=format&fit=crop"
                            class="persona-image mt-3"
                            alt="Roommates in a shared apartment"
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100 text-center">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-suitcase-rolling"></i></div>
                        <h5 class="fw-bold">Trips</h5>
                        <p class="text-muted">Itineraries, polls, and photos in one private place.</p>
                        <img
                            src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop"
                            class="persona-image mt-3"
                            alt="Friends on a group trip outdoors"
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100 text-center">
                    <div class="card-body">
                        <div class="icon-pill mb-3"><i class="fa-solid fa-baby"></i></div>
                        <h5 class="fw-bold">Young families</h5>
                        <p class="text-muted">Share milestones without posting to the public.</p>
                        <img
                            src="https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=1200&auto=format&fit=crop"
                            class="persona-image mt-3"
                            alt="Family sharing moments together"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What early users are saying</h2>
            <p class="text-muted">Real people, real groups, real relief.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-4 rounded-4 card-shadow quote-card h-100">
                    <p class="fw-semibold">"We finally have one private place for our trip plans and photos."</p>
                    <p class="small text-muted mb-0">Leah, 24 • Friend trip group</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-4 rounded-4 card-shadow quote-card h-100">
                    <p class="fw-semibold">"It feels like a calm WhatsApp alternative for small groups."</p>
                    <p class="small text-muted mb-0">Marco, 27 • Roommates</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-4 rounded-4 card-shadow quote-card h-100">
                    <p class="fw-semibold">"Our family photos are finally in order and easy to find."</p>
                    <p class="small text-muted mb-0">Priya, 32 • Family group</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-4 rounded-4 card-shadow quote-card h-100">
                    <p class="fw-semibold">"Better than Instagram for real friends. No pressure at all."</p>
                    <p class="small text-muted mb-0">Alex, 22 • College friends</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently asked questions</h2>
            <p class="text-muted">Quick answers to the most common questions.</p>
        </div>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                        Is Circle really private?
                    </button>
                </h3>
                <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. Circle is a private social network built for invite-only groups. Your content is not public and not shown to strangers.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                        How is Circle different from WhatsApp group chats?
                    </button>
                </h3>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Circle keeps everything organized. Posts stay in a chronological feed, photos build a timeline, and plans live in an event hub instead of getting buried in chat threads.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                        Does Circle have an algorithm?
                    </button>
                </h3>
                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">No. Circle is a no algorithm social media for close friends. You see posts in order, every time.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                        Can I save memories forever?
                    </button>
                </h3>
                <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. Circle is built for long-term memory. Your timeline keeps photos, posts, and highlights together in one place.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                        Is Circle a private social app for friends and families?
                    </button>
                </h3>
                <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. Circle is designed for real-life groups like families, roommates, college friends, and trip squads.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                        Is Circle a WhatsApp alternative for small groups?
                    </button>
                </h3>
                <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqSix" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. It keeps chats, plans, and photos structured, which makes it easier than long message threads.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                        Can Circle help me organize group trips?
                    </button>
                </h3>
                <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqSeven" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. The event hub, polls, and shared notes make Circle a simple organize group trips app.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight">
                        Is Circle better than Instagram for real friends?
                    </button>
                </h3>
                <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqEight" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Circle is private and pressure-free, so you can share naturally without followers or public likes.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseNine" aria-expanded="false" aria-controls="faqCollapseNine">
                        Is Circle a private alternative to Facebook groups?
                    </button>
                </h3>
                <div id="faqCollapseNine" class="accordion-collapse collapse" aria-labelledby="faqNine" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. Circle keeps groups small and private, without public feeds or ads.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTen" aria-expanded="false" aria-controls="faqCollapseTen">
                        Do you sell my data?
                    </button>
                </h3>
                <div id="faqCollapseTen" class="accordion-collapse collapse" aria-labelledby="faqTen" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">No. Circle does not sell personal data. Privacy is the core of the product.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="cta-banner rounded-4 p-5 text-center">
            <h2 class="fw-bold">Ready to keep your real life close?</h2>
            <p class="mb-4">Create your private Circle today and bring your people into one calm, trusted home.</p>
            <a class="btn btn-light btn-lg d-inline-flex align-items-center gap-2" href="#">
                <i class="fa-brands fa-google-play"></i>
                Install from Play Store
            </a>
            <div class="mt-3 small">Privacy promise: no ads, no public profiles, no data selling.</div>
            <div class="mt-2 small">
                Learn more: <a href="<?php echo $base_path; ?>/about" class="text-white text-decoration-underline">About</a> •
                <a href="<?php echo $base_path; ?>/product" class="text-white text-decoration-underline">Features</a> •
                <a href="<?php echo $base_path; ?>/privacy" class="text-white text-decoration-underline">Privacy</a>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is Circle really private?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Circle is a private social network built for invite-only groups. Your content is not public and not shown to strangers."
      }
    },
    {
      "@type": "Question",
      "name": "How is Circle different from WhatsApp group chats?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Circle keeps everything organized. Posts stay in a chronological feed, photos build a timeline, and plans live in an event hub instead of getting buried in chat threads."
      }
    },
    {
      "@type": "Question",
      "name": "Does Circle have an algorithm?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Circle is a no algorithm social media for close friends. You see posts in order, every time."
      }
    },
    {
      "@type": "Question",
      "name": "Can I save memories forever?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Circle is built for long-term memory. Your timeline keeps photos, posts, and highlights together in one place."
      }
    },
    {
      "@type": "Question",
      "name": "Is Circle a private social app for friends and families?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Circle is designed for real-life groups like families, roommates, college friends, and trip squads."
      }
    },
    {
      "@type": "Question",
      "name": "Is Circle a WhatsApp alternative for small groups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. It keeps chats, plans, and photos structured, which makes it easier than long message threads."
      }
    },
    {
      "@type": "Question",
      "name": "Can Circle help me organize group trips?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The event hub, polls, and shared notes make Circle a simple organize group trips app."
      }
    },
    {
      "@type": "Question",
      "name": "Is Circle better than Instagram for real friends?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Circle is private and pressure-free, so you can share naturally without followers or public likes."
      }
    },
    {
      "@type": "Question",
      "name": "Is Circle a private alternative to Facebook groups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Circle keeps groups small and private, without public feeds or ads."
      }
    },
    {
      "@type": "Question",
      "name": "Do you sell my data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Circle does not sell personal data. Privacy is the core of the product."
      }
    }
  ]
}
</script><?php include __DIR__ . '/footer.php'; ?>





