<?php require('partials/header.php'); ?>

<div>
    <h1>My Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->completed): ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require('partials/footer.php'); ?>
