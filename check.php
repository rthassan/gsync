<?php

$data = file_get_contents("php://input");
$parsedData = json_decode($data);
print_r($parsedData->userId);

return 'dishkooo!';


?>
