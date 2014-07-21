<div class="navigation" >
    <ul>
        <li class="main_menu" ><a href="<?php if ($Menu_Active = -1) {
    echo 'index.php';
} else {
    echo '#';
} ?>">Home</a></li>
        <li id="drop" class="main_menu"><a href="about.php" >About Us</a>
            <ul id="dropdown_menu">
                <li><a href="MD.php">MD's Desk</a></li>
                <li><a href="bod.php" >Board of Director</a></li>
            </ul>
        </li>
        <li class="main_menu"><a href="career.php">Careers</a></li>
        <li class="main_menu"><a href="contact.php">Contact Us</a></li>
    </ul>
</div>