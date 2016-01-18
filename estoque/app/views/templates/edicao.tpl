{$head}
<div class="container">
    <form action="/{$controller}/salvar/id/{$produto['id']}" method="POST">
        {foreach $arrColunas as $coluna}
            <p><div class="coluna-editar">{$coluna}:</div> <input {if {$coluna}=='id'}readonly{/if} name="{$coluna}" value="{$produto[$coluna]}"></p>
        {/foreach}
        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
{$footer}