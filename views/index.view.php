<?php require('partials/header.php'); ?>

<h1>Submit your name</h1>

<form method="POST" action="/names">
    <label>
        <input name="name">
    </label>
    <button type="submit">Submit</button>
</form>

<h1>Names:</h1>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li><?= $task->name; ?></li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>
