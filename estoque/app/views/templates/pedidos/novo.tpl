{$head}
<div class="container">
    <form action="/{$controller}/salvar/" method="POST">
        <p>

        <div class="coluna-editar">Clientes:</div>
        <select name="clientes_id">
            {foreach $arrClientes as $cliente}
                <option value="{$cliente['id']}">{$cliente['nome']}</option>
            {/foreach}
        </select>
        </p>

        <p>

        <div class="coluna-editar">Produtos:</div>
        <select name="produtos_id">
            {foreach $arrProdutos as $produto}
                <option value="{$produto['id']}">{$produto['nome']}</option>
            {/foreach}
        </select>
        </p>
        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
{$footer}