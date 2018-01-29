{assign var=val value=0}
<html>
    <head>
        <title>Info</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        {foreach from=$tickets key=k item=v}
            <div class="a">
                <div class="b name_text">
                    {$v['title']|upper}
                </div>
                <div class="c id_text">
                    #{$v['id']}
                </div>
                <div class="d points_text">
                    {if isset($v['points'])}
                        {$v['points']}
                    {else}
                        &nbsp;
                    {/if}
                </div>
            </div>
            {assign var=val value=$val+1}
            {if $val%6==0}
                <footer>
                </footer>
            {/if}
        {/foreach}
    </body>
</html>