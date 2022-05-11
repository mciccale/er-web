<?php

include("db.php");

if (isset($_POST['search_boss'])) {
    // CHECK THE INPUT
    if ($_POST['name'] == '') { echo "No Input Given"; exit();}

    $name = $mysql->escape_string($_POST['name']);

    $query = $mysql->query("
        SELECT *
        FROM boss
        WHERE name LIKE '%{$name}%'
    ");
?>

<div class="result-count">
    Found <?php echo $query->num_rows; ?> results.
</div>

<?php
    if ($query->num_rows) {
        while($r = $query->fetch_object()) {
            ?>
                <div class="result">
                    <a href="#"><?php echo $r->name . ", " . $r->description; ?></a>
                </div>
            <?php
        }
    }
}

?>