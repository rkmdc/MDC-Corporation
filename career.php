<?php 
include './util.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="<?php echo $Meta_Description; ?>"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->

        <!-- Title -->
        <title><?php echo $Website_Title; ?></title> 

        <!-- Favicon -->

        <link rel="icon" href="<?php echo $Website_Favicon; ?>" type="image/x-icon"/>

        <link rel="stylesheet" type="text/css" href="css/reset5.googlecode.com_hg_reset.min.css">
        <link href="css/default_style.css" rel="stylesheet" />
        <link href="css/menu.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css_1/style.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/Home_Css.css">
        <style>

            .inputside {
                color: #395870;
                width: 100%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }
            .form1{
                font-family: sans-serif;
                margin:0 auto;display:block;width:43%;
            }

            .lable{margin-top:19px;}
            .textarea{
                color: #395870;
                width: 99%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }

            .messagebox{


                margin-left:43%;
                margin-top: 42%;
                color: #44CF54;


            }

            .file_input_hidden{
                color:#395870;width: 99%;

            }
            .filewrapper input{
               
            
            cursor: pointer;
            }

            /*            .success{
                            background-image: -webkit-gradient(
                                linear,
                                left top,
                                left bottom,
                                color-stop(0.38, #44CF54),
                                color-stop(1, #219E2A)
                                );
                            background-image: -o-linear-gradient(bottom, #44CF54 38%, #219E2A 100%);
                            background-image: -moz-linear-gradient(bottom, #44CF54 38%, #219E2A 100%);
                            background-image: -webkit-linear-gradient(bottom, #44CF54 38%, #219E2A 100%);
                            background-image: -ms-linear-gradient(bottom, #44CF54 38%, #219E2A 100%);
                            background-image: linear-gradient(to bottom, #44CF54 38%, #219E2A 100%);
                        }
                        .alert{
                            background-image: -webkit-gradient(
                                linear,
                                left top,
                                left bottom,
                                color-stop(0.38, #CF4444),
                                color-stop(1, #9C2222)
                                );
                            background-image: -o-linear-gradient(bottom, #CF4444 38%, #9C2222 100%);
                            background-image: -moz-linear-gradient(bottom, #CF4444 38%, #9C2222 100%);
                            background-image: -webkit-linear-gradient(bottom, #CF4444 38%, #9C2222 100%);
                            background-image: -ms-linear-gradient(bottom, #CF4444 38%, #9C2222 100%);
                            background-image: linear-gradient(to bottom, #CF4444 38%, #9C2222 100%);
                        }*/

        </style>
    </head>
    <body >


        <div class="menuheader">

            <div class="flagdiv">
                Welcome India FDIS

            </div>
            <div class="flagimage">
                <img src="images/Flag_of_India.svg" style="width: 88%;">
            </div>
            <?php include './Home_Menu.php'; ?>
        </div>
        <?php
        if (!isset($_GET['result'])) {
            
        } else {
            ?>
            <div class="messagebox <?php
            if ($_GET['result'] == 1) {
                echo 'success';
            } else {
                echo 'alert';
            }
            ?> ">

                <?php
                if ($_GET['result'] == 1) {
                    echo 'Your application has been sent.';
                } else {
                    echo 'Your application has not been sent.';
                }
                ?>

            </div> 
            <?php
        }
        ?>

        <div class="container" style="width: 70%;">

            <div style="margin-top: 54px;;">
                <h3>Application Form</h3>


                <form action="sendmail_Career.php" class="form1" id="myForm" method="POST" enctype="multipart/form-data">

                    <p class="lable">First Name </p>
                    <input value='' id="fname" name="fname" placeholder="" required="required" type="text" class="inputside">


                    <p class="lable">Last Name </p>
                    <input value='' id="lname" name="lname" placeholder="" required="required" type="text" class="inputside">


                    <p class="lable">Contact Number</p>
                    <input value='' id="contactno" name="contactno" placeholder=""required="required" type="text" class="inputside">

                    <p class="lable">Address</p>
                    <textarea  id="projinfo" name="address" placeholder="" required="required" class="textarea" rows="4" cols="50">
                    </textarea>



                    <p class="lable">Email </p>
                    <input value='' id="email" name="email" placeholder="" type="email" required="required" class="inputside">


                    <p class="lable">Photo Upload </p>
                    <span class="filewrapper"> <input type="file" class="file_input_hidden" onchange="javascript: document.getElementById('fileName').value = this.value" class="inputside" name="pic" accept="image/*" style=""></span>

                    <div style="clear:both"></div>

                    <input type="Submit" value="SUBMIT"  style=" width: auto; 
                           margin-left: 22%;
                           position: relative;

                           margin: 0 auto!important;
                           cursor:pointer;
                           display: block;
                           padding: 6px!important">


                </form>


            </div>

        </div>

        <div style="clear:both"></div>

        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images_1/MDC--corp-logo-with-TM.png"></a>

        <?php include './footer.php'; ?>
        <script>
            $(document).ready(function() {

                $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
    </body>
</html>
