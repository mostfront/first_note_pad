{extend name="glob/base" /}
{block name="header"}
    <link rel="stylesheet" type="text/css" href="{:url('static/simditor/styles')}/simditor.css" />
    <script type="text/javascript" src="{:url('static/simditor/scripts')}/module.js"></script>
    <script type="text/javascript" src="{:url('static/simditor/scripts')}/hotkeys.js"></script>
    <script type="text/javascript" src="{:url('static/simditor/scripts')}/uploader.js"></script>
    <script type="text/javascript" src="{:url('static/simditor/scripts')}/simditor.js"></script>
{/block}
{block name="content"}
<div class="page-header">
    <h1><span>内容 {$typeName}</span></h1>
</div>

<div class="col-sm-12">
<form  action="{:url('admin/content/save')}" method="post">
{:token()}
<input type='hidden' name='id' value='{$item->id|default=""}'/>

<div class="form-group">
<label for="title">标题</label>
  <input name="title" type="text" class="form-control" id="title" placeholder="请输入标题" value='{$item->title|default=""}'>
</div>

<div class="form-group">
<label for="content">内容</label>
  <textarea id="content" name="content" type="text" class="form-control" id="content" rows="20">{$item->content|default=""}</textarea>
  <script>
    var editor = new Simditor({
      textarea: $('#content'),
      //optional options
      toolbar:[
        'title',
        'bold',
        'italic',
        'underline',
        'strikethrough',
        'fontScale',
        'color',
        'ol',              /*ordered list*/
        'ul',              /*unordered list*/
        'blockquote',
        'code',            /*code block*/
        'table',
        'link',
        'image',
        'hr',              /*horizontal ruler*/
        'indent',
        'outdent',
        'alignment',
      ],
      upload:{
        url: "{:url('admin/content/up')}",
        params: {},
        fileKey: "file1",
        connectionCount: 3,
        leaveConfirm: "正在上传图片，你确定要放弃吗？"
      },
      pasteImage: true
      });
  </script>
</div>
<div class="form-group">
<label for="content_status">状态</label>
  <select name="content_status" class="form-control" id="content_status" placeholder="请输入状态" value='{$item->content_status|default=""}' >
    {volist name='content_status' id='row'}
    <option value='{$key}'>{$row|strip_tags}</option>
    {/volist}
  </select>
  <script>
    $("#content_status").val({$item->content_status|default=1});
  </script>
</div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
{/block}

