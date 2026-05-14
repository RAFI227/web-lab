<?php session_start(); ?>
<!DOCTYPE html><html><body>
<?php if (!empty($_SESSION['errors'])): ?>
    <p style="color:red"><?= implode('<br>', $_SESSION['errors']) ?></p>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>

<?php if (!empty($_SESSION['data'])): ?>
    <h3>Данные из сессии:</h3>
    <p>Имя: <?= htmlspecialchars($_SESSION['data']['username']) ?></p>
    <p>Email: <?= htmlspecialchars($_SESSION['data']['email']) ?></p>
<?php endif; ?>

<h3>Данные из cookies:</h3>
<?php if (!empty($_COOKIE['username'])): ?>
    <p>Имя: <?= htmlspecialchars($_COOKIE['username']) ?></p>
    <p>Email: <?= htmlspecialchars($_COOKIE['email'] ?? '') ?></p>
<?php else: ?>
    <p>Куки пусты</p>
<?php endif; ?>

<hr>
<p><a href="form.html">Заполнить форму</a></p>
<p><a href="view.php">Все данные</a></p>
</body></html>
