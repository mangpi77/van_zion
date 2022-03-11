<?php
require_once '../config.php';

if(isset($_POST['submit']) OR isset($_GET['id'])){

    $condition = "";
    $value = "";
    if(isset($_GET['id']) and !empty($_GET['id'])){
        $condition = "id = :value";
        $value = $_GET['id'];
    }
    else if(isset($_POST['submit']) and !empty($_POST['submit'])){
        $condition = "title = :value";
        $value = $_POST['submit'];
    }
    
    $sql = 'SELECT * FROM song WHERE ' . $condition;
    $stmt = $conn->prepare($sql);
    $stmt->execute(['value' => $value]);
    $row = $stmt->fetch();


}else{
    header('location: .');
    exit();
}

?>

<?php
  require_once '../config.php';
  //$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
  $sql = "SELECT id, title FROM song WHere title like 'A%'";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title]);
  // fetch all rows
  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
 require_once '../config.php';
if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case 'value1':
          $sql = "SELECT id, title FROM song WHere title like 'A%'";
          $stmt = $conn->prepare($sql);
          $stmt->execute(['title' => $title]);
          $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
          break;
        case 'value2':
          $sql = "SELECT id, title FROM song WHere title like 'B%'";
          $stmt = $conn->prepare($sql);
          $stmt->execute(['title' => $title]);
          $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
          break;
        case 'value3':
            $sql = "SELECT id, title FROM song WHere title like 'C%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['title' => $title]);
            $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 'value4':
            $sql = "SELECT id, title FROM song WHere title like 'D%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['title' => $title]);
            $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
            break; 
         case 'value5':
          $sql = "SELECT id, title FROM song WHere title like 'E%'";
          $stmt = $conn->prepare($sql);
          $stmt->execute(['title' => $title]);
          $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
          break;
        case 'value6':
          $sql = "SELECT id, title FROM song WHere title like 'F%'";
          $stmt = $conn->prepare($sql);
          $stmt->execute(['title' => $title]);
          $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
          break;
        case 'value7':
            $sql = "SELECT id, title FROM song WHere title like 'G%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['title' => $title]);
            $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 'value8':
            $sql = "SELECT id, title FROM song WHere title like 'H%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['title' => $title]);
            $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
            break;             
            
            case 'value9':
              $sql = "SELECT id, title FROM song WHere title like 'I%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute(['title' => $title]);
              $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
              break;
            case 'value10':
              $sql = "SELECT id, title FROM song WHere title like 'J%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute(['title' => $title]);
              $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
              break;
            case 'value11':
                $sql = "SELECT id, title FROM song WHere title like 'K%'";
                $stmt = $conn->prepare($sql);
                $stmt->execute(['title' => $title]);
                $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break;
            case 'value12':
                $sql = "SELECT id, title FROM song WHere title like 'L%'";
                $stmt = $conn->prepare($sql);
                $stmt->execute(['title' => $title]);
                $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break; 
             case 'value13':
              $sql = "SELECT id, title FROM song WHere title like 'M%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute(['title' => $title]);
              $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
              break;
            case 'value14':
              $sql = "SELECT id, title FROM song WHere title like 'N%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute(['title' => $title]);
              $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
              break;
            case 'value15':
                $sql = "SELECT id, title FROM song WHere title like 'O%'";
                $stmt = $conn->prepare($sql);
                $stmt->execute(['title' => $title]);
                $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break;
            case 'value16':
                $sql = "SELECT id, title FROM song WHere title like 'P%'";
                $stmt = $conn->prepare($sql);
                $stmt->execute(['title' => $title]);
                $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break;
                case 'value17':
                  $sql = "SELECT id, title FROM song WHere title like 'Q%'";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(['title' => $title]);
                  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  break;
                case 'value18':
                  $sql = "SELECT id, title FROM song WHere title like 'R%'";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(['title' => $title]);
                  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  break;
                case 'value19':
                    $sql = "SELECT id, title FROM song WHere title like 'S%'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['title' => $title]);
                    $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case 'value20':
                    $sql = "SELECT id, title FROM song WHere title like 'T%'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['title' => $title]);
                    $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    break; 
                 case 'value21':
                  $sql = "SELECT id, title FROM song WHere title like 'U%'";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(['title' => $title]);
                  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  break;
                case 'value22':
                  $sql = "SELECT id, title FROM song WHere title like 'V%'";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(['title' => $title]);
                  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  break;
                case 'value23':
                    $sql = "SELECT id, title FROM song WHere title like 'W%'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['title' => $title]);
                    $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case 'value24':
                    $sql = "SELECT id, title FROM song WHere title like 'X%'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['title' => $title]);
                    $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    break; 
                    case 'value25':
                      $sql = "SELECT id, title FROM song WHere title like 'Y%'";
                      $stmt = $conn->prepare($sql);
                      $stmt->execute(['title' => $title]);
                      $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      break;
                  case 'value26':
                      $sql = "SELECT id, title FROM song WHere title like 'Z%'";
                      $stmt = $conn->prepare($sql);
                      $stmt->execute(['title' => $title]);
                      $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      break;       
        default:
            # code...
            break;
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
         <img src="/uploads/icons/oops.png" width="280" height="155" title="Logo of a company" alt="Logo of a company" />
        <div style="text-align: center;">Sorry, Na hawl mi hla a um hrih lo or na ngan dan a match lo.</div>
        <p style="text-align: center; font-size: 12px">Tu kan nei mi hla pawl cu tang lam ih um mi pawl an si.</p>

        <br>
        <br>
        <form action="" method="post">
          <select name="select1">
          <option value="value1" <?= $_REQUEST["select1"]=="value1"?" selected='selected'":"" ?>>A</option>
          <option value="value2" <?= $_REQUEST["select1"]=="value2"?" selected='selected'":"" ?>>B</option>
          <option value="value3" <?= $_REQUEST["select1"]=="value3"?" selected='selected'":"" ?>>C</option>
          <option value="value4" <?= $_REQUEST["select1"]=="value4"?" selected='selected'":"" ?>>D</option>
          <option value="value5" <?= $_REQUEST["select1"]=="value5"?" selected='selected'":"" ?>>E</option>
          <option value="value6" <?= $_REQUEST["select1"]=="value6"?" selected='selected'":"" ?>>F</option>
          <option value="value7" <?= $_REQUEST["select1"]=="value7"?" selected='selected'":"" ?>>G</option>
          <option value="value8" <?= $_REQUEST["select1"]=="value8"?" selected='selected'":"" ?>>H</option>
          <option value="value9" <?= $_REQUEST["select1"]=="value9"?" selected='selected'":"" ?>>I</option>
          <option value="value10" <?= $_REQUEST["select1"]=="value10"?" selected='selected'":"" ?>>J</option>
          <option value="value11" <?= $_REQUEST["select1"]=="value11"?" selected='selected'":"" ?>>K</option>
          <option value="value12" <?= $_REQUEST["select1"]=="value12"?" selected='selected'":"" ?>>L</option>
          <option value="value13" <?= $_REQUEST["select1"]=="value13"?" selected='selected'":"" ?>>M</option>
          <option value="value14" <?= $_REQUEST["select1"]=="value14"?" selected='selected'":"" ?>>N</option>
          <option value="value15" <?= $_REQUEST["select1"]=="value15"?" selected='selected'":"" ?>>O</option>
          <option value="value16" <?= $_REQUEST["select1"]=="value16"?" selected='selected'":"" ?>>P</option>
          <option value="value17" <?= $_REQUEST["select1"]=="value17"?" selected='selected'":"" ?>>Q</option>
          <option value="value18" <?= $_REQUEST["select1"]=="value18"?" selected='selected'":"" ?>>R</option>
          <option value="value19" <?= $_REQUEST["select1"]=="value19"?" selected='selected'":"" ?>>S</option>
          <option value="value20" <?= $_REQUEST["select1"]=="value20"?" selected='selected'":"" ?>>T</option>
          <option value="value21" <?= $_REQUEST["select1"]=="value21"?" selected='selected'":"" ?>>U</option>
          <option value="value22" <?= $_REQUEST["select1"]=="value22"?" selected='selected'":"" ?>>V</option>
          <option value="value23" <?= $_REQUEST["select1"]=="value23"?" selected='selected'":"" ?>>W</option>
          <option value="value24" <?= $_REQUEST["select1"]=="value24"?" selected='selected'":"" ?>>X</option>
          <option value="value25" <?= $_REQUEST["select1"]=="value25"?" selected='selected'":"" ?>>Y</option>
          <option value="value26" <?= $_REQUEST["select1"]=="value26"?" selected='selected'":"" ?>>Z</option>
          </select>
          <input type="submit" name="submit" value="Go"/>
        </form>
        <?php // display the song title
          foreach ($songTitle as $song) {
           echo "<a href='details.php?id={$song['id']}'>{$song['title']} <br> </a>";
          } ?>

      </div>
      <br>

      </div>
        <div class="footer bg-light"><img src="../uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
        </div>

    <?php } else { ?>
        <!-- sayem start -->
        <div>Original Key: <?= ucfirst($row['chord']) ?></div><br>

        <div style="font-size:13px"> Hide/Show Keys
        <label class="switch">
        <input type="checkbox" id="myCheckbox" onchange="toggleCheck('transpose-keys')" checked>
        <span class="slider round"></span>
        </label></div>

        <pre data-key=<?= ucfirst($row['chord']) ?> id="pre">
              <?= ucfirst($row['lyrics']) ?>
        </pre>

        <!-- sayem end -->
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3" style="max-width: auto;">
            <div class="card-header">Summary</div>
            <div class="card-body">
              <div class="card-title">Title : <?= ucwords($row['title']) ?>
                <div class="card-title">Master key : <?= strtoupper($row['chord']) ?>
                  <div class="card-title bi bi-123">Hla Number : <?= $row['number'] ?>

                    </br>
                    </br>
                    <p class="card-text"><strong>Download :</strong></p>
                    <span class="social_logo">
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['pdf'] ?>'> <img src="../uploads/icons/file-earmark-pdf.svg" alt="" width="40" height="40"></a>PDF</button>
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['ppt'] ?>'> <img src="../uploads/icons/file-earmark-ppt.svg" alt="" width="40" height="40"></a>PPT</button>
                      <button type="button" class="btn btn-light px-1"><a href='../uploads/<?= $row['pro'] ?>'> <img src="../uploads/icons/file-earmark-play.svg" alt="" width="40" height="40"></a>PRO</button>
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

        <!-- sayem Add JS -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.transposer.js"></script>
        <script type="text/javascript">
        $(function() {
          $("pre").transpose();
        });
        </script>
        <?php } ?>
  </body>
</html>