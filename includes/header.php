    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img\logo\Logo-3.png" alt="">
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>

    <!-- style for loop -->
    <style>
        .price-ticker {
            white-space: nowrap;
            overflow: hidden;

        }

        .price-ticker li {
            display: inline-block;
            margin-right: 20px;
            /* Adjust as needed */
            animation: scrollTicker 5s linear infinite;
        }

        @keyframes scrollTicker {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>

    <section class="bg-danger topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="d-none">Stock price ticker</h1>
                    <ul class="price-ticker list-inline overflow-hidden mb-0">
                        <li class="list-inline-item">TSLA<span class="badge bg-up ms-1">160.27  (+10.97%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">NVDA<span class="badge bg-down ms-1">198.02  (-0.48%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">AMZN<span class="badge bg-down ms-1">99.22  (-0.61%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">MSFT<span class="badge bg-up ms-1">248.00  (+3.07%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">AAPL<span class="badge bg-up ms-1">143.96  (+1.48%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">MCD<span class="badge bg-up ms-1">274.72  (+0.64%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">INTC<span class="badge bg-down ms-1">30.09  (-0.31%)<i
                                    class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">XOM<span class="badge bg-up ms-1">117.76  (+4.02%)<i
                                    class="fas fa-circle"></i></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Header -->
    <header class="header">
        <div class="header-menu header-menu-4" id="sticky">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="index.php">
                        <img class="main" src="img\logo\Screenshot 2024-01-18 143506.png"
                            srcset="img\logo\Screenshot 2024-01-18 143506.png" alt="logo">
                        <img class="sticky" src="img\logo\Logo-3.png" srcset="img\logo\Logo-3.png" alt="logo"> </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                        <ul class="navbar-nav menu ms-auto">
                            <li class="nav-item dropdown submenu ">
                                <a href="#" class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Home</a>


                            </li>

                            <li class="nav-item dropdown submenu ">
                                <a href="#" class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">About</a>


                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Testimonials
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                            </li>
                            <!-- <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="career.php" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Job Pages
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
                                    <li class="nav-item"><a class="nav-link" href="job-post.php">Jobs</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="job-application.php">Job
                                            Application</a>
                                    </li>
                                </ul>
                            </li> -->


                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <!-- <ul class="dropdown-menu ">
                                    <li class="nav-item"><a class="nav-link" href="card.php">Cards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="error.php">404 Error</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <!-- <ul class="dropdown-menu ">
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog Listing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-details.php">Blog Details</a>
                                    </li>
                                </ul> -->
                            </li>
                        </ul>
                        <a class="theme-btn theme-btn-rounded-2 theme-btn-alt" href="#" target="_blank">
                            Get Loan
                        </a>
                        <!-- 
                            
                         -->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header end-->
