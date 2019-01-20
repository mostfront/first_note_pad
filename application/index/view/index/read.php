{extend name="glob/base" /}
{block name="content"}
    <h2>{$newData->title}</h2>
    <p class='text-right text-muted'>
    作者：<a href="{$newData->user->blogurl}">{$newData->user->nickname}</a>
    时间：{$newData->update_time}
    </p>
    <div class='well' style='line-height:200% font-size:1.2em'>{$newData->content|raw}
    </div>
{/block}


