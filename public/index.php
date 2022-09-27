<?php
require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_title();?></title>
    <?php
    echo get_head();
    ?>
</head>
<body>
<?php
get_header();
get_content();
get_footer();
echo get_foot();
?>
</body>
</html>
