<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" ">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="<?php echo url('index/gbook/save');?>" method='post'>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows='5' name='content' class='form-control' placeholder='请输入留言'></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <input type='text' name='username' class='form-control' placeholder='请输入用户名' />
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <input type='submit' class="btn btn-primary pull-right" value='提交留言' />
                    </div>
                </div>
            </form>
        </div>

    <?php foreach($rows as $row):?>
        <div class="row well">
            <div class="col-sm-8">{$row.username}</div>
            <div class="col-sm-4">
                <span class='pull-right'>{$row.create_time|date='Y-m-d H:i:s'}</span> 
            </div>
            <div class="col-sm-8">
                {$row.content} 
            </div>
        </div>
    <?php endforeach;?>
    {$rows->render()|raw}

    </div>
</body>
</html>