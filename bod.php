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

         <!--Favicon-->
        <link rel="icon" href="<?php echo $Website_Favicon; ?>" type="image/x-icon"/>

        <link rel="stylesheet" type="text/css" href="css/reset5.googlecode.com_hg_reset.min.css">
        <link href="css/default_style.css" rel="stylesheet" />
        <link href="css/menu.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css_1/style.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/Home_Css.css">
        <style>

            .mdpara1{width: 68%;
                     float:left;
                     text-align: justify;margin-top: 9%;}
            .mdpara{width: 68%;
                    float:left;
                    text-align: justify;margin-top: 9%;}
            .mdimg{width:32%;float:left}
            .mdimg1{width:32%;float:left;margin-top: 5%;}
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

        <div class="container" style="top:35px;" >

            <div class="BOD_Wrapper" style="line-height: 1.3em;">

                <h2 style="text-align: center;color: #444;font-family: sans-serif;margin-top: 3%;" >Board Of Director</h2>

                <div class="mdimg"> <img id="md" align="center" src="img/Pushkar Tapre2.jpg" style="width: 100%" /></div>


                <div class="mdpara">
                    <b style="text-transform: uppercase;">MR. PUSHKAR M.TAPRE</b><br/>

                    Pushkar Tapre is the co-founder and one of the managing directors of MDC Corporation. He holds a Bachelor's degree in Commerce and a Diploma in Event Management.

                    With mentoring and encouragement from his father,he learnt the fundamentals of business management and believes monetary gain is the by-product of his commitment towards inclusive growth.

                    His continuing motivation and dedication has seen the company grow from MD Communications, a loan providing companyinto MDC Corporation which has business interests in finance, lifestyle, real estate, health, branding and information technology. Each MDC group company has a different fieldof operation but together, they touch all the spheres ofhuman life with unique quality deliverables.
                </div>
                <div style="clear: both;"></div>


                <div class="mdpara1">
                    <b style="text-transform: uppercase;">MR. MANISH MUTHA</b>
                    <br/>
                    Simple, Dedicated and Hardworking, these three qualities define the man that is Manish Mutha. His journey from a being a newspaper distributor manager into one of the managing directors of a company which handles loans of over Rs. 500 crore a year is truly remarkable.

                    He holds a  Masters Degree in Commerce, a Diploma in Event Management and a PGDM in Business Management. An ambition to explore new frontiers drove him to quit his job and collaborate with his friend and now colleague Pushkar, to start MD Communications. 

                    Manish focuses on understanding a client’s requirements and building relationships.  Today MDC FinCorp, the flagship company of MDC Corporation has associations with over 60 banking and financial institutions in the loan provision sector and innumerable satisfied clients all over Maharashtra.
                </div> 
                <div class="mdimg1"> <img id="md" align="center" src="img/Manish Mutha1.jpg" style="width: 100%"> </div>  

            </div>

        </div>


        <div style="clear: both;"></div>

        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images_1/MDC--corp-logo-with-TM.png"></a>

        <?php include './footer.php'; ?>
        <script>
            $(document).ready(function() {

                $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
    </body>
</html>
