<?php
file_put_contents('key.php', '<?php $SG_API_KEY = "' . $_POST['API_KEY'] . '";');
header('Location: emailform.php');
