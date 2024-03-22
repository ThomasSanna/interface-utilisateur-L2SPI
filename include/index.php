<!DOCTYPE html>
<?php include '/var/www/html/SANNA_THOMAS/include/connect_bdd.php'; ?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class. Périodique</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-table">
    <div class="ligne">
      <div class="atomes-gauche">
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 1');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">1</div>
          <div class="masse">1.008</div>
          <div class="electroneg">2.1</div>
          <div class="couches">
            <div class="couche">1</div>
          </div>
          <div class="centre">
            <div class="symbole">H</div>
            <div class="nom">Hydrogène</div>
          </div>
        </div>
      </div>
      <div class="atomes-droite">
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 2');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">2</div>
          <div class="masse">4.002</div>
          <div class="electroneg"></div>
          <div class="couches">
            <div class="couche">2</div>
          </div>
          <div class="centre">
            <div class="symbole">He</div>
            <div class="nom">Helium</div>
          </div>
        </div>
      </div>
    </div>


    <div class="ligne">
      <div class="atomes-gauche">
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 3');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">3</div>
          <div class="masse">6.432</div>
          <div class="electroneg">0.98</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">1</div>
          </div>
          <div class="centre">
            <div class="symbole">Li</div>
            <div class="nom">Lithium</div>
          </div>
        </div>
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 4');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">4</div>
          <div class="masse">9.025</div>
          <div class="electroneg">1.55</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">2</div>
          </div>
          <div class="centre">
            <div class="symbole">Be</div>
            <div class="nom">Berylium</div>
          </div>
        </div>
      </div>
      <div class="atomes-droite">
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 5');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">5</div>
          <div class="masse">10.22</div>
          <div class="electroneg">2.05</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">3</div>
          </div>
          <div class="centre">
            <div class="symbole">B</div>
            <div class="nom">Bore</div>
          </div>
        </div>

        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 6');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">6</div>
          <div class="masse">12.002</div>
          <div class="electroneg">2.5</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">4</div>
          </div>
          <div class="centre">
            <div class="symbole">C</div>
            <div class="nom">Carbone</div>
          </div>
        </div>

        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 7');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">7</div>
          <div class="masse">14.007</div>
          <div class="electroneg">3.05</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">6</div>
          </div>
          <div class="centre">
            <div class="symbole">N</div>
            <div class="nom">Azote</div>
          </div>
        </div>

        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 8');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">8</div>
          <div class="masse">15.995</div>
          <div class="electroneg">3.44</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">5</div>
          </div>
          <div class="centre">
            <div class="symbole">O</div>
            <div class="nom">Oxygene</div>
          </div>
        </div>

        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 9');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">9</div>
          <div class="masse">18.215</div>
          <div class="electroneg">3.98</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">7</div>
          </div>
          <div class="centre">
            <div class="symbole">F</div>
            <div class="nom">Fluor</div>
          </div>
        </div>

        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 10');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">10</div>
          <div class="masse">20.1788</div>
          <div class="electroneg"></div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">8</div>
          </div>
          <div class="centre">
            <div class="symbole">Ne</div>
            <div class="nom">Neon</div>
          </div>
        </div>
      </div>
    </div>

    <div class="ligne">
      <div class="atomes-gauche">
        <?php
        $query = $pdo->query('SELECT couleur FROM classification_periodique WHERE numero = 11');
        $couleur = $query->fetch();
        ?>
        <div class="atome" style="background-color: <?php echo $couleur['couleur']; ?>">
          <div class="numero">11</div>
          <div class="masse">22.989</div>
          <div class="electroneg">0.93</div>
          <div class="couches">
            <div class="couche">2</div>
            <div class="couche">8</div>
            <div class="couche">1</div>
          </div>
          <div class="centre">
            <div class="symbole">Na</div>
            <div class="nom">Sodium</div>
          </div>
        </div>
      </div>
      <div class="atomes-droite">
      </div>
    </div>



  </div>
</body>

</html>