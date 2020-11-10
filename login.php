<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.
    echo "username: ". $_GET['user_name']."<br/>". "Password: ". $_GET['pass_word'];

// todo 2: maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.
$username = $_GET['user_name'];
$password = $_GET['pass_word'];
$myConn = new DB;

// todo 3: include de variabele met de username in de onderstaande query, zodat deze alle data kan ophalen voor de ingevoerde username.
$query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";

$result = $myConn->executeSQL($query);

// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.
// $result is een Array want als je echo gettype($result); doet dan krijg je array 
if (!empty($result)) { 
    echo "<br> Login as $username <br>";
    // todo 5: let uit wat de ingebouwde php functie print_r() doet en gebruik het om de result-variabele te printen.
    // print_r() is er om de informatie te laten zien van variabelen
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
    print_r($result);
}

?>