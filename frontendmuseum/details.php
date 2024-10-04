<?php include "header_inc.php" ?>
<ul>
<?php

    // Request all errors to be reported
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    include("classes.php");
    $db = new DB();
    
    try {
        $exhibits = $db->execute("SELECT * FROM Exhibits");
        $object = $exhibits[$_GET["index"]];
    } catch (Exception $e) {
        echo "<h4>ERROR</h4>";
    }

?>
    <article>
        <h2><?php echo $object["title"] ?></h2>
        <p><?php echo $object["description"] ?></p>
        <img src="gallery/<?php echo $object["image"] ?>"
                fetchpriority="high" decoding="sync">
    </article>

<?php include "footer_inc.php" ?>