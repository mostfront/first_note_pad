{extend name="glob/base" /}

{block name='webname'}
 - 基础设置
{/block}

{block name="content"}
<div class="page-header">
    <h1><span>基础设置</span></h1>
</div>
<div class="col-sm-8">
    <form  action="{:url('admin/setting/save')}" method="post">
    {:token()}

    {volist name="setting" id="item"}
    <div class="form-group">
    <label for="{$item->key}">{$item->name}</label>
        <input name="formdata[{$item->key}]" type="text" class="form-control" id="{$item->key}" placeholder="请输入用户名" value='{$item->value|default=""}' >
    </div>
    {/volist}
  <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>
{/block}

