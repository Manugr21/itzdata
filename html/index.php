<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docker</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  </head>
  <body>
    <h2>Docker-Compose</h2>
    <h3>Mysql <small>holi</small></h3>
    <?php
      echo "<table style='border: solid 1px black;'>";
      echo "<tr><th>Id</th><th>Nombre</th></tr>";

      class TableRows extends RecursiveIteratorIterator {
          function __construct($it) {
              parent::__construct($it, self::LEAVES_ONLY);
          }

          function current() {
              return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
          }

          function beginChildren() {
              echo "<tr>";
          }

          function endChildren() {
              echo "</tr>" . "\n";
          }
      }

      $servername = "dockerlamp_mysql_1";
      $username = "root";
      $password = "pass";
      $dbname = "holi";

      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM prueba");
          $stmt->execute();

          // set the resulting array to associative
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
              echo $v;
          }
      }
      catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      $conn = null;
      echo "</table>";
      ?>

      <h3>Postgres <small>docker 2</small></h3>
      <?php
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Apellido</th></tr>";

        class TableRows2 extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }

        $servername2 = "dockerlamp_postgres_1";
        $username2 = "docker";
        $password2 = "docker";
        $dbname2 = "docker";

        try {
            $conn2 = new PDO("pgsql:host=$servername2;dbname=$dbname2; user=$username2; password=$password2");
            $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt2 = $conn2->prepare("SELECT * FROM prueba;");
            $stmt2->execute();

            // set the resulting array to associative
            $result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows2(new RecursiveArrayIterator($stmt2->fetchAll())) as $k2=>$v2) {
                echo $v2;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn2 = null;
        echo "</table>";
        ?>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
