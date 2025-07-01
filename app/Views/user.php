<h1>Data User</h1>
<ul>
<?php foreach($user as $u): ?>
    <li><?= $u['name'] ?> - <?= $u['email'] ?></li> # dari '$u['nama']' menjadi '$u['name']'
<?php endforeach; ?>
</ul>
