<?php
require("libs/config.php");
$page = easy_decrypt($_GET["id"]);
$pageDetails = getPageDetailsByName($page);
include("header.php");
?>
<div class="row main-row">
    <div class="8u">
        <section class="left-content">
             <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
            <img src="css/images/3.jpg" alt="">
            <img src="css/images/4.jpg" alt="">
            <img src="css/images/5.jpg" alt="">
        </section>
    
    </div>
    <!--sidebar starts-->
	<?php
	include("sidebar.php");
	?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>