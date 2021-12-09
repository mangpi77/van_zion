<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $title = $_POST['search'];

    $sql = 'SELECT * FROM song WHERE title = :title';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>



<div class="container bg-light">
    <div class="row bg-light">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">Lai Hlabu</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">A hnai ah hla hmin ngan aw la hawl aw</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-primary" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-right = .25rem;">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>





  <div class="container"> 
  <div class="row border border-primary">
  <div class="col-8 border border-primary">
     <h1 span class="border border-primary"><?= $row['title']?></h1>
     <?= nl2br(htmlentities($row['lyrics']))?>
     
  </div>

  <div class="col-4 border border-primary">

      <h5><b>Title :</b> <?= $row['title'] ?></h4>
      <h5><b>Master key :</b> <?= strtoupper($row['chord']) ?></h4>
      <h5><b>Hla Number: </b> <?= $row['number']?></h4>
      <h5><b>Download :</b><a href='uploads/<?=$row['image_url']?>'> <img src="uploads/pdf.png" alt="" width="70" height="70"></a></h4>

    </div>
  </div>
</div> 
</html>