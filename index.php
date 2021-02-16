
<?php 
include __DIR__ . '/classes/user.php';
// include __DIR__ . '/classes/category.php';
// include __DIR__ . '/classes/article.php';
// include __DIR__ . '/classes/tag.php';


$users=[
    new User('Gino', 'Paoli', 'gino@paoli.it', '12.2.1950', '2.5.2017', '2.6.2018', 10, 100),
    new User('Giulio', 'Cesare', 'ciao@proma.it', '12.6.1970', '2.8.2015', '22.10.2018', 40, 60),
    new User('Barbara', 'Straisand', 'babura@strsnd.it', '12.12.1959', '28.10.2020', '2.1.2021', 100, 1115),    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-blog</title>
</head>
<body>
        <h1>Utenti</h1>   
    <div class="user_box">
        <?php 
        foreach ($users as $user) {?>
            <h4>Nome: <?php echo $user->nome; ?></h4>
            <h4>Cognome: <?php echo $user->cognome; ?></h4>
            <p>email: <?php echo $user->email; ?></p>
            <p>Data di nascita: <?php echo $user->nascita; ?></p>
            <p>Data iscrizione al blog: <?php echo $user->data_iscrizione; ?></p>
            <p>Data Ultimo articolo: <?php echo $user->data_ultimo_articolo; ?></p>
            <p>Numero articoli: <?php echo $user->numero_articoli; ?></p>
            <p>Numero totale dei commenti enl blog: <?php echo $user->numero_commenti; ?></p>

       <?php }
        ?>
    </div>
</body>
</html>