<?php
require_once '../config.php';
if (isset($_POST['submit'])) {
  $title = $_POST['search'];
  $sql = 'SELECT * FROM song WHERE title = :title';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title]);
  $row = $stmt->fetch();

} elseif (!empty($_REQUEST['id'])) {
  $sql = 'SELECT * FROM song WHERE id = :id';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['id' => $_REQUEST['id']]);
  $row = $stmt->fetch();
} else {
  header('location: .');
  exit();
}
?>


<?php
  require_once '../config.php';
  //$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
  $sql = "SELECT id, title, chord FROM song Where title like 'A%'";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title]);
  
  // fetch all rows
  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
 require_once '../config.php';
if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    if (in_array($_REQUEST['select1'], range('A','Z'))) {
      $search = "{$_REQUEST['select1']}%";
      $sql = "SELECT id, title, chord  FROM song WHERE title LIKE :search;";
      $stmt = $conn->prepare($sql);
      $stmt->execute([
          'search' => $search,
      ]);
      $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
      die('OMG Noooooooo!');
  }
}
?>
  <!----- print clean file ------>
  <script>

    function printContent(el) {
      window.print();
    
    }

    function toggleCheck(e) {
    if(document.getElementById("myCheckbox").checked === true){
    $(".c").show()
       $("."+e).show()
    } else {
        $(".c").hide()
        $("."+e).hide()
    }
}
  </script>
  <!----------------------------->




<!DOCTYPE html>
<html lang="en">

    <head>
    <link href="details.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylesheet.css">
  <link rel="stylesheet" href="../theme.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
  <script src="bootstrap/scripts/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Test ChordProPHP">
  <meta name="author" content="Nicolas Wurtz">
  <link rel="stylesheet" href="chordpro_css.css" />
</head>

<body class="bg-primary">

  </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <div class="container mx-auto">
    <div class="row text-left">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://cbana.us/songbook/"><strong>CHRISTIAN HLABU</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
          <form action="details.php" method="post" class="">
            <div class="input-group textbox-rounded">
              <input type="text" name="search" id="search" class="form-control form-control-md textbox-rounded border-primary" placeholder="Search..." autocomplete="on" required>
              <div class="input-group-append">
                <input type="submit" name="submit" value="Search" class="btn btn-primary textbox-rounded">
              </div>
            </div>
          </form>
      </nav>


      <div class="container mx-auto">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
      <div class="col-8 mx-auto">

   <!--     <h1>HTML</h1>
        <?php // echo $txt_html;
        ?>
        <h1>Plain text</h1>-->

        <!-- sayem Add CSS -->
        <link rel="stylesheet" type="text/css" href="jquery.transposer.css" />
        <div class="titleText"><?= ucwords($row['title']) ?></div>

    <?php if (count($row) == 1) { ?>
      <div style="text-align: center;">
         <img src="/uploads/icons/ss.png" width="280" height="200" title="Sorry, not found." alt="Sorry, not found." />
        <div style="text-align: center;">Sorry, Na hawl mi hla a um hrih lo or na ngan dan a match awk lo.</div>
        <p style="text-align: center; font-size: 12px">Tu kan nei mi hla pawl cu, tang lam ih um mi pawl an si.</p>
        <hr style="height:50pt; visibility:hidden;" />
        <form action="" method="post">
          <select name="select1"  class="round">
          <?php foreach (range('A', 'Z') as $letter): ?>
          <option value="<?=$letter?>" <?= $_REQUEST["select1"]==$letter?" selected='selected'":"" ?>><?=$letter?></option>
          <?php endforeach ?>
        
              <input type="submit" name="submit"  value="Go" class="btn btn-primary rounded-right" style="height: 45px; margin-bottom: 5px; margin-left: 10px">
     
        </form>

        <div class="table-wrapper">
            <table class="fl-table">
                  <tr>
                  <th style="background-color:#083358; color:white; width:80%">Title</th>
                    <th style="background-color:#888888; color:white;">Original Key</th>
                  </tr>
                  <?php // display the song title and chord  
                    foreach ($songTitle as $song) {
                    echo "<tr>";
                    echo "<td><a style='margin-left:10px' href='details.php?id={$song['id']}'>{$song['title']} <br> </a></td>";
                    echo "<td><a style='margin-left:10px'>{$song['chord']}   <br> </a></td>";
                    } ?>
                </tr>
              </table>
        </div>
      </div>
      <br>

      </div>
        <div class="footer bg-light"><img src="../uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
        </div>

    <?php } else { ?>
        <!-- sayem start -->
        <div>Original Key: <?= ucfirst($row['chord']) ?></div><br>

         <!-- [chord] === 'F' will be replace with the new column/indicator later -->
        <?php if ($row['chord'] === 'G') { ?>
            <div style="font-size:13px"> Show/Hide Keys
          <label class="switch">
          <input type="checkbox" id="myCheckbox" onchange="toggleCheck('transpose-keys')" checked>
          <span class="slider round"></span>
          </label></div>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
            <script type="text/javascript" src="jquery.transposer.js"></script>
            <script type="text/javascript">
            $(function() {
              $("pre").transpose();
            });
            </script>
          <?php } else { ?>

          <?php } ?>

        <br>
        <div class="card1 ">
          <div class="card-body1 show">
          <pre data-key=<?= ucfirst($row['chord']) ?> id="pre">
              <?= ucfirst($row['lyrics']) ?>
        </pre>
          </div>
       </div>

        <!-- sayem end -->
        </div>
        <div class="col-md-4 hide">
          <div class="card text-white bg-primary mb-3" style="max-width: auto;">
            <div class="card-header">Summary</div>
            <div class="card-body" style="height:900px">
              <div class="card-title">Title : <?= ucwords($row['title']) ?>
                <div class="card-title">Master key : <?= strtoupper($row['chord']) ?>
                  <div class="card-title bi bi-123">Hla Number : <?= $row['number'] ?>

                    </br>
                    </br>
                    <?php if (strlen($row['pdf']) > 0 ||strlen($row['ppt']) > 0 || strlen($row['pro']) > 0 ) { ?>
                      <p class="card-text"><strong>Download :</strong></p>
                    <?php } else { ?>
                      <!--Show Nothing  -->
                    <?php } ?>
                    <span class="social_logo">
                    <?php if (strlen($row['pdf']) > 0) { ?>
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['pdf'] ?>'> <img src="../uploads/icons/file-earmark-pdf.svg" alt="" width="40" height="40"></a>PDF</button>
                    <?php } else { ?>
                      <!--Show Nothing  -->
                    <?php } ?>
                    <?php if (strlen($row['ppt']) > 0) { ?>
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['ppt'] ?>'> <img src="../uploads/icons/file-earmark-ppt.svg" alt="" width="40" height="40"></a>PPT</button>
                    <?php } else { ?>
                      <!--Show Nothing  -->
                    <?php } ?>
                    <?php if (strlen($row['pro']) > 0) { ?>
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['pro'] ?>'> <img src="../uploads/icons/file-earmark-play.svg" alt="" width="40" height="40"></a>PRO</button>
                    <?php } else { ?>
                      <!--Show Nothing  -->
                    <?php } ?>
                    </span>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn btn-light"  onClick="printContent('print');">Print</button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer bg-light"><img src="../uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
        </div>
        <?php } ?>
  </body>
</html>