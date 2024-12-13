<?php
include('connect.php');

if (isset($_GET['islandOfPersonalityID'])) {
  $islandOfPersonalityID = $_GET['islandOfPersonalityID'];
  $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
  $islandResult = executeQuery($islandQuery);
  $row = mysqli_fetch_assoc($islandResult);
}

$query = "SELECT * FROM islandsofpersonality";
$result = executeQuery($query);

$title = "ISLANDS OF PERSONALITY";
?>



<!DOCTYPE html>
<html>

<head>
  <title>ANYL'S PERSONALITY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="assets/images/islandicon.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="island.css" />
</head>

<body>
  <div class="w3-display-container" style="margin-bottom: 50px">
    <img src="assets/images/hero.png" style="width: 100%" />
  </div>

  <div class="container">
    <div class="row">
      <h1><?php echo $title ?></h1>
    </div>
  </div>

  <div class="w3-row w3-container" style="margin: 50px 0">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $shortDescription = $row['shortDescription'];
        $longDescription = $row['longDescription'];
        $color = $row['color'];
        $image = $row['image'];
        $status = $row['status'];
        $islandOfPersonalityID = $row['islandOfPersonalityID'];
        ?>
        <div class="w3-half w3-container">
          <div class="card mt-5 p-3" style="background-color: <?php echo $color; ?>;">
            <img src="assets/images/<?php echo $image; ?>" style="width: 100%" />
            <h2><?php echo $name; ?></h2>
            <p>
              <?php echo $shortDescription; ?>
            </p>
            <a href="view.php?islandOfPersonalityID=<?php echo $islandOfPersonalityID; ?>"><button class="button">VISIT
                &#8594;
                <Tbody></Tbody>
              </button></a>
          </div>
        </div>


        <?php
      }
    }
    ?>
  </div>

  <!-- <div class="w3-row w3-container" style="margin: 50px 0">
      <div class="w3-half w3-container">
        <div class="">
          <img src="images/musicisland.png" style="width: 100%" />
          <h2>Car Rental Included</h2>
          <p>Wherever you travel our car rental is included.</p>
        </div>
      </div>

      <div class="w3-half w3-container">
        <div class="">
          <img src="images/natureisland.png" style="width: 100%" />
          <h2>Realize Your Dreams</h2>
          <p>Don't wait until it is to late.</p>
        </div>
      </div>
    </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>