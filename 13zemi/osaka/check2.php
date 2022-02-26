<html>
<meta charset="utf-8">
<?php
$status=file_get_contents("status2");
if($status=="konzatu2") echo "混雑しています";
if($status=="aki2") echo "空いています";
?>
</html>