<?php
include_once  __DIR__ . '/inc/bootstrap.php';
if (isset($_POST['title'])) {

    $title = (string)($_POST['title'] ?? '');
    $date = (string) ($_POST['date']);

    $content = (string)($_POST['content'] ?? '');

    // check the date if it empty set it to the current date;
    if (empty($date)) {
        $date = date('Y-m-d');
    }

    $stmt = $db->prepare('INSERT INTO `entries` (`title`, `date`, `content`) VALUES (:title, :date, :content);');
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':content', $content);
    $stmt->execute();
    header('Location: index.php');
    exit;
}
?>
<?php include_once __DIR__ . '/views/header.inc.php'?>
<!-- Start Nav -->
<?php include_once __DIR__ . '/views/nav.inc.php' ?>
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
                <textarea name="content" id="message" cols="30" rows="10" class="form-control"></textarea>
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
<?php include_once __DIR__ . '/views/footer.inc.php'; ?>