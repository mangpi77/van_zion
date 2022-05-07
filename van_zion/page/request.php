<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="../theme.css">
    <link rel="stylesheet" href="../stylesheet.css">
    <link rel="stylesheet" href="request.css">

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(e) {
        $("#frmContact").on('submit', (function(e) {
            e.preventDefault();
            $('#loader-icon').show();
            var valid;
            valid = validateContact();
            if (valid) {
                $.ajax({
                    url: "contact_mail.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#mail-status").html(data);
                        $('#loader-icon').hide();
                    },
                    error: function() {}

                });
            } else {
                $('#loader-icon').hide();
            }
        }));

        function validateContact() {
            var valid = true;
            $(".demoInputBox").css('background-color', '');
            $(".info").html('');

            if (!$("#userName").val()) {
                $("#userName-info").html("(required)");
                $("#userName").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#userEmail").val()) {
                $("#userEmail-info").html("(required)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-info").html("(invalid)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#subject").val()) {
                $("#subject-info").html("(required)");
                $("#subject").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#content").val()) {
                $("#content-info").html("(required)");
                $("#content").css('background-color', '#FFFFDF');
                valid = false;
            }

            return valid;
        }

    });
    </script>

</head>


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

      


<div class = "wrapper">
         <?php include '../components/details_menu.php'?>
            <div class="col-md-8 mx-auto">

                <div class="form-title">
                <div><strong>Request Song</strong></div><br>
                </div>

                <form id="frmContact" action="" method="post">
                    <div id="mail-status"></div>
                    <div>
                        <label style="padding-top: 20px;">Name</label> <span id="userName-info"
                            class="info"></span><br /> <input type="text" name="userName" id="userName"
                            class="inputBox">
                    </div>


                    <div>
                        <label style="padding-top: 20px;">Email</label> <span id="userName-info">
                            <input name="userEmail" id="userEmail" class="inputBox">
                    </div>
                    <div>

                        <input type="hidden" name="subject" id="subject" class="inputBox" value="Hla Request">
                    </div>
                    <div>
                        <label>Details</label> <span id="content-info" class="info"></span><br />
                        <textarea name="content" id="content" class="inputBox" rows="3"
                            placeholder="Zangfah ten details zet in, in ngan sak hram aw."></textarea>
                    </div>
                    <div style="margin-bottom:90px">
                        <button type="submit" class="btn btn-primary id="send" name="send" value="Send"">Send</button>
                    </div>
                </form>
                <div id="loader-icon" style="display: none;">
                    <img src="LoaderIcon.gif" />
                </div>

               
            </div>
        </div>
         <?php include '../components/footer_main.php' ?>
            </div>
            </div>
</body>
