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
    if (document.getElementById("myCheckbox").checked === true) {
        $(".c").show()
        $("." + e).show()
    } else {
        $(".c").hide()
        $("." + e).hide()
    }
}
</script>
<!----------------------------->




<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../index.php" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet.css">
    <link rel="stylesheet" href="../theme.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
    <script src="bootstrap/scripts/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="bg-primary">

    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="container mx-auto">
        <div class="row text-left">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../"><strong><embed src="../uploads/icons/logo_full_color.png"
                            height="87px" width=150px"></strong></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">

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
                    <form action="page/details.php" method="post" class="">
                        <div class="input-group textbox-rounded">
                            <input type="text" name="search" id="search"
                                class="form-control form-control-md textbox-rounded border-primary"
                                placeholder="Search..." autocomplete="on" required>
                            <div class="input-group-append">
                                <input type="submit" name="submit" value="Search"
                                    class="btn btn-primary textbox-rounded">
                            </div>
                        </div>
                    </form>
            </nav>



            <div class="col-8 mx-auto">

                <!--     <h1>HTML</h1>
        <?php // echo $txt_html;
        ?>
        <h1>Plain text</h1>-->

                <!-- sayem Add CSS -->
                <link rel="stylesheet" type="text/css" href="plugin/jquery.transposer.css" />
                <div class="titleText"><?= ucwords($row['title']) ?></div>

                <?php if (count($row) == 1) { ?>
                <?php
        $button = $_POST ['submit'];
        $search = $_POST ['search'];
        // connect to database
        $con=mysqli_connect("localhost","root","root","cbanaus_songbook");

        $sql = "SELECT * FROM song WHERE title LIKE '%$search%' OR lyrics LIKE '%$search%' OR  MATCH(lyrics) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST ('%$search%' IN BOOLEAN MODE)";
            $run = mysqli_query($con,$sql);
            $foundnum = mysqli_num_rows($run);

            if ($foundnum==0)
            {
            echo " <div style='text-align: center'>
            <img src='../uploads/icons/ss.png' width='280' height='200' title='Sorry, not found.' alt='Sorry, not found.' />
            <div style='text-align: center;'>Sorry, Na hawl mi '<b>$search</b>' a um hrih lo or na ngan dan a match awk lo.</div>
            <hr style='height:50pt; visibility:hidden;' />
        </div>";
        echo "<br>";
            
            }
            else{
                echo "<p style='margin-left:20px'><strong> $foundnum Results Found for \"" .$search."\" </strong></p>";      
                $sql = "SELECT * FROM song WHERE title LIKE '%$search%' OR lyrics LIKE '%$search%' OR MATCH(lyrics) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST ('%$search%' IN BOOLEAN MODE)";
            $getquery = mysqli_query($con,$sql);

            echo'<table>';

            while($runrows = mysqli_fetch_array($getquery))
            {

                echo "<tr>";
                echo "<td><a style='margin-left:10px' href='page/details.php?id={$runrows['id']}'>{$runrows['title']} <br> </a></td>";
                echo "<td><a style='margin-left:10px'>{$runrows['chord']}   <br> </a></td>";
            }

            }
            echo'</table>'
            ?>
                <br>

            </div>
            <div class="footer bg-light"><img src="../uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
        </div>

        <?php } else { ?>
        <!-- sayem start -->
        <div>Original Key: <?= ucfirst($row['chord']) ?></div><br>

        <!-- [chord] === 'F' will be replace with the new column/indicator later -->
        <?php if ($row['chord'] === 'Ab'| $row['chord'] ==='A' |$row['chord'] === 'A#'| $row['chord'] ==='Bb'|$row['chord'] === 'B'| $row['chord'] ==='C'|$row['chord'] === 'C#'| $row['chord'] ==='Db'|$row['chord'] === 'D'| $row['chord'] ==='D#'|$row['chord'] === 'Eb'| $row['chord'] ==='E'|$row['chord'] === 'F'| $row['chord'] ==='F#'|$row['chord'] === 'Gb'| $row['chord'] ==='G'|$row['chord'] === 'G#'){ ?>
        <div style="font-size:13px"> Show/Hide Keys
            <label class="switch">
                <input type="checkbox" id="myCheckbox" onchange="toggleCheck('transpose-keys')" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="plugin/jquery.transposer.js"></script>
        <script type="text/javascript">
        $(function() {
            $("pre").transpose();
        });
        </script>
        <?php } else { ?>

        <?php } ?>

        <br>
        <div class="card1">
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
                    <div class="card-title">Original key : <?= strtoupper($row['chord']) ?>
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
                                <button type="button" class="btn btn-light px-1"><a
                                        href='../uploads/<?= $row['pdf'] ?>'> <img
                                            src="../uploads/icons/file-earmark-pdf.svg" alt="" width="40"
                                            height="40"></a>PDF</button>
                                <?php } else { ?>
                                <!--Show Nothing  -->
                                <?php } ?>
                                <?php if (strlen($row['ppt']) > 0) { ?>
                                <button type="button" class="btn btn-light px-1"><a
                                        href='../uploads/<?= $row['ppt'] ?>'> <img
                                            src="../uploads/icons/file-earmark-ppt.svg" alt="" width="40"
                                            height="40"></a>PPT</button>
                                <?php } else { ?>
                                <!--Show Nothing  -->
                                <?php } ?>
                                <?php if (strlen($row['pro']) > 0) { ?>
                                <button type="button" class="btn btn-light px-1"><a
                                        href='../uploads/<?= $row['pro'] ?>'> <img
                                            src="../uploads/icons/file-earmark-play.svg" alt="" width="40"
                                            height="40"></a>PRO</button>
                                <?php } else { ?>
                                <!--Show Nothing  -->
                                <?php } ?>
                            </span>
                            <br>
                            <br>
                            <br>
                            <button type="button" class="btn btn-light" onClick="printContent('print');">Print</button>

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