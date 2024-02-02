<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Eum vitae fuga veritatis esse ipsa nesciunt voluptatibus?
        Explicabo deserunt quod, eius numquam labore porro, culpa quas, reiciendis in tempora quaerat repudiandae?
    </p>
    <p>
        <ul>
            <?php foreach($users as $user) : ?>
               <li><?php echo $user->name ?></li>
            <?php endforeach?>
        </ul>
    </p>
</body>
</html>