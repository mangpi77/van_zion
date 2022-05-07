
<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	echo 'Welcome '.$_SESSION['userLoggedIn'].'!';
}
else {
	header("Location: register.php");
}

?>


<?php
  require_once 'config.php';
  //$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
  $sql = "SELECT * FROM song ORDER BY count DESC LIMIT 10";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title]);
  
  // fetch all rows
  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHRISTIAN HLABU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="theme.css">
<link rel = "stylesheet" type = "text/css" media = "print" href = "print.css">


<style>


     .nav-item a{
         color:red;
        
     }
     .navbar-nav{
         color:red !important;
     }
     .nav-link a{
         margin-left:5px;
         border-radius:3px;
     }
     .navbar a{
         color:black !important;
     }


  .hot {
  background-color: #ff4057;
  background-image: url("./uploads/icons/fire.png");
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding-left: 10px;
  padding-right:12px;
  padding-top:8px;
  padding-bottom:8px;
  font-size: 16px;
  width: auto;
  margin-top: 20px;
  border-radius: 3px;
  box-shadow: 0 0 25px #d1cfcf;
  text-align:center;
  }
  .list{
  color:red;
  margin-right: 10px;
  width:35px;
  height:35px;
  display:inline-flex;
  align-items:center;
  justify-content: center;
  font-size:16px;
  background-color:#083358;
  border-radius:50%;
  color:#fff;
  }

a {
  text-decoration: none;
}


fl-table{
    background-color:red;
}
.col{
        margin-bottom:30px;

}
.col-8{
    margin-bottom:50px;
}
.col-md-8{
    margin-bottom:20px;
}
.btn-md{
    margin-left:10px;
}
@media screen and (max-width: 800px){
.col{
    padding-top:10px;
    padding-bottom:10px;
}
.btn-md{
    margin-top:5px;
    margin-bottom:5px;
}
.row{
    border-top:solid;
    border-color:#e3e3e3;
}

.col-8{
    margin-bottom:20px;
}
.col-md-8{
    margin-bottom:20px;
}

}


</style>

</head>
<?php include './components/main_menu.php'?>


<body class="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto rounded p-4">
                <h5 class="text-center"><img src="./uploads/icons/logo_color.png" width="250" height="250">
                    <hr class="my-1">
                    <p class="text-center text-dark">A hnuai ah hla hmin ngan aw la hawl aw</p>
                    <?php require_once 'components/search_bar.php';?>
            </div>
            <div class="col-md-8 mx-auto" style="position: relative;margin-top: -38px;margin-left: 215px;">
                
                <div class="col-md-12" id="show-list">
                    <!-- Here autocomplete list will be display -->
                </div>
                <div class = "col text-center">
            <button type="button" class="btn btn-light btn-md"><a href= '../page/songs.php'>Song Catalog</a></button>
            <button type="button" class="btn btn-light btn-md"><a href= '../page/request.php'>Request Song</a></button>
            </div>
            </div>
        

        </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>


<div class="container">
    <div class="row mt-2">
        <div class="col-md-8 mx-auto">
            <div class="table-wrapper">

               <p class = "hot">Top Trending</p>
                
                <table class="fl-table mt-4">
                    
                   
                    
                     <tr>
                        <th style="background-color:#083358; color:white;width:5%">No.</th>
                        <th style="background-color:#083358; color:white; width:60%">Title</th>
                        <th style="background-color:#888888; color:white;width:10%">Key</th>
                    </tr>
                   
                    <?php // display the song title and chord  
                
                       $i = 0;
                        while ($i <= 5) {
                    foreach ($songTitle as $song) {
                     $i++; 
                    echo "<tr>"; 
                    echo "<td><div class = 'list'>".$i."</td>";
                    echo "<td><a color: ##f0f0f0' href='../page/details.php?id={$song['id']}'>{$song['title']} <br> </a></td>";
                    echo "<td><a color: ##f0f0f0' href='../page/details.php?id={$song['id']}'>{$song['chord']} <br> </a></td>";
                     }  } ?>
                    

                    </tr>
                </table></br>
            </div>

        </div>


  
        <?php require_once 'components/footer_main.php'?>
        <?php require_once 'components/scrollup.php'?>
  </div>
</div>

</html>