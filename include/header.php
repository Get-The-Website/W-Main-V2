<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg container pt-lg-4 pt-3 pb-lg-4 pb-3" data-aos="fade-down">
        <div class="container-fluid">
            <!-- Company Logo -->
            <a class="nav-logo p-0" href="home">
                <figure><img alt="Get The Website Logo" src="assets/images/logo.png"></figure>
            </a>

            <!-- Navigation Toggle Button -->
            <div class="d-flex gap-3 flex-row-reverse">
                <button class="open-aside" onclick="open_aside()" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <!-- Main Navigation Menu -->
                <div class="d-flex justify-content-end gap-xl-4 gap-lg-3">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex justify-content-center align-items-center gap-lg-3 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About</a>
                            </li>

                            <!-- Services Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <li><a class="dropdown-item" href="web-development">Web Development</a></li>
                                    <li><a class="dropdown-item" href="mobile-app-development">Mobile App Development</a></li>
                                    <li><a class="dropdown-item" href="ecommerce-solution">E-commerce Solutions</a></li>
                                    <li><a class="dropdown-item" href="seo-and-marketing">SEO & Marketing</a></li>
                                    <li><a class="dropdown-item" href="website-maintenance">Website Maintenance</a></li>
                                    <li><a class="dropdown-item" href="branding-and-design">Branding & Design</a></li>
                                    <li><a class="dropdown-item" href="automation">Automation</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Call-to-Action and Search -->
                    <div>
                        <a class="hover1 down-btn" href="contact" id="getStartedAnchor">Get Started</a>
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
                    <a href="index.html">
                        <img alt="Logo" src="assets/images/logo.svg">
                    </a>
                </figure>
                <button class="fa-solid fa-xmark" onclick="close_aside()"></button>
            </div>
            <ul class="pt-4">
                <li class="nav-item active">
                    <a aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html">About</a>
                </li>

                <!-- Services (Expandable for Sidebar) -->
                <li class="nav-item">
                    <div class="d-flex align-items-center justify-content-between" id="slid-btn">
                        <button class="a-slid page-btn">Services</button>
                        <i class="fa-solid fa-caret-down pe-2"></i>
                    </div>
                    <ul id="slid-drop">
                        <li><a href="services-web-development.html">Web Development</a></li>
                        <li><a href="services-mobile-development.html">Mobile App Development</a></li>
                        <li><a href="services-ecommerce.html">E-commerce Solutions</a></li>
                        <li><a href="services-seo.html">SEO & Marketing</a></li>
                        <li><a href="services-maintenance.html">Website Maintenance</a></li>
                        <li><a href="services-ux-design.html">Branding & Design</a></li>
                        <li><a href="services-ux-design.html">Automation</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="portfolio.html">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </aside>
</header>
