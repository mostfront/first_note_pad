{extend name="glob/base" /}

{block name="content"}
<div class="page-header">
    <h1><span>管理员 添加</span><small class="pull-right"><a href="{:url('admin/auser/add')}" class="btn
    btn-primary">添加</a></small></h1>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>用户名</th>
                <th>管理</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>username</td>
                <td>
                    <a href="#" class="btn btn-default">修改</a>
                    <a href="#" class="btn btn-danger">删除</a>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>username</td>
                <td>
                    <a href="#" class="btn btn-default">修改</a>
                    <a href="#" class="btn btn-danger">删除</a>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>username</td>
                <td>
                    <a href="#" class="btn btn-default">修改</a>
                    <a href="#" class="btn btn-danger">删除</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{/block}

