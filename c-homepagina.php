<?php
    include("./functions.php");

    is_authorized(["customer", "admin", "root"]);
?>

c-homepagina
<?php
    var_dump($_SESSION);

    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn accountid is: " . $_SESSION["id"];

?>