<?php include "header_inc.php" ?>
  <ul id="master">
      <?php
        include("classes.php");
        $db = new DB();
        $exhibits = $db->executeOne("SELECT * FROM Exhibits");
        foreach ($exhibits as $i => $object):
      ?>
        <li><a href="details.php?index=<?php echo $i ?>">
          <?php echo $object["title"] ?>
        </a></li>
      <?php endforeach; ?>
  </ul>
<?php include "footer_inc.php" ?>
