<html>
<meta charset="utf-8">
<?php
$status=file_get_contents("status");
if($status=="konzatu") echo "混雑しています";
if($status=="aki") echo "空いています";
?>
</html>