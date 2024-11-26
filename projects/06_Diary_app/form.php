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
<main>
    <div class="container">
        <h1 class="main-heading">New Entry</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="date" class="form-label">Date:</label>
                <input type="date" id="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-submit">

                <button type="submit" class="btn">
                    <!--       Save Icon         -->
                    <svg class="btn-icon" viewBox="0 0 34.7163912799 33.4350009649">
                        <g style="fill: none; stroke: #f3f4f5; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;">
                            <polygon class="uuid-227ecc73-5fef-4efb-920c-3f9dd27ef3fc"
                                     points="20.6844359446 32.4350009649 33.7163912799 1 1 10.3610302393 15.1899978903 17.5208901631 20.6844359446 32.4350009649"/>
                            <line class="uuid-227ecc73-5fef-4efb-920c-3f9dd27ef3fc" x1="33.7163912799" y1="1"
                                  x2="15.1899978903" y2="17.5208901631"/>
                        </g>
                    </svg>
                    <!--        End Save Icon        -->
                    Save!
                </button>
            </div>
        </form>
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