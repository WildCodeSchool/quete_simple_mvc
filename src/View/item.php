<!DOCTYPE html>
<html>
<head>
    <title>MVC 2</title>
</head>
<body>
<section>
    <h1>items<h1>
    <ul>
        <?php foreach ($items as $item) : ?>
            <li><?= $item['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>