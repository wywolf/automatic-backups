
<?php
    $user =$_POST['user'];
    $age =$_POST['age'];
    file_put_contents('./demo.txt',$user .'-' .$age ."\n",FILE_APPEND);
    echo json_encode(['success'=>true,'message'=>'成功']);
?>

