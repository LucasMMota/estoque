{$head}
<div class="container">
    <form action="/produtos/salvar/" method="POST">
        <p>
        <div class="coluna-editar">Nome:</div>
        <input name="nome">
        </p>

        <p>
        <div class="coluna-editar">Descrição:</div>
        <input name="descricao">
        </p>

        <p>
        <div class="coluna-editar">Preço:</div>
        <input name="preco">
        </p>

        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
{$footer}