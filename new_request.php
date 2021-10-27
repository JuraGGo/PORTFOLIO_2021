<?php
//importe mainigos no masiva
extract($_POST);
//nerada php errorus
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio_contacts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
// pazinojums neveiksmiga savienosanas gadijuma
    die('<script> 
    alert("Sorry, there was an error sending your message.");
    document.location = "javascript:history.go(-1)";
</script>');
} 
else {
   
}
//  datu bāzes tabulā "contacts" kolonnās name, email, comment ievietos mainīgos $name, $email, $comment, kas iegūti no formas, kas ir index failā
$sql = "INSERT INTO contacts (name, email, comment)
VALUES ('".$name."', '".$email."', '".$comment."')";

//taisa vaicajumu datubazei
if ($conn->query($sql) === TRUE) {
// pazinojums veiksmigas datu nosutisanas gadijuma
    echo '<script> 
    alert("Thank you! Your message has been succesfully received!");
    document.location = "javascript:history.go(-1)";
    </script>';
} else {
 // pazinojums neveiksmiga data nosutisanas gadijuma   
echo 
'<script> 
    alert("Sorry, there was an error sending your message.");
    document.location = "javascript:history.go(-1)";
</script>';
}
$conn->close();
// -> tekosa objekta operators
