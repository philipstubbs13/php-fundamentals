<?php include "header_inc.php" ?>
      <?php

        // Request All errors to be reported
        ini_set("display_errors", 1);
        ini_set("display_statup_errors", 1);
        error_reporting(E_ALL);

        include("classes.php");
        $db = new DB();

        try {
          $exhibits = $db->executeOne("SELECT * FROM Exhibits");
          $index = $_GET["index"] ?? 0;
          if ($index > count($exhibits)) {
            echo "<h4>Error</h4>";
            exit();
          }
          $object = $exhibits[$index];
        } catch (Exception $e) {
          echo "<h4>Error</h4>";
        }
      ?>
        <article>
          <h2><?php echo $object["title"] ?></h2>
          <p>
            <?php echo $object["description"] ?>
          </p>
          <img
            src="gallery/<?php echo $object["image"] ?>"
            fetchpriority="high"
            decoding="sync"
          />
        </article>
<?php include "footer_inc.php" ?>