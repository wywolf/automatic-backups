<?php
    function farm (){
        global $error_msg;
        global $error;

        if(empty($_POST['title'])){
            $error_msg = 'title';
            // var_dump($_POST);
            return;
        };
        if(empty($_POST['singer'])){
            $error_msg = 'singer';
            // echo $error_msg1;
            return;
        };

        if($_FILES['source']['error'] != UPLOAD_ERR_OK){
            $error_msg = 'source';
            // echo $error_msg;
            return;
        };

        
        if (1 * 1024 * 1024 > $_FILES['source']['size'] || $_FILES['source']['size'] > 10 * 1024 * 1024) {
            $error = 'source';
            return;
          }
        var_dump($_FILES);

    };
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        farm();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.css"> -->
    <title>Document</title>
</head>

<body>

   <!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>




    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <div class="container mt-5">
            <h1>增加音乐</h1>
            <hr>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">标题</span>
                <input type="text" id="title" class="form-control <?php echo isset($error_msg)&& $error_msg == 'title'? 'is-invalid':''; ?>" placeholder="请输入标题" aria-describedby="basic-addon1" name="title">
                <small class="invalid-feedback">请输入标题</small>
            </div>

            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">歌手</span>
                <input type="text" class="form-control <?php echo isset($error_msg) && $error_msg == 'singer'? 'is-invalid':''; ?>" placeholder="请输入歌手" aria-describedby="basic-addon1" id="singer" name="singer">
                <small class="invalid-feedback">请输入歌手</small>
            </div>
            <br>

            <!-- <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">海报</span>
                <input type="file" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="image" name="image" multiple>
                <small class="invalid-feedback">用户名不能为空</small>
            </div>
            <br> -->

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">音乐</span>
                <input type="file" class="form-control <?php echo isset($error_msg) && $error_msg == 'source'? 'is-invalid':''; ?>" placeholder="请上传音乐" aria-describedby="basic-addon1" id="source" name="source">
                <small class="invalid-feedback">用户名不能为空</small>
            </div>
            <br>

            <button type="submit" id="saveBtn" class="btn btn-success-outline  btn-info btn-block">保存</button>
            <br>
        </div>
    </form>



    <script src="js/jquery-3.2.1.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script>
        // !function(){
        // $('#myModal').modal(true)
        // }();
    </script>
</body>

</html>