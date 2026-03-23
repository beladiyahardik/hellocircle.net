<?php
$page_title = "Privacy Policy | Circle Private Social Network";
$page_description = "Circle is built to protect your closest relationships. Learn how we collect, use, and protect your data with a privacy-first approach.";
$page_canonical = "https://hellocircle.net/privacy";
$page_og_image = "https://hellocircle.net/assets/og-circle-placeholder.jpg";
include __DIR__ . '/header.php';
?>

<section class="hero-gradient hero-glow section-padding">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <p class="tagline mb-2">Circle – The private social home for your real life.</p>
                <h1 class="display-5 fw-bold">Your Privacy Is Sacred to Us</h1>
                <p class="lead text-muted mt-3">Circle was built from day one to protect your closest relationships  -  not exploit them. We believe your memories should never become someone else’s business.</p>
            </div>
            <div class="col-lg-5">
                <div class="bg-white rounded-4 p-4 card-shadow">
                    <h5 class="fw-bold"><i class="fa-solid fa-shield-heart text-primary me-2"></i>Trust badges</h5>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge badge-soft px-3 py-2"><i class="fa-solid fa-lock me-2"></i>No Ads</span>
                        <span class="badge badge-soft px-3 py-2"><i class="fa-solid fa-eye-slash me-2"></i>No Data Selling</span>
                        <span class="badge badge-soft px-3 py-2"><i class="fa-solid fa-user-lock me-2"></i>Invite-Only</span>
                        <span class="badge badge-soft px-3 py-2"><i class="fa-solid fa-shield-halved me-2"></i>End-to-End Encrypted (coming)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="bg-light rounded-4 p-4 p-lg-5">
            <h2 class="fw-bold">Our Privacy Promise</h2>
            <p class="lead text-muted">We will never sell your data, show you ads, train AI on your memories, or make your private life public. Your Circle stays yours.</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="fw-bold mb-4">How Circle Handles Your Data</h2>
        <div class="accordion" id="privacyAccordion">
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacyOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseOne" aria-expanded="true" aria-controls="privacyCollapseOne">
                        What data we collect
                    </button>
                </h3>
                <div id="privacyCollapseOne" class="accordion-collapse collapse show" aria-labelledby="privacyOne" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>Basic account info such as your name and email address.</li>
                            <li>Content you choose to share in your Circles (posts, photos, comments).</li>
                            <li>Limited device and usage data to help keep the app secure and reliable.</li>
                        </ul>
                        <p class="mb-0">We do not collect data we don’t need, and we do not track you across other apps or websites.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacyTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseTwo" aria-expanded="false" aria-controls="privacyCollapseTwo">
                        How we use your data
                    </button>
                </h3>
                <div id="privacyCollapseTwo" class="accordion-collapse collapse" aria-labelledby="privacyTwo" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>To provide Circle’s core features (feeds, timelines, event planning).</li>
                            <li>To keep your account safe and prevent abuse.</li>
                            <li>To improve performance and fix bugs.</li>
                        </ul>
                        <p class="mb-0">We do not use your data to show you ads or to build ad profiles.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacyThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseThree" aria-expanded="false" aria-controls="privacyCollapseThree">
                        Storage and security
                    </button>
                </h3>
                <div id="privacyCollapseThree" class="accordion-collapse collapse" aria-labelledby="privacyThree" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>Data is encrypted in transit and at rest.</li>
                            <li>Access is limited to authorized employees who need it to support the service.</li>
                            <li>We continuously monitor and improve our security practices.</li>
                        </ul>
                        <p class="mb-0">We are actively working toward full end-to-end encryption for all Circle content.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacyFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseFour" aria-expanded="false" aria-controls="privacyCollapseFour">
                        Sharing and third parties
                    </button>
                </h3>
                <div id="privacyCollapseFour" class="accordion-collapse collapse" aria-labelledby="privacyFour" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>We do not sell or rent your data.</li>
                            <li>We only share data if required by law or to protect user safety.</li>
                            <li>Trusted service providers may process data strictly on our behalf (e.g., hosting).</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacyFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseFive" aria-expanded="false" aria-controls="privacyCollapseFive">
                        Deletion and account control
                    </button>
                </h3>
                <div id="privacyCollapseFive" class="accordion-collapse collapse" aria-labelledby="privacyFive" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>You can delete posts, photos, and Circles at any time.</li>
                            <li>You can request a full account deletion, and we will remove your data.</li>
                            <li>We honor deletion requests within a reasonable time frame.</li>
                        </ul>
                        <p class="mb-0">If you want a data export before deletion, we will support that too.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacySix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseSix" aria-expanded="false" aria-controls="privacyCollapseSix">
                        Minors and age restrictions
                    </button>
                </h3>
                <div id="privacyCollapseSix" class="accordion-collapse collapse" aria-labelledby="privacySix" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <p>Circle is intended for users who meet the minimum age requirement in their region. We do not knowingly collect data from children under the age of 13.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="privacySeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseSeven" aria-expanded="false" aria-controls="privacyCollapseSeven">
                        International data transfers
                    </button>
                </h3>
                <div id="privacyCollapseSeven" class="accordion-collapse collapse" aria-labelledby="privacySeven" data-bs-parent="#privacyAccordion">
                    <div class="accordion-body">
                        <p>We may process data in regions where our infrastructure providers operate. We apply strong security practices and contractual safeguards wherever your data lives.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <h2 class="fw-bold mb-4">Feature-Specific Privacy</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-user-lock text-primary me-2"></i>Invite-only Circles</h6>
                        <p class="text-muted">Circles are private by default. There is no public discoverability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-list-ol text-primary me-2"></i>Private feeds</h6>
                        <p class="text-muted">Only members of a Circle can view its feed and timeline.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-photo-film text-primary me-2"></i>Memory timeline</h6>
                        <p class="text-muted">Timeline content stays inside the Circle and is never public.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-wand-magic-sparkles text-primary me-2"></i>No algorithm</h6>
                        <p class="text-muted">We do not profile behavior or rank posts for engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="fw-bold mb-4">Your Rights & Controls</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-scale-balanced text-primary me-2"></i>GDPR & CCPA</h6>
                        <p class="text-muted">We support access, correction, portability, and deletion requests under GDPR and CCPA. You can request a copy of your data or delete it at any time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-shadow h-100">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fa-solid fa-user-gear text-primary me-2"></i>Controls in your hands</h6>
                        <p class="text-muted">Manage invites, remove members, delete content, or close a Circle whenever you want. Your group, your rules.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted mt-4">To make a privacy request, contact us at <a href="mailto:privacy@circleapp.com">privacy@circleapp.com</a>.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <h2 class="fw-bold mb-4">Changes to This Policy</h2>
        <p class="text-muted">If we make material changes, we will notify you in-app or by email. The latest version will always be available on this page with an updated effective date.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="cta-banner rounded-4 p-5 text-center">
            <h2 class="fw-bold">Your Memories. Your Rules.</h2>
            <p class="mb-4">Circle is built to protect the people and moments that matter most. If you ever have questions, we are here to help.</p>
            <a class="btn btn-light btn-lg" href="<?php echo $base_path; ?>/">Back to Home</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
