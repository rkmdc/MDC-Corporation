<div class="navigation" style="top: 15px;">
    <ul>
        <li class="main_menu" ><a href="<?php
            if ($Menu_Active = -1) {
                echo 'index.php';
            } else {
                echo '#';
            }
            ?>">Home</a></li> 
        <li id="drop" class="main_menu"><a href="about.php" >About Us</a>
            <ul id="dropdown_menu">
                <li style=""></li>
                <li><a href="MD.php"  style="color: #575756;font-weight: bold;" >MD's Desk</a></li>
                <li><a href="bod.php" style="color: #575756;font-weight: bold;">Board of Director</a></li>
            </ul>
        </li>
        <li class="main_menu"><a href="career.php">Careers</a></li>
        <li class="main_menu"><a href="contact.php">Contact Us</a></li>
    </ul>
</div>