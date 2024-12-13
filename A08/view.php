<?php
include('connect.php');

if (isset($_GET['islandOfPersonalityID'])) {
  $islandOfPersonalityID = $_GET['islandOfPersonalityID'];

  $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
  $islandResult = executeQuery($islandQuery);
}

$title = "CORE MEMORIES"
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CORE MEMORIES</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/islandicon.png" />
  <link rel="stylesheet" href="view.css" />
</head>

<body>
  <div class="parent container d-flex justify-content-center mb-5 mt-3">
    <div class="row">
      <div class="col">
        <h1><?php echo $title; ?></h1>
      </div>
    </div>
  </div>

  <div class="back container">
    <div class="row">
      <div class="col">
        <a href="index.php">
          <h2>&#8617;back</h2>
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <php class="row">

      <?php
      if (mysqli_num_rows($islandResult) > 0) {
        while ($row = mysqli_fetch_assoc($islandResult)) {
          $image = $row['image'];
          $content = $row['content'];
          $color = $row['color'];
          ?>
          <div class="card d-flex flex-row gap-3 p-3 mb-3 rounded-0">
            <div class="row">
              <div class="col-lg-6 col-sm-12">
                <img src="assets/images/<?php echo $image; ?>" alt="" style="width: 100%; height: auto" />
              </div>
              <div class="col-lg-6 col-sm-12" style="font-size: 16px;">
                <?php echo $content; ?>
              </div>
            </div>
          </div>

          <?php
        }
      }
      ?>
      </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>