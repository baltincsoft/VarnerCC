{extends file="index.tpl"}
{block name="body"}
<div class="span12">
    <div class="row-fluid page-404">
        <div class="span5 number">
            404
        </div>
        <div class="span7 details">
            <h3>Opps, You're lost.</h3>
            <p>
                {if $error_msg}
                    {$error_msg}
                {/if}
            </p>
        </div>
    </div>
</div>
{/block}