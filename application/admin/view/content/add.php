{extend name="glob/base" /}

{block name="content"}
<div class="page-header">
    <h1><span>用户 {$typeName}</span></h1>
</div>

<div class="col-sm-4">
<form  action="{:url('admin/content/save')}" method="post">
{:token()}
<input type='hidden' name='id' value='{$item->id|default=""}'/>

<div class="form-group">
<label for="title">用户</label>
  <input name="title" type="text" class="form-control" id="title" placeholder="请输入标题" value='{$item->title|default=""}' {$disabled|default=""}>
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
<label for="content_status">状态</label>
  <select name="content_status" class="form-control" id="content_status" placeholder="请输入状态" value='{$item->content_status|default=""}' >
    {volist name='content_status' id='row'}
    <option value='{$key}'>{$row|strip_tags}</option>
    {/volist}
  </select>
  <script>
    $("#content_status").val({$item->content_status});
  </script>
</div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
{/block}

