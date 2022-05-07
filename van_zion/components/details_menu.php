     <link rel="stylesheet" media="print" href="print.css">
     <style>
         
    .navbar a{
         color:white !important;
         text-size:24px;
         margin-left:5px;
         margin-right:5px;
         border-radius:3px;

     }
     
     .navbar a:hover{
         color:gray !important;
         text-size:24px;
         margin-left:5px;
         margin-right:5px;
         border-radius:3px;

     }
     .navbar:hover !important{
         background-color:red;
         color:gray;
     }
     
      .navbar-nav{
         margin-left:-40px;
         margin-right:5px;
         margin-top:40px;
         color:gray;
     }
     .navbar-nav:hover !important{
         color:gray;
     }

     .nav-link:hover{
         border-radius:3px;
         color:gray;
     }
 
     @media screen and (max-width: 800px){
    .navbar-nav{
         margin-left:0;
         margin-right:0;
         margin-top:0;
     }
     }
     }
     </style>

 <nav class="navbar navbar-expand-lg navbar-light bg-primary  navbar-right">

                <a class="navbar-brand" href="../"><embed src="../uploads/icons/logo_only_white.png"
                            height="100" width="105px"></a>


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon" style="color:#fff"></span>
                </button>
                
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-left mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/page/songs.php">SONG CATALOG</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/page/request.php">REQUEST SONG</a>
                        </li>
                    </ul>
                    <form class = "search-form" action="details.php" method="post">
                        <div class="input-group textbox-rounded">
                            <input type="text" name="search" id="search"
                                class="form-control form-control-md textbox-rounded border-primary"
                                placeholder="Search..." autocomplete="on" required>
                                <input type="submit" name="submit" value="Search"
                                    class="btn btn-primary textbox-rounded">
                            </div>
                    
                    </form>
            </nav>
