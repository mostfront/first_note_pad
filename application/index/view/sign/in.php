{extend name="glob/base" /}

{block name="content"}
<div class="col-sm-offset-3 col-sm-6">
<div class="page-header">
    <h1><span>登陆</span></h1>
</div>
<div>
<form  action="{:url('index/sign/in_check')}" method="post">
{:token()}

<div class="form-group">
<label for="username">用户名</label>
  <input name="username" type="text" class="form-control" id="username" placeholder="请输入用户名" >
</div>
<div class="form-group">
  <label for="password">密码</label>
  <input name="password" type="password" class="form-control" id="password" placeholder="请输入密码">
</div>
  <button type="submit" class="btn btn-default">登陆</button>
</form>
</div>
</div>
{/block}