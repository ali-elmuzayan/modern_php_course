<ul>


    <?php foreach ($names as $name): ?>
        <li><a href="name.php?<?= http_build_query(['name' => $name]) ?>"><?= $name ?></a></li>
    <?php endforeach; ?>
</ul>

<?php
$countOfPages = ceil($pagination['count'] / $pagination['perPage']);
for ($i = 1; $i <= $countOfPages; $i++) : ?>
<a class="button" href="char.php?<?= http_build_query(['char'=> $char, 'page' => $i]) ?>"
    ><?php
    if ($i === $pagination['page']) {
        echo "<strong><u>$i</u></strong>";
    }else {
        echo html($i);
    } ?></a>
 <?php endfor;  ?>
