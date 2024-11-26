<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Normalizing css file -->
    <link rel="stylesheet" href="./styles/normalize.css">
    <!--     Main CSS File -->
    <link rel="stylesheet" href="./styles/styles.css">
    <title>PHP Diary</title>
</head>
<body>
<!-- Start Nav -->
<nav class="nav">
    <div class="container">
        <div class="nav-layout">
            <a href="index.php" class="nav-brand">
                <svg class="nav-brand-img"
                     viewBox="0 0 60.7863869853 60.7863869853">

                    <path style="fill: currentColor" class="uuid-f1de6254-0820-4376-87ff-f875521b7fef"
                          d="m45.589790239,30.3931934927c8.3928407749,0,15.1965967463-6.8037559715,15.1965967463-15.1965967463S53.9826310139,0,45.589790239,0H15.196554313C6.8037135382,0,0,6.8037559715,0,15.1965967463v30.3931934927c0,8.3928407749,6.8037135382,15.1965967463,15.196554313,15.1965967463h30.393235926c8.3928407749,0,15.1965967463-6.8037559715,15.1965967463-15.1965967463s-6.8037559715-15.1965967463-15.1965967463-15.1965967463Z"/>
                </svg>
                My Journal
            </a>
            <a href="form.php" class="btn">
                <!--     Start plus icon (SVG)  -->
                <svg class="btn-icon" viewBox="0 0 44.4901230052 44.4901230053">
                    <g style="fill: none;
                        stroke: currentColor;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 2px;">
                        <circle class="uuid-a2b16520-dd4e-42aa-861e-048bcb73792f" cx="22.2450615026" cy="22.2450615026"
                                r="21.2450615026"/>
                        <line class="uuid-a2b16520-dd4e-42aa-861e-048bcb73792f" x1="22.2450615026" y1="13.4699274037"
                              x2="22.2450615026" y2="31.0201956015"/>
                        <line class="uuid-a2b16520-dd4e-42aa-861e-048bcb73792f" x1="31.0201956015" y1="22.2450658041"
                              x2="13.4699274037" y2="22.2450572011"/>
                    </g>
                </svg>
                <!--    End plus icon (SVG)    -->
                New Entry
            </a>

        </div>

    </div>
</nav>
<!-- End Nav-->

<!-- Start the main content -->
<main class="main">
    <div class="container">
        <h1 class="main-heading">Entries</h1>
        <div class="card">
            <div class="card-img-box">
                <img src="./images/pexels-canva-studio-3153199.jpg" alt="card image" class="card-img">
            </div>
            <div class="card-desc-box">
                <span class="card-desc-time">Week 1</span>
                <h2 class="card-heading">PHP is amazing!</h2>
                <span class="card-line"></span>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet blanditiis commodi debitis
                    doloribus, eaque eos eum excepturi harum nihil nostrum odio perferendis praesentium saepe sit
                    tempora veniam veritatis vitae!
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-box">
                <img src="./images/pexels-kaushal-moradiya-2781195.jpg" alt="card image" class="card-img">
            </div>
            <div class="card-desc-box">
                <span class="card-desc-time">Week 1</span>
                <h2 class="card-heading">PHP is amazing!</h2>
                <span class="card-line"></span>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet blanditiis commodi debitis
                    doloribus, eaque eos eum excepturi harum nihil nostrum odio perferendis praesentium saepe sit
                    tempora veniam veritatis vitae!
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-box">
                <img src="./images/pexels-tranmautritam-68761.jpg" alt="card image" class="card-img">
            </div>
            <div class="card-desc-box">
                <span class="card-desc-time">Week 1</span>
                <h2 class="card-heading">PHP is amazing!</h2>
                <span class="card-line"></span>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet blanditiis commodi debitis
                    doloribus, eaque eos eum excepturi harum nihil nostrum odio perferendis praesentium saepe sit
                    tempora veniam veritatis vitae!
                </p>
            </div>
        </div>
        <!-- start pagination-->
        <ul class="pagination">
            <li class="pagination-li"><a href="#" class="pagination-link">&#x2190;</a></li>
            <li class="pagination-li"><a href="#" class="pagination-link">1</a></li>
            <li class="pagination-li"><a href="#" class="pagination-link">2</a></li>
            <li class="pagination-li pagination-li-active"><a href="#" class="pagination-link">3</a></li>
            <li class="pagination-li"><a href="#" class="pagination-link">&#x2192;</a></li>
        </ul>
        <!-- End pagination-->
    </div>
</main>
<!--  End Main content -->

<!-- Start Footer-->
<footer class="footer">
    <div class="container">
        <h3 class="footer-heading">My dairy project using PHP technology</h3>
        <p class="footer-text">This PHP diary project <span
                    class="copyright-text">was created by Eng/Ali Ahmed </span> using only (PHP & Mysql) for backend
            and (HTML & CSS) for the
            front-end </p>

    </div>
</footer>
<!-- End Footer-->

</body>
</html>