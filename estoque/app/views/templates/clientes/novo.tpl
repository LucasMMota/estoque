{$head}
<div class="container">
    <form action="/{$controller}/salvar/" method="POST">
        <p>
        <div class="coluna-editar">Nome:</div>
        <input name="nome">
        </p>

        <p>
        <div class="coluna-editar">email:</div>
        <input name="email">
        </p>

        <p>
        <div class="coluna-editar">telefone:</div>
        <input name="telefone">
        </p>

        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
{$footer}