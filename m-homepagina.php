<?php
    include("./functions.php");

    is_authorized(["root", "moderator"]);
?>

m-homepagina
<?php
    var_dump($_SESSION);

    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn accountid is: " . $_SESSION["id"];

?>