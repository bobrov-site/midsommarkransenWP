<?php
get_header();
?>
<div class="it-services">
    <div class="hero-screen">
        <div class="wrapper">
            <header class="d-flex flex-row">
                <div class="logo">
                    <a class="logo-desktop" href="<?php echo home_url() ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/dist/svg/logo.svg' ?>" alt="logo">
                    </a>
                    <a class="logo-mobile" href="<?php echo home_url() ?>">
                        <img src="img/logo-mobile.svg" alt="logo-mobile">
                    </a>
                </div>
                <nav class="nav">
                    <ul class="nav-group-list">
                        <li class="nav-item active">
                            <a href="index.html" class="nav-link">It services</a>
                        </li>
                        <li class="nav-item">
                            <a href="consulting-eng.html" class="nav-link">Consulting</a>
                        </li>
                    </ul>
                </nav>
                <div class="lang">
                    <ul id="lang-switch" class="lang-group-list">
                        <li class="lang-item">
                            <a class="lang-link" href="index.html">
                                <img class="lang-icon-desktop" src="img/lang/eng.svg" alt="eng">
                                <img class="lang-icon-mobile" src="img/lang/eng-mobile.png" alt="eng-mobile">
                            </a>
                        </li>
                        <li class="lang-item">
                            <a class="lang-link" href="it-services-sweden.html">
                                <img class="lang-icon-desktop" src="img/lang/sweden.svg" alt="sweden">
                                <img class="lang-icon-mobile" src="img/lang/sweden-mobile.png" alt="sweden-mobile">
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
        </div>
        <div class="hero-screen-label">
            <img alt="label-hero" src="img/label.svg">
        </div>
        <div class="wrapper">
            <div class="hero-screen-content">
                <h1 class="hero-screen-title">
                    IT Services
                </h1>
                <p class="hero-screen-description">
                    When your company want to focus on business instead of IT!
                </p>
            </div>
        </div>
        <div class="hero-screen-provide">
            WE provide IT services for small and medium size companies on the Swedish market. Our output is focused on cost-efficient delivery and simplicity, no scope creep or upselling. The bulk of    the work is performed by our trusted outsourcing partners.
        </div>
    </div>
    <main>
        <div class="wrapper position-relative">
            <div class="bg">
                <div class="leaves"></div>
                <div class="radial-circle"></div>
            </div>
            <div class="info services-offerings">
                <h2 class="info-title">
                    Services offerings:
                </h2>
                <ul class="info-group-list">
                    <li class="info-item">
                        <span>Registering domain names</span>
                    </li>
                    <li class="info-item">
                        <span>Web design and wireframing (logo/identity design if needed)</span>
                    </li>
                    <li class="info-item">
                    <span>
                        Creating WordPress websites
                    </span>
                    </li>
                    <li class="info-item">
                    <span>
                        Secure hosting and website maintenance
                    </span>
                    </li>
                    <li class="info-item">
                    <span>
                        SEO and online marketing (Google Maps, AdWords, et cetera)
                    </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapper footer">
            <div class="info reference-projects">
                <h2 class="info-title">
                    Reference projects:
                </h2>
                <ul class="info-group-list">
                    <li class="info-item">
                        <span>Corporate identity re-branding for company X <a class="info-item-link" href="#">(visit website)</a></span>
                    </li>
                    <li class="info-item">
                        <span>Domain, website and hosting for company Y <a class="info-item-link" href="#">(visit website)</a></span>
                    </li>
                </ul>
            </div>
            <div class="info github">
                <h2 class="info-title">
                    GitHub
                </h2>
                <p class="info-text">
                    Please find us on GitHub for various open-source projects,
                </p>
                <a href="https://github.com/mkdevops-se/" class="info-text info-item-link">
                    https://github.com/mkdevops-se/
                </a>
            </div>
            <div class="info company-information">
                <h2 class="info-title">
                    Company information:
                </h2>
                <ul class="info-group-list">
                    <li class="info-item">
                        <span>Visiting address: Herserudsvägen 18, Lidingö</span>
                    </li>
                    <li class="info-item">
                        <span>Organisation number: 559114-7532</span>
                    </li>
                    <li class="info-item">
                        <span>F-tax and VAT: Yes \</span>
                    </li>
                </ul>
                <p class="info-text">
                    Request a quote at <a class="info-item-link mail" href="mailto:sales@mkdevops.se">sales@mkdevops.se</a> or <a class="info-item-link phone" href="tel:+460730567567">+46 (0) 730-567 567</a>.
                </p>
            </div>
            <div class="logo-bg"></div>
        </div>
    </main>
</div>
