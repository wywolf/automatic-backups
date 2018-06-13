<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <title>Document</title>
</head>

<body>
    <div class="container mt-5 ">
        <h1>音乐列表</h1>
        <hr>
        <button type="button" class="btn btn-warning">添加音乐</button>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <label class="c-input c-checkbox">
                                <input type="checkbox">
                                <span class="c-indicator"></span>
                            </label>
                    </th>
                    <th>标题</th>
                    <th>歌手</th>
                    <th>音乐</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Heartbeat (Nightcore) [PØRPEL Remix]</td>
                    <td>PØRPEL</td>
                    <td>
                    <audio src="music/Heartbeat (Nightcore) [PØRPEL Remix].mp3" controls="controls"></audio>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger-outline">删除</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Friendships (Original Mix)</td>
                    <td>Pascal Letoublon</td>
                    <td>
                        <audio src="music/Friendships (Original Mix)-Pascal Letoublon.mp3" controls="controls"></audio>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger-outline">删除</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Five Hundred Miles</td>
                    <td>Justin Timberlake,Carey Mulligan,Stark Sands</td>
                    <td> <audio src="music/Justin Timberlake,Carey Mulligan,Stark Sands - Five Hundred Miles.mp3" controls="controls"></audio></td>
                    <td>
                        <button type="button" class="btn btn-danger-outline">删除</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>