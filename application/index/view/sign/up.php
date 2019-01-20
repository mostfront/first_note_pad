{extend name="glob/base" /}

{block name="content"}
<div class="col-sm-offset-3 col-sm-6">
<div class="page-header">
    <h1><span>注册</span></h1>
</div>

<div>
<form  action="{:url('index/sign/up_save')}" method="post">
{:token()}

<div class="form-group">
<label for="username">用户</label>
  <input name="username" type="text" class="form-control" id="username" placeholder="请输入用户名" >
</div>
<div class="form-group">
  <label for="password">密码</label>
  <input name="password" type="password" class="form-control" id="password" placeholder="请输入密码">
</div>
<div class="form-group">
<label for="nickname">昵称</label>
  <input name="nickname" type="text" class="form-control" id="nickname" placeholder="请输入昵称" >
</div>
<div class="form-group">
<label for="phone">电话</label>
  <input name="phone" type="text" class="form-control" id="phone" placeholder="请输入电话" >
</div>
<div class="form-group">
<label for="email">邮箱</label>
  <input name="email" type="text" class="form-control" id="email" placeholder="请输入邮箱"  >
</div>

  <button type="submit" class="btn btn-default">注册</button>
</form>
</div>
</div>
{/block}