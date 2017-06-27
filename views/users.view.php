<?php require 'partials/head.php'; ?>

<h1>All users</h1>

<form method="POST" action="/users">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>

<h2>Name history</h2>

<ul>
  <?php foreach ($names as $name) : ?>
    <li><?= $name->name; ?></li>
  <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>
