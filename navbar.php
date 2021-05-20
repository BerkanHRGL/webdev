<!--Begin van de navigatiebalk-->

<?php
  $active = (isset($_GET["content"]))? $_GET ["content"]: "";
?>

<nav class="top-app-bar navbar navbar-expand-md navbar-dark bg-dark">
<img src="./img/icon/favicon.ico" width="40" height="40" alt="" loading="lazy"></a>
  <a class="navbar-brand" href="./index.php?content=homepagina">Senzu Beans</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
      if (isset($_SESSION["id"])) {

        switch ($_SESSION["userrole"]) {
          case 'admin':
            echo '<li class="nav-item '; echo (in_array($active, ["a-homepagina", ""]))? "active": ""; echo '">
                    <a class="nav-link" href="./index.php?content=a-homepagina">Homepagina <span class="sr-only">(current)</span></a>
                  </li>';
          break;
          case 'customer':
            echo  '<li class="nav-item '; echo (in_array($active, ["c-homepagina", ""]))? "active": ""; echo '">
                    <a class="nav-link" href="./index.php?content=c-homepagina">Homepagina <span class="sr-only">(current)</span></a>
                  </li>';
          break;
          case 'root':
            echo '<li class="nav-item '; echo (in_array($active, ["r-homepagina", ""]))? "active": ""; echo '">
                    <a class="nav-link" href="./index.php?content=r-homepagina">Homepagina <span class="sr-only">(current)</span></a>
                  </li>';
          break;
          case 'moderator':
            echo '<li class="nav-item '; echo (in_array($active, ["m-homepagina", ""]))? "active": ""; echo '">
                    <a class="nav-link" href="./index.php?content=m-homepagina">Homepagina <span class="sr-only">(current)</span></a>
                  </li>';
          break;
          default:
            echo '<li class="nav-item '; echo (in_array($active, ["homepagina", ""]))? "active": ""; echo '">
                    <a class="nav-link" href="./index.php?content=homepagina">Homepagina <span class="sr-only">(current)</span></a>
                  </li>';
          break;
        }
      } else {
        echo '<li class="nav-item '; echo (in_array($active, ["homepagina", ""]))? "active": ""; echo '">
                <a class="nav-link" href="./index.php?content=homepagina">Homepagina <span class="sr-only">(current)</span></a>
              </li>';
      }
      ?>
      <li class="nav-item <?php echo (in_array($active, ["kopen", ""]))? "active": "" ?>">
        <a class="nav-link" href="./index.php?content=kopen">Prijzen</a>
      </li>
      <li class="nav-item <?php echo (in_array($active, ["verkopen", ""]))? "active": "" ?>">
        <a class="nav-link" href="./index.php?content=verkopen">Locatie</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["agenda", "zomer2021", "nieuws"]))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Types
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php echo (in_array($active, ["agenda", ""]))? "active": "" ?>" href="./index.php?content=agenda">Strength</a>
          <a class="dropdown-item <?php echo (in_array($active, ["zomer2021", ""]))? "active": "" ?>" href="./index.php?content=zomer2021">Speed</a>
          <a class="dropdown-item <?php echo (in_array($active, ["nieuws", ""]))? "active": "" ?>" href="./index.php?content=nieuws">Energy</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php
      if (isset($_SESSION["id"])) {
        switch ($_SESSION["userrole"]) {
            case 'admin':
                    echo '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle '; 
                              echo (in_array($active, ["a-gebruikers", "reset-pw"])) ? "active" : "";
                              echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Instellingen
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                              <a class="dropdown-item '; echo (in_array($active, ["a-gebruikers", ""])) ? "active" : ""; echo '" href="./index.php?content=a-gebruikers">Gebruikers</a>
                              <a class="dropdown-item '; echo (in_array($active, ["reset-pw", ""])) ? "active": ""; echo '" href="./index.php?content=reset-pw">Wachtwoord resetten</a>
                            </div>
                          </li>';
            break;
            case 'customer':
              # code...
            break;
            case 'root':
              # code...
            break;
            case 'moderator':
               # code...
            break;
            default:
            break;
        }
        echo'<li class="nav-item '; echo (in_array($active, ["uitloggen", ""])) ? "active" : ""; echo '">
                <a class="nav-link" href="./index.php?content=uitloggen">Uitloggen</a>
              </li>';
      } else {
        echo'<li class="nav-item '; echo (in_array($active, ["inloggen", ""])) ? "active" : ""; echo '">
                <a class="nav-link" href="./index.php?content=inloggen">Inloggen</a>
              </li>';
        echo'<li class="nav-item '; echo (in_array($active, ["registreer", ""])) ? "active" : ""; echo '">
                <a class="nav-link" href="./index.php?content=registreer">Registreer</a>
              </li>';
      }
    ?>
    </ul>
  </div>
</nav>

<!--Einde van de navigatiebalk-->