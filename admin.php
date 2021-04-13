<html>
<body>

<header> 
        <img src ="images/mega travel logo.png" height="200px" alt="logo"/>
        <p id = "timeDisplay">This is a time</p><br/>
        <p id = "greeting"> This is a greeting </p><br/>
        <img id = "sunmoon" src="images/moon.png" height = "50px" alt ="moon">
        <script src="welcome.js"></script>
    </header>

<?php

//Login Databasce
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP

);

define ('DB_SERVER', 'localhost');
define('DB_USERNAME', 'siteadmin');
define('DB_PASSWORD','itc475');
define('DB_NAME', 'demo');





?>




<?php



$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERROR: Could not connect. " .$mysqli->connect_error);
}







$username = "username";
$password = "password";
$dbname = "reservationDB";
$mysqli = new mysqli("localhost", $username, $password, $dbname);


$query = "SELECT * FROM ReservationTable";


if ($result = $mysqli->query($query)) {

    while ($row = $result-> fetch_assoc()) {
        $customerid = $row["col1"];
        $firstname = $row["col2"];
        $lastname = $row["col3"];
        $phonenumber = $row["col4"];
        $email = $row["col5"];
        $numberofadults = $row["col6"];
        $numberofchildren = $row["col7"];
        $destination = $row["col8"];
        $traveldates = $row["col9"];
        $activities = $row["col10"];


        echo '<b>' .$customerid.'</b><br />';
        Client Name: echo $firstname.$lastname'<br />';
        Client Phone Number: echo $phonenumber.'<br />';
        Client Email: echo $email.'<br />';
        Number of Adults: echo $numberofadults.'<br />';
        Number of Children: echo $numberofchildren.'<br />';
        Destination: echo $destination.'<br />';
        Travel Dates: echo $traveldates.'<br />';
        Interested Activities: echo $activities.'<br />';

    }

    $result->free();

}

?>


</html>
</body>
