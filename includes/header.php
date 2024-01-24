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
    </style>

    <section class="bg-danger topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- <h1 class="d-none">Stock price ticker</h1> -->
                    <ul class="price-ticker list-inline  mb-0">
                        <li class="list-inline-item">SBI<span class="badge bg-up ms-1">8.60%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">HDFC<span class="badge bg-down ms-1">8.50%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">Kotak<span class="badge bg-down ms-1">8.65%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">IDFC<span class="badge bg-up ms-1">8.75%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">BOB<span class="badge bg-up ms-1">8.75%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">ICICI<span class="badge bg-up ms-1">8.65%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">AXIS<span class="badge bg-down ms-1">8.60%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">IIFL<span class="badge bg-up ms-1">9.25%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">IndusInd<span class="badge bg-up ms-1">8.65%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">Cent Bank<span class="badge bg-up ms-1">8.85%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">BOI<span class="badge bg-up ms-1">8.75%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">Bajaj<span class="badge bg-up ms-1">8.55%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">IndiaBulls<span class="badge bg-up ms-1">9.25%<i class="fas fa-circle"></i></span></li>
                        <li class="list-inline-item">Aditya Birla<span class="badge bg-up ms-1">8.25%<i class="fas fa-circle"></i></span></li>
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
                        <img class="main" src="img\logo\Screenshot 2024-01-18 143506.png" srcset="img\logo\Screenshot 2024-01-18 143506.png" alt="logo">
                        <img class="sticky" src="img\logo\Logo-3.png" srcset="img\logo\Logo-3.png" alt="logo"> </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a href="index.php" class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>


                            </li>

                            <li class="nav-item dropdown submenu ">
                                <a href="about.php" class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>


                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="index.php#test-1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Testimonials
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item"><a class="nav-link" href="home_loan.php">Home Loan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="buisness_loan.php">Buisness Loan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="car_loan.php">Car Loan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dod.php">DOD</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cgtsme.php">CGTSME</a></li>
                                    <li class="nav-item"><a class="nav-link" href="property_loan.php">Loan Per Property</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="contact.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact Us
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
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

    <style>
        .sidebar-fixed {
            position: fixed;
            z-index: 9999;
            right: -87px;
            top: calc(50% - 120px);
            transition: all linear 0.3s;
        }

        .sidebar-fixed:hover {
            position: fixed;
            z-index: 9999;
            right: 0px;
            top: calc(50% - 120px);
        }


        .side-social-icons {
            font-size: 16px;
            color: white;
            /* padding: ; */
        }

        .side-social-icons a {
            /* font-size: 16px; */
            color: white;
            /* padding: ; */
        }


        .side-social-icons i {
            padding: 10px 10px;
            font-size: 20px;

        }

        .side-social-icons .facebook,
        .side-social-icons .twitter,
        .side-social-icons .linkedin,
        .side-social-icons .whatsapp,
        .side-social-icons .youtube,
        .side-social-icons .instagram {
            padding: 0px 10px 0px 0px;
        }

        .side-social-icons .facebook {
            background-color: #3b5998;
        }

        .side-social-icons .twitter {
            background-color: rgb(0, 0, 0);
        }

        .side-social-icons .linkedin {
            background-color: #0077b5;
        }

        .side-social-icons .whatsapp {
            background-color: #25d366;
        }

        .side-social-icons .youtube {
            background-color: #CD201F;
        }

        .side-social-icons .instagram {
            background-color: #fb17c3;
        }
    </style>
    <div id="social-sidebar" class="sidebar-fixed">
        <aside class="sidebar-content">
            <div class="side-social-icons">
                <div href="#" class="facebook">
                    <a href=""><i class="fab fa-facebook-square"></i>Facebook</a>
                </div>
                <!-- <div href="#" class="twitter">
                    <a href=""><i class="fa-brands fa-x-twitter"></i>Twitter</a>
                </div> -->
                <div href="#" class="linkedin">
                    <a href=""><i class="fab fa-linkedin"></i>LinkedIn</a>
                </div>
                <div href="#" class="whatsapp">
                    <a href="https://api.whatsapp.com/send/?phone=7666456868&text=hijijij&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i>WhatsApp</a>
                </div>
                <div href="#" class="instagram">
                    <a href=""><i class="fab fa-instagram"></i>Instagram</a>
                </div>
                <div href="#" class="youtube">
                    <a href=""><i class="fab fa-youtube"></i>YouTube</a>
                </div>
            </div>
        </aside>
    </div>




    <!-- Add this script to your HTML file -->
    <!-- Add this script to your HTML file -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceTicker = document.querySelector('.price-ticker');
            const tickerItems = document.querySelectorAll('.price-ticker li');

            // Clone the list items to create an infinite loop
            const clonedItems = [...tickerItems].map(item => item.cloneNode(true));

            // Append cloned items to the ticker
            clonedItems.forEach(item => priceTicker.appendChild(item));

            // Set the width of the ticker to accommodate cloned items
            const tickerWidth = tickerItems[0].offsetWidth;
            priceTicker.style.width = `${tickerWidth * (tickerItems.length + clonedItems.length)}px`;

            // Scroll animation
            let scrollValue = 0;

            function scrollTicker() {
                scrollValue += 1;

                // Reset scroll to the beginning when it reaches the total width
                if (scrollValue >= tickerWidth * tickerItems.length) {
                    scrollValue = 0;
                }

                priceTicker.style.transform = `translateX(-${scrollValue}px)`;
                requestAnimationFrame(scrollTicker);
            }
            requestAnimationFrame(scrollTicker);
        });
    </script>



    <!-- Header end-->