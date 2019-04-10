<?php
$view->extend("MauticCoreBundle:Default:content.html.php");
$view['slots']->set('headerTitle',"Import from Google Sheet");
?>
<div class="wrapper">
    <p>
        Form has been submitted, Any worksheet related to submitted information will be queued for Import.
        Result: <?php echo $message; ?>
    </p>
</div>