{$head}
<div class="container">
    <p class="btns-opcoes">
        <a href="/{$controller}/novo">
            <button>Novo</button>
        </a>
    </p>
    {if $arrColunas}
        <table>
            <thead>
            <tr>
                {foreach $arrColunas as $item_value}
                    <th>{$item_value}</th>
                {/foreach}
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
            {foreach $arrItens as $produto}
            <tr>
                {foreach $produto as $attr}
                    <td>{$attr}</td>
                {/foreach}
                <td><a href="/{$controller}/editar/id/{$produto['id']}">Editar</a></td>
                <td><a href="/{$controller}/excluir/id/{$produto['id']}">Excluir</a></td>
                {/foreach}
            </tr>
            </tbody>
        </table>
    {/if}
</div>
{$footer}