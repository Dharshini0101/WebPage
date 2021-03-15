<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'Name'     => $_POST['name'],
        'Email'    => $_POST['email'],
        'Mobile No'    => $_POST['cell'],
        'Date of birth' => $_POST['dob'],
        'Username'     => $_POST['username'],
        'Password'     => $_POST['password']
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>