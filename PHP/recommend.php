<?php
$english = $_POST['english'];
$malay = $_POST['malay'];
$science = $_POST['science'];
$math = $_POST['math'];
$history = $_POST['history'];
$geography = $_POST['geography'];
$lifeskills = $_POST['lifeskills'];
$religion = $_POST['religion'];
$arts = $_POST['arts'];
$output = shell_exec("python ../Python/TensorFlowTest.py $english $malay $science $math $history $geography $lifeskills $religion $arts");
echo $output;
    
?>