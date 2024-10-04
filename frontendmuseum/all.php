<?php include "header_inc.php" ?>
<?php
    include "data/data.php";

    foreach ($exhibits as $object):
?>
    <article>
        <h2><?php echo $object["title"] ?></h2>
        <p><?php echo $object["description"] ?></p>
        <img src="gallery/<?php echo $object["image"] ?>"
                fetchpriority="high" decoding="sync">
    </article>
<?php endforeach; ?>
<?php include "foorter_inc.php" ?>