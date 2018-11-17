{extend name="glob/base" /}

{block name="content"}
<div class="page-header">
    <h1><span>用户 {$typeName}</span></h1>
</div>

<div class="col-sm-4">
<form  action="{:url('admin/user/save')}" method="post">
{:token()}
<input type='hidden' name='id' value='{$item->id|default=""}'/>

<div class="form-group">
<label for="username">用户</label>
  <input name="username" type="text" class="form-control" id="username" placeholder="请输入用户名" value='{$item->username|default=""}' {$disabled|default=""}>
</div>
<div class="form-group">
  <label for="password">密码</label>
  <input name="password" type="password" class="form-control" id="password" placeholder="请输入密码">
</div>
<div class="form-group">
<label for="nickname">昵称</label>
  <input name="nickname" type="text" class="form-control" id="nickname" placeholder="请输入昵称" value='{$item->nickname|default=""}' >
</div>
<div class="form-group">
<label for="phone">电话</label>
  <input name="phone" type="text" class="form-control" id="phone" placeholder="请输入电话" value='{$item->phone|default=""}' >
</div>
<div class="form-group">
<label for="email">邮箱</label>
  <input name="email" type="text" class="form-control" id="email" placeholder="请输入邮箱" value='{$item->email|default=""}' >
</div>

<div class="form-group">
<label for="user_status">状态</label>
  <select name="user_status" class="form-control" id="user_status" placeholder="请输入状态" value='{$item->user_status|default=""}' >
    {volist name='user_status' id='row'}
    <option value='{$key}'>{$row|strip_tags}</option>
    {/volist}
  </select>
  <script>
    $("#user_status").val({$item->user_status|default=1});
  </script>
</div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
{/block}

