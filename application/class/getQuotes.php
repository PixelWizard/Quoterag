<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    $db = mysql_connect($host,$username,$password) or die("<p style='color: #e74c3c'>Verbindung zu Server gescheitert!</p>");

    $q_connect = "use db_quoterag";
    
    mysql_query($q_connect) or die ("<p style='color: #e74c3c'>Datenbank wurde nicht gefunden!</p>");
    
    $data = array();
    
    $q_getData = "select * from t_quotes";
    $r_getData = mysql_query($q_getData) or die("<p style='color: #e74c3c'>Daten konnten nicht empfangen werden");
    while($a_getData = mysql_fetch_array($r_getData,MYSQL_ASSOC)){
        $data[] = $a_getData;
    }
    
    echo(json_encode($data));
?>