<h1>Create a new page</h1>


<form action="index.php?route=admin/pages/store" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?= old('title')?>">

    <label for="slug">Slug:</label>
    <input type="text" id="slug" name="slug" value="<?= old('slug') ?>">

    <label for="content">Content</label>
    <textarea name="content" id="content"><?= old('content') ?></textarea>
    <input type="submit" value="Add Page">
</form>