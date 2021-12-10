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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="bg-primary mx-auto">
  <div class="container mx-auto">
    <div class="row">
      <div class="col-md-8 mx-auto border-primaryrounded">
        <form action="details.php" method="post" class="">
          <div class="input-group textbox-rounded mt-3">
            <input type="text" name="search" id="search" class="form-control form-control-md textbox-rounded border-primary" placeholder="Search..." autocomplete="on" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-primary textbox-rounded">
            </div>
          </div>
        </form>
      </div>
      </div>
     
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>

<!----- print clean file ------>
<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
<!----------------------------->

 <div class="container mx-auto"> 
<div class="row text-left">
  <div class="col-8 mx-auto">
    <div id = "print">
     <h1 span ><?= $row['title']?></h1>
     <?= nl2br(htmlentities($row['lyrics']))?>
   </div>
  </div>
  <div class="col-md-4">
    <h5><b>Title :</b> <?= $row['title'] ?></h4>
      <h5><b>Master key :</b> <?= strtoupper($row['chord']) ?></h4>
      <h5><b>Hla Number: </b> <?= $row['number']?></h4>
      <h5><b>Download :</b>
      <br>
      <span class = "social_logo">

      <a href='uploads/<?=$row['image_url']?>'> <img src="uploads/pdf_logo.png" alt="" width="40" height="40"></a>
      <a href='uploads/<?=$row['image_url']?>'> <img src="uploads/ppt_logo.png" alt="" width="40" height="40"></a>
      <a href='uploads/<?=$row['image_url']?>'> <img src="uploads/propresenter_logo.png" alt="" width="60" height="40"></a>
      </span>
      <br>
      <br>
      <br><button type="button" class="btn btn-primary" onclick="printContent('print');">Print</button>
  </div>
</div>
</div>

</body>
</html>