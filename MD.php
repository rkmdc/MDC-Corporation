<?php include './util.php'; ?>
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
            #md{width:88%;margin-top: 1px;}

            .mdpara{width: 79%;
                    margin: 0 auto;
                    display: block;
                    text-align: justify;margin-top:10px;line-height: 1.3em}
            .mdimg{width:32%;margin:0 auto;display:block;}
            .lable{margin-top:19px;}
            .textarea{
                width: 99%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }
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

        <div class="container">
            <div class="BOD_Wrapper" style="margin-top: 54px;
                
                 /* margin-bottom: 100px; */
                 height: 579px;padding-right: 15px;" >

                <h2 style="text-align: center; color: #444; font-family: sans-serif;" >Managing Director</h2>
                <div class="mdimg"> <img id="md" src="img/Mr Mohan Tapre2.jpg">   </div>
                <p class="mdpara">

                    <b style="text-transform: uppercase;"> Shri. Mohan Krishnaji Tapre </b> is the guiding light and pioneer of the MDC family. He holds a Bachelor's Degree in Commerce.

                    His illustrious journey began with Milan Medico which was a distributor for Zandu Balm. This company soon flourished into Milan Distributors, which had distributorship of well known FMCG and Medical brands.
                    Milan Distributors first brought Society Tea to Pune and this laid the foundation stone for MD Enterprises,MD Communications and all the success that followed. 

                    The Tapre family has also greatly contributed to the culture of Pune, being owners of the oldest cinema hall in Pune - Kirloskar Natyagruha (now known as Vasant Theatre) founded in 1905 where distinguished artists like P.L Deshpande, Bal Gandharva and Chhota Gandharva have performed. Mr.Tapre is also an active philanthropist.</p> 

            </div>

        </div>



        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images_1/MDC--corp-logo-with-TM.png"></a>

        <?php include './footer.php'; ?>
        <script>
            $(document).ready(function() {

                $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
    </body>
</html>
