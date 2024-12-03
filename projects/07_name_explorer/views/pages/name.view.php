<h2>Statistics for the name: <?= html($name) ?></h2>
<?php if (!empty($entries)) : ?>
    <table>
        <thead>
        <tr>
            <th>Year</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($entries as $name): ?>
            <tr>
                <td><?= html($name['year']) ?></td>
                <td><?= html($name['count']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h5 style="color:darkred;">This is not a valid name </h5>
<?php endif ?>