<?php
// Get the current page's last segment
$currentPage = basename($_SERVER['REQUEST_URI']);

// Define an array of all service pages
$servicePages = [
    'web-development',
    'mobile-app-development',
    'ecommerce-solution',
    'seo-and-marketing',
    'website-maintenance',
    'branding-and-design',
    'automation'
];

// Check if the current page is a service page
$isServiceActive = in_array($currentPage, $servicePages);
?>

<header>
    <nav class="navbar navbar-expand-lg container pt-lg-4 pt-3 pb-lg-4 pb-3" data-aos="fade-down">
        <div class="container-fluid">
            <a class="nav-logo p-0" href="home">
                <figure><img alt="Get The Website Logo" src="assets/images/logo.png"></figure>
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
                                    <li><a class="dropdown-item <?= ($currentPage == 'web-development') ? 'active' : '' ?>" href="web-development">Web Development</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'mobile-app-development') ? 'active' : '' ?>" href="mobile-app-development">Mobile App Development</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'ecommerce-solution') ? 'active' : '' ?>" href="ecommerce-solution">E-commerce Solutions</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'seo-and-marketing') ? 'active' : '' ?>" href="seo-and-marketing">SEO & Marketing</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'website-maintenance') ? 'active' : '' ?>" href="website-maintenance">Website Maintenance</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'branding-and-design') ? 'active' : '' ?>" href="branding-and-design">Branding & Design</a></li>
                                    <li><a class="dropdown-item <?= ($currentPage == 'automation') ? 'active' : '' ?>" href="automation">Automation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'portfolio') ? 'active' : '' ?>" href="portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($currentPage == 'blog') ? 'active' : '' ?>" href="blog">Blog</a>
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
                    <div class="Search_Icon">
                        <input class="Search_checkbox" name="SearchCheckBox" type="radio">
                        <div class="Search_box">
                            <div class="iconContainer">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input class="search_input" name="SearchInputArea" placeholder="Search" type="text">
                        </div>
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
                        <img alt="Logo" src="assets/images/logo.png">
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
                        <li><a href="web-development">Web Development</a></li>
                        <li><a href="mobile-app-development">Mobile App Development</a></li>
                        <li><a href="ecommerce-solution">E-commerce Solutions</a></li>
                        <li><a href="seo-and-marketing">SEO & Marketing</a></li>
                        <li><a href="website-maintenance">Website Maintenance</a></li>
                        <li><a href="branding-and-design">Branding & Design</a></li>
                        <li><a href="automation">Automation</a></li>
                    </ul>
                </li>

                <li class="nav-item <?= ($currentPage == 'portfolio') ? 'active' : '' ?>">
                    <a href="portfolio">Portfolio</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'blog') ? 'active' : '' ?>">
                    <a href="blog">Blog</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'faq') ? 'active' : '' ?>">
                    <a href="faq">FAQ</a>
                </li>
                <li class="nav-item <?= ($currentPage == 'contact') ? 'active' : '' ?>">
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </aside>
</header>

