<html>
<body>
    <header> 
        <img src ="images/mega travel logo.png" height="200px" alt="logo"/>
        <p id = "timeDisplay">This is a time</p><br/>
        <p id = "greeting"> This is a greeting </p><br/>
        <img id = "sunmoon" src="images/moon.png" height = "50px" alt ="moon">
        <script src="welcome.js"></script>
    </header>

Thank you for submitting your travel agent contact request! Here is the information you submitted:

Client Name:<?php echo $_POST["fname" . " " . "lname"]; ?><br>

Client Phone Number:<?php echo $_POST["phone"]; ?><br>

Client Email:<?php echo $_POST["email"]; ?><br>

Number of Adults:<?php echo $_POST["adults"]; ?><br>

Number of Children:<?php echo $_POST["children"]; ?><br>

Destination:<?php echo $_POST["selectedDestination"]; ?><br>

Travel Dates:<?php echo $_POST["date"]; ?><br>

Interested Activities:<?php echo $_POST["selectedActivities"]; ?><br>

An agent will be in touch with you soon!


<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "reservationDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

$sql = CREATE TABLE ReservationTable (
    customerid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    phonenumber int(10),
    email varchar(255),
    numberofadults int(20),
    numberofchildren int(20),
    destination varchar(255),
    traveldates date(),
    activities varchar(255)

$sql = "INSERT INTO ReservationTable (customerid, firstname, lastname, phonenumber, email, numberofadults, numberofchildren, destination, traveldates, activities)
VALUES ('fname','lname','phone','email','adults','children','selectedDestination','date','selectedActivities')";


    if ($conn->query($sql) === TRUE) {
        echo "Table ReservationTable created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      
      $conn->close();

);

?>


</body>
<html>
