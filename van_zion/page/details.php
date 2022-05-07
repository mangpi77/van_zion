
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
  $id = (int)$_GET['id'];


    if (!isset($_COOKIE['view_counted'])) {
        setcookie('view_counted', $id, time() + (86400 * 30), "/"); // 86400 = 1 day
        if (!isset($_SESSION['recent_posts'][$id])) {
            $sql = "UPDATE song SET count = count + 1 WHERE id = $id";
            $_SESSION['recent_posts'][$id] = 1;
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }elseif (isset($_COOKIE['view_counted']) && $_COOKIE['view_counted'] != $id) {
        setcookie('view_counted', $id, time() + (86400 * 30), "/"); // 86400 = 1 day
        if (!isset($_SESSION['recent_posts'][$id])) {
            $sql = "UPDATE song SET count = count + 1 WHERE id = $id";
            $_SESSION['recent_posts'][$id] = 1;
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }else{
        //you have already counted this as view.
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
      $sql = "(SELECT id, title, chord  FROM song WHERE title LIKE :search) UNION (SELECT id, title, chord  FROM hymn WHERE title LIKE :search)";
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
    <link rel="stylesheet" media="print" href="print.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
    <script src="bootstrap/scripts/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <scriot src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></scriot>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <style>

.chat-btn {
    position: absolute;
    right: 14px;
    bottom: 30px;
    cursor: pointer
}

.chat-btn .close {
    display: none
}

.chat-btn i {
    transition: all 0.9s ease
}

#check:checked~.chat-btn i {
    display: block;
    pointer-events: auto;
    transform: rotate(180deg)
}

#check:checked~.chat-btn .comment {
    display: none
}

.chat-btn i {
    font-size: 22px;
    color: #fff !important
}

.chat-btn {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    color: #fff;
    font-size: 22px;
    border: none
}

.wrapper1 {
    right: 120px;
    bottom: 100px;
    width: 300px;
    background-color: #fff;
    border-radius: 3px;
    opacity: 0;
    transition: all 0.4s
}

#check:checked~.wrapper1 {
    opacity: 1
}

.header1 {
    padding: 13px;
    border-radius: 5px 5px 0px 0px;
    margin-bottom: 10px;
    color: #fff
}

.chat-form {
    padding: 15px
}

.chat-form input,
textarea,
button {
    margin-bottom: 10px
}

.chat-form textarea {
    resize: none
}

.form-control:focus,
.btn:focus {
    box-shadow: none
}

.btn,
.btn:focus,
.btn:hover {
border: red
color:white;
}
a{
    text-decoration:none;
}

a:hover{
    color:gray;
    text-decoration:none;
}

#check {
    display: none !important
}

    </style>

</head>

<body class="wrapper">

    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <scritp src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></scritp>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="container mx-auto">
        <div class="row text-left">
            
           <?php include '../components/menu.php'?>


<div class="col-md-8">

                <!-- sayem Add CSS -->
                <link rel="stylesheet" type="text/css" href="page/plugin/jquery.transposer.css" />
                <div class="titleText"><?= ucwords($row['title']) ?></div>

                <?php if (count($row) == 1) { ?>
                <?php
        $button = $_POST ['submit'];
        $search = $_POST ['search'];
        // connect to database
     $con=mysqli_connect("162.241.217.237","cbanaus_user","WH8M0~5AGIEP","cbanaus_songbook");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
            }

           $sql = "SELECT * FROM song WHERE title LIKE '%$search%' OR lyrics LIKE '%$search%' OR  MATCH(lyrics) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST ('%$search%' IN BOOLEAN MODE)";
            $run = mysqli_query($con,$sql);
            $foundnum = mysqli_num_rows($run);

            if ($foundnum==0)
            {
            echo " <div style='text-align: center'>
            <img src='../uploads/icons/ss.png' width='280' height='200' title='Sorry, not found.' alt='Sorry, not found.' />
            <div style='text-align: center;'>Sorry, Na hawl mi '<b>$search</b>' kan database ah a um hrih lo</div><br>
            <button type = 'button' class = 'btn btn-light' style='color:#fff' text-decoration:none'> <a href ='./page/request.php'> Request Song</a></button>            
            <hr style='height:50pt; visibility:hidden;' />
        </div>";
        echo "<br>";

                }
                else{
                echo "<p style='margin-left:20px'><strong> $foundnum Results Found for \"" .$search."\" </strong></p>";
                $sql = "SELECT * FROM song WHERE title LIKE '%$search%' OR lyrics LIKE '%$search%' OR MATCH(lyrics)
                AGAINST('%$search%' IN BOOLEAN MODE) OR MATCH(title) AGAINST('%$search%' IN BOOLEAN MODE) OR
                MATCH(title) AGAINST ('%$search%' IN BOOLEAN MODE)";
                $getquery = mysqli_query($con,$sql);

                echo'<table>';

                    while($runrows = mysqli_fetch_array($getquery))
                    {

                    echo "<tr>";
                        echo "<td><a style='margin-left:10px' href='page/details.php?id={$runrows['id']}'>{$runrows['title']} <br> </a></td>";
                        echo "<td><a style='margin-left:10px'>{$runrows['chord']} <br> </a></td>";
                        }

                        }
                        echo'</table>'
                ?>
                <br>
            </div>
            <div class="footer"><img src="../uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
        </div>
        <?php } else { ?>
        <!-- sayem start -->
        <div>Original Key: <?= ucfirst($row['chord']) ?></div><br>

        <!-- [chord] === 'F' will be replace with the new column/indicator later -->
        <?php if ($row['chord'] === 'Ab'| $row['chord'] ==='A' |$row['chord'] === 'A#'| $row['chord'] ==='Bb'|$row['chord'] === 'B'| $row['chord'] ==='C'|$row['chord'] === 'C#'| $row['chord'] ==='Db'|$row['chord'] === 'D'| $row['chord'] ==='D#'|$row['chord'] === 'Eb'| $row['chord'] ==='E'|$row['chord'] === 'F'| $row['chord'] ==='F#'|$row['chord'] === 'Gb'| $row['chord'] ==='G'|$row['chord'] === 'G#'){ ?>
        <div class="key"> Show/Hide Keys
            <label class="switch">
                <input type="checkbox" id="myCheckbox" onchange="toggleCheck('transpose-keys')" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="page/plugin/jquery.transposer.js"></script>
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
        <div class="card text-white bg-primary mb-3" style="max-height: 420px;">
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
                             <br>
                            <button type="button" class="btn btn-light" onClick="printContent('print');"><img src="../uploads/icons/print-button.png" width="40" height="40">
                            
                            </button>


                           <a href="../page/report.php" class="chat-btn"><img src="../uploads/icons/warning.png" width="30" height="30"></img></a>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once '../components/next.php'?>
<?php require_once '../components/scrollup.php'?>
<?php require_once '../components/footer.php'?>
<?php } ?>





</body>
</html>