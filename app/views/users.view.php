<?php require('partials/header.php'); ?>

<h1>Submit a user name</h1>

<form method="POST" action="/users">
    <label>
        <input name="name">
    </label>
    <button type="submit">Submit</button>
</form>

<h1>All Users:</h1>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>
