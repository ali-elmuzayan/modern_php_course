<h1>Admin: Manage pages</h1>
<table style="min-width: 100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page): ?>
        <tr>
            <td><?= html($page->id) ?></td>
            <td><?= html($page->title) ?></td>
            <td>
                <form action="index.php?<?= http_build_query(['route' => 'admin/pages/delete', 'id' => $page->id]) ?>"
                      method="post">
                    <input class="btn-link" type="submit" value="Delete">
                </form>
                <a href="index.php?<?= http_build_query(['route' => 'admin/pages/edit',
                    'id' => $page->id]); ?>" class="btn-link">Edit</a>
            </td>

        </tr>
    <?php endforeach ?>

    </tbody>
</table>


<a href="index.php?route=admin/pages/create">Add page</a>