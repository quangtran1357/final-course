<div class="col-lg-3">
  <h1 class="my-4" ><img src="../public/uploads/chupchip4.png">ChipChip</h1>
  <div class="list-group">
    <?php
        $sql = "select * from catalogs ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
          <span class="glyphicon glyphicon-play">
              <a href="catalogs.php?catalog_id=<?php echo $row["id"]; ?>"
                class="list-group-item" style="border-style: outset; border-width: 1px; border-color: black; border-radius: 7px;"><img src="../public/uploads/go7.png"> <?php echo $row["name"]; ?> </a>
          </span>
          <?php   }
        }
      ?>
  </div>
</div>

