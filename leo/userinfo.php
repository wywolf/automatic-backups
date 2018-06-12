<?php
$file_str = trim(file_get_contents('./name.txt'));
$arr =explode("\n",$file_str);
// var_dump($arr);
$line=[];
foreach($arr as $item){
    $line[] = explode("|",$item);
}
// var_dump($line) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border ="1">
        <thead>
        <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>邮箱</th>
        <th>地址</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($line as $key => $value):?>
                <tr>
                    <?php foreach ($value as $key => $value):?>
                        <!-- <?php echo strpos($value,"/",1) ?> -->
                    <?php if(strpos($value,"http://") === 1): ?>
                        <!-- <?php echo strpos($value,"http://")?> -->
                            <td>
                                <a href ="<?php echo $value?>"><?php echo (substr($value,8))?>
                                </a>
                            </td>
                                <?php else: ?>
                        <td>
                             <?php echo($value) ?>
                        </td> 
                        <?php endif ?>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>