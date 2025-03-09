<?php
// Get the current page's last segment
$currentPage = basename($_SERVER['REQUEST_URI']);

// Define an array of all service pages
$servicePages = [
    'custom-website-design',
    'ecommerce-solution',
    'seo-and-marketing',
    'website-maintenance',
    'website-redesign-updates',
    'cms-integration',
    'mobile-app-development',
    'automation',
    'server-setup'
];

// Check if the current page is a service page
$isServiceActive = in_array($currentPage, $servicePages);
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2DK5V9K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <nav class="navbar navbar-expand-lg container pt-lg-4 pt-3 pb-lg-4 pb-3" data-aos="fade-down">
        <div class="container-fluid">
            <a class="nav-logo p-0" href="home">
                <figure><img alt="Get The Website Logo" src="assets/images/gtw-logo-color.png"></figure>
            </a>
            <div class="d-flex gap-3 flex-row-reverse">
                <button class="open-aside" onclick="open_aside()" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="d-flex justify-content-end gap-xl-4 gap-lg-3">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex justify-content-center align-items-center gap-lg-3 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'home' || $currentPage == '') ? 'active' : '' ?>" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'about') ? 'active' : '' ?>" href="about">About</a>
                            </li>
                            <li class="dropdown">
                                <!-- Add 'active' if the current page is any service -->
                                <a class="nav-link dropdown-toggle <?= ($isServiceActive) ? 'active' : '' ?>" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <li><a class="dropdown-item <?= ($currentPage == 'custom-website-design') ? 'active' : '' ?>" href="custom-website-design">Custom Website Design</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'ecommerce-solution') ? 'active' : '' ?>" href="ecommerce-solution">E-commerce Solutions</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'seo-and-marketing') ? 'active' : '' ?>" href="seo-and-marketing">SEO & Marketing</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'website-maintenance') ? 'active' : '' ?>" href="website-maintenance">Website Maintenance</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'website-redesign-updates') ? 'active' : '' ?>" href="website-redesign-updates">Website Redesign</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'cms-integration') ? 'active' : '' ?>" href="cms-integration">CMS Integration</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'mobile-app-development') ? 'active' : '' ?>" href="mobile-app-development">Mobile App Development</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'automation') ? 'active' : '' ?>" href="automation">Automation</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'server-setup') ? 'active' : '' ?>" href="server-setup">Server Setup</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'portfolio') ? 'active' : '' ?>" href="portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'faq') ? 'active' : '' ?>" href="faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'contact') ? 'active' : '' ?>" href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a class="hover1 down-btn" href="https://demo.getthewebsite.net/" id="getStartedAnchor">View Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar (Mobile Navigation) -->
    <aside>
        <div class="right-sidbar" id="mySidenav">
            <div class="side-nav-logo d-flex justify-content-between align-items-center ps-2 pe-1 nav-logo">
                <figure class="navbar-brand">
                    <a href="home">
                        <img alt="Logo" src="assets/images/gtw-logo-color.png">
                    </a>
                </figure>
                <button class="fa-solid fa-xmark" onclick="close_aside()"></button>
            </div>
            <ul class="pt-4">
                <li class="nav-item <?= ($currentPage == 'home' || $currentPage == '') ? 'active' : '' ?>">
                    <a href="home">Home</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'about') ? 'active' : '' ?>">
                    <a href="about">About</a>
                </li>

                <!-- Services (Expandable for Sidebar) -->
                <li class="nav-item <?= ($isServiceActive) ? 'active' : '' ?>">
                    <div class="d-flex align-items-center justify-content-between" id="slid-btn">
                        <button class="a-slid page-btn">Services</button>
                        <i class="fa-solid fa-caret-down pe-2"></i>
                    </div>
                    <ul id="slid-drop">
                        <li><a href="custom-website-design">Custom Website Design</a></li>
                        <li><a href="ecommerce-solution">E-commerce Solutions</a></li>
                        <li><a href="seo-and-marketing">SEO & Marketing</a></li>
                        <li><a href="website-maintenance">Website Maintenance</a></li>
                        <li><a href="website-redesign-updates">Website Redesign</a></li>
                        <li><a href="cms-integration">CMS Integration</a></li>
                        <li><a href="mobile-app-development">Mobile App Development</a></li>
                        <li><a href="automation">Automation</a></li>
                        <li><a href="server-setup">Server Setup</a></li>
                    </ul>
                </li>

                <li class="nav-item <?= ($currentPage == 'portfolio') ? 'active' : '' ?>">
                    <a href="portfolio">Portfolio</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'faq') ? 'active' : '' ?>">
                    <a href="faq">FAQ</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'contact') ? 'active' : '' ?>">
                    <a href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="hover2" href="https://demo.getthewebsite.net/">View Demo</a>
                </li>
            </ul>
        </div>
    </aside>
</header>

