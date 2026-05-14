<!DOCTYPE html>
<html>
<body>
<h3>Все записи:</h3>
<?php if (file_exists('data.txt')): ?>
    <?php foreach (file('data.txt') as $line): ?>
        <?php [$name, $email] = array_pad(explode(';', trim($line)), 2, ''); ?>
        <p><?= htmlspecialchars($name) ?> — <?= htmlspecialchars($email) ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>Нет данных</p>
<?php endif; ?>
<p><a href="index.php">Назад</a></p>
</body>
</html>
