<?php include './util.php';
 session_start();
?>
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
            textarea{
                color: #395870;
                width: 99%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }
            .lable{margin-top:19px;}


            .map{

                display: none;
            }
            .addrreg{display: none;}



            .contactbox{
                
             color: #44CF54;

                margin-left:23%;
                margin-top: 35%;
                
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
            }
*/



        </style> 

    </head>
    <body>

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
        if (!isset($_SESSION['result'])) {
            
        } else {
            ?>
            <div class="contactbox <?php
            if ($_SESSION['result'] == 1) {
                echo 'success';
            } else {
                echo 'alert';
            }
            ?> ">

                <?php
                if ($_SESSION['result'] == 1) {
                    echo 'Your message has been sent.';
                } else {
                    echo 'Your application has not been sent.';
                }
                ?>

            </div> 
            <?php
                unset($_SESSION('result'));
        }
        ?>







        <div class="container" style="width: 70%;
             /* top: 91px; */
             overflow: hidden;
             outline: none;
             cursor: -webkit-grab;">
            <h2 style="margin-left: 7%;margin-top: 6%; color: #444;">Get in touch with us:</h2>
            <div style="margin-top: 16px;">
                <div style="float:left;width:50%">
                    <form action="sendmail2.php" id="myForm" method="post" style="width: 70%;
                          /* float: left; */
                          font-family: sans-serif;
                          margin: 0 auto;
                          display: block;">



                        <p class="lable">Name</p>
                        <input class="inputside" value='' id="name" name="name" placeholder="" required="required" type="text" />		


                        <p class="lable">Email</p>
                        <input class="inputside" name="email" id="email" class='email' value='' required="required" type="email" />



                        <p class="lable">Subject</p>
                        <input class="inputside" name="subject" id="subject" class='subject' required="required" type="text" />


                        <p class="lable">Message</p>
                        <textarea class="message" id="message" required="required" name='message'></textarea>

                        <input type="Submit"   value="SUBMIT" style=" width: auto; 
                               margin-left: 22%;
                               position: relative;

                               margin: 0 auto!important;
                               margin-top: 10px!important;
                               display: block;
                                 cursor:pointer;
                               padding: 6px!important">                   
                    </form>

                </div>
                <div style="float:left;width:50%">
                    <div class="parent">
                        <div class="wrapper">
                            <div class="map" id="map" >
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mdc+corporation+namjoshi+pune&amp;aq=&amp;sll=18.516964,73.843409&amp;sspn=0.012696,0.021136&amp;ie=UTF8&amp;hq=mdc+corporation+namjoshi&amp;hnear=Pune,+Maharashtra&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2290464802176146632&amp;ll=18.510073,73.84362&amp;output=embed"></iframe><br />   
                            </div>
                            <div class="map1" id="map1">
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mdc+corporation+corporation+pune&amp;aq=&amp;sll=18.510073,73.84362&amp;sspn=0.025394,0.042272&amp;ie=UTF8&amp;hq=mdc+corporation+corporation&amp;hnear=Pune,+Maharashtra&amp;ll=18.516964,73.843409&amp;spn=0.025393,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=16236965411668699858&amp;output=embed"></iframe><br/>

                            </div>
                        </div>
                    </div>


                    <div class="btn11">   
                        <div class="emaildiv" style="font-family: sans-serif; font-size: 16px;margin-top:10px;"><b>Email:</b>info@mdccorp.co.in</div>
                        <div class="button11" style="margin-top:10px;">


                            <input type="button" id="corp" value="Corporate Office" class="corp" onclick="corporateClick();" style="cursor:pointer">
                            <input type="button" id="regs" value="Registration Office" class="regs" onclick="registerClick();"style="cursor:pointer">
                            <p style="margin-top:10px;" class="addrcorp" id="addrcorp">
                                MDC Corporation (India) Pvt.Ltd.3rd Floor Deccan Avenue Pune.
                            </p>
                            <p style="margin-top:10px;" class="addrreg" id="addrreg">
                                Namjoshi Building, L.B.S Road, Navi peth Pune.
                            </p>

                        </div>
                    </div>


                </div>                  
            </div>
            <div style="clear:both"></div>
        </div>



        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images_1/MDC--corp-logo-with-TM.png"></a>

        <?php include './footer.php'; ?>
        <script type="text/javascript">

            function corporateClick()
            {
                //var corpn=document.getElementById("corp");
                //corpn.style.display="block";
                document.getElementById("map").style.display = "none";
                document.getElementById("map1").style.display = "block";
                document.getElementById("addrcorp").style.display = "block";
                document.getElementById("addrreg").style.display = "none";
            }

            function registerClick()
            {
                //var regst=document.getElementById("regs");
                //regst.style.display="block";
                document.getElementById("map").style.display = "block";
                document.getElementById("map1").style.display = "none";
                document.getElementById("addrcorp").style.display = "none";
                document.getElementById("addrreg").style.display = "block";

            }


        </script> 
        <script>
            $(document).ready(function() {

                $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
    </body>
</html>
