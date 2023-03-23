<form action="GET">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1">
    <input type="submit">
</form>

<?php
    if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
        echo "не отмечен";
    }
    if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
        echo "отмечен";
    }
?>
