<?php   
/**
 * 
 *  SNACKS:
 *  1. Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un'ipotetica tappa del calendario. 
 *  Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 *  Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
 * 
 *  2. Passare come parametri GET(query string) name, mail ed age
 *  Verificare (cercando i metodi che non conosciamo nella documentazione) che: 
 *  1. Name sia più lungo di 3 caratteri;
 *  2. Che mail contenga un punto e una chiocciola;
 *  3. Che age sia un numero;
 *  Se è tutto ok stampare ' Accesso riuscito', altrimenti 'Accesso negato'.
 *  
 *  3. Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
    
<?php
// SNACK 1
$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'visiting_team' => 'Cantù',
        'home_points' => 55,
        'visiting_points' => 60,
    ],
    [
        'home_team' =>  'Virtus Bologna',
        'visiting_team' => 'Polisportiva Dinamo',
        'home_points' => 40,
        'visiting_points' => 47,
    ],
    [
        'home_team' => 'Reyer Venezia',
        'visiting_team' => 'New Basket Brindisi',
        'home_points' => 50,
        'visiting_points' => 52,
    ],
    [
        'home_team' => 'Treviso Basket',
        'visiting_team' => 'Allianz Trieste',
        'home_points' => 68,
        'visiting_points' => 71,
    ],
    [
        'home_team' => 'Pallacanestro Varese',
        'visiting_team' => 'Pallacanestro Reggiana',
        'home_points' => 63,
        'visiting_points' => 69,
    ],
];
?>

<ul>
    <?php for($i = 0; $i < count($matches); $i++) : ?>

        <li>
            <p><?php echo $matches[$i]['home_team'] . ' ' . $matches[$i]['visiting_team'] . ' | ' . $matches[$i]['home_points'] . ' ' . $matches[$i]['visiting_points']; ?></p>
        </li>
    <?php endfor; ?>
</ul>

<?php
// SNACK 2
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if( empty($name) || empty($email) || empty($age) ) {
    echo 'Inserisci correttamente tutti i dati prima di effettuare l\'accesso';
} elseif( strlen($name) < 3 || strpos($email, '@') === false || strpos($email, '.') === false || is_int($age) ) {
    echo 'Accesso non riuscito, riprovare';
} else {
    echo 'Accesso riuscito correttamente';
}
?>


</body>
</html>