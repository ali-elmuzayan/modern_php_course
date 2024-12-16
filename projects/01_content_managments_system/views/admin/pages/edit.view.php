<h1>Create a new page</h1>


<form action="index.php?<?= http_build_query([
    'route' => 'admin/pages/update',
    'id' => $page->id,
]) ?>" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?= $page->title ?? old('title') ?>">

    <label for="content">Content</label>
    <textarea name="content" id="content"><?= $page->content ?? old('content') ?></textarea>
    <input type="submit" value="Add Page">
</form>