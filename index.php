<html>
    <title>JSON Readable</title>
    <body>
<?php
if(isset($_POST['json'])){
    $json = $_POST['json'];
    $json_array = json_decode($json, true);
    echo '<pre>';
    print_r($json_array);
    echo '</pre>';
}
else {
    ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <textarea name="json" cols="40" rows="10"></textarea>
            <input type="submit" name="submit" value="MAKE READABLE"/>
        </form>
    <?php
}
?>
    </body>
</html> 
