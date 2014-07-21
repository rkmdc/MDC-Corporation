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

            <div style="text-align:justify;line-height: 1.3em; margin-top: 7%;">
                <h2 style="text-align:center;">About Us</h2>
                <br/>
                <br/>
                <p><h6>VISION</h6><br/>
                To be known as an innovative multi-disciplinary business
                conglomerate making “a difference” to its stake holders.
                To touch every sphere of human life through diverse
                business verticals enriching it further. To provide strong
                global foothold to all our products and services by
                consistently adding value to our customers.
                </p><br/>
                <p><h6>MISSION</h6><br/>
                To establish ourselves as a business entity unique to our
                values, to create notable benchmarks on our journey to
                growth and prosperity...To expand through our business
                endeavors that promise sustained growth. To lead in all
                sectors we have ventured and carve a niche in the market
                with our unique deliverables. To establish MDC globally and
                stand apart on the merit of our quality, by providing the
                best value to our stake-holders.
                </p><br/>
                <p><h6>OUR CORE VALUES</h6><br/>
                Our corporate philosophy is founded on principles of
                Honesty, Simplicity and Integrity. We practice these three
                principles in our everyday life as part of our personality and
                life at MDC. Our business policy decisions are largely
                influenced by these principles of which every MDC
                member is truly proud of.
                </p>

            </div>
        </div>
        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images_1/MDC--corp-logo-with-TM.png"></a>

        <?php include './footer.php'; ?>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready(function() {

                $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
    </body>
</html>

