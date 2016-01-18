{$head}
<div class="container">
    <p class="btns-opcoes">
        <a href="/{$controller}/novo">
            <button>Novo</button>
        </a>
    </p>
    {if $arrItens}
    <table>
        <thead>
        <tr>
            <th>Cliente ID</th>
            <th>Produto ID</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arrItens as $pedido}
        <tr>
            {foreach $pedido as $attr}
                <td>{$attr}</td>
            {/foreach}
            <td>
                <a href="/{$controller}/excluir/clientes_id/{$pedido['clientes_id']}/produtos_id/{$pedido['produtos_id']}">Excluir</a>
            </td>
            {/foreach}
        </tr>
        </tbody>
    </table>
    {/if}
</div>
{$footer}