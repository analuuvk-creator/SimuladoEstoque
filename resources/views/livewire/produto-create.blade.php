<div class="mt-5">
    <form wire:subimit='store'>
        <label for="categoria"><b>Categoria</b></label><br>
        <select id="categoria">
            <option value="">Selecione a categoria do produto</option>
            <option value="cimento">Cimento</option>
            <option value="tinta">Tinta</option>
            <option value="argamassa">Argamassa</option>
        </select><br>

        <label class="mt-3" for="prazo_validade"><b>Prazo de Validade</b></label><br>
        <input type="date" wire:model='prazo_validade'><br>

        <label class="mt-3" for="cor"><b>Cor</b></label><br>
        <input type="text" wire:model='cor'><br>

        <label class="mt-3" for="textura"><b>Textura</b></label><br>
        <input type="text" wire:model='textura'><br>

        <label class="mt-3" for="peso"><b>Peso</b></label><br>
        <input type="decimal" wire:model='peso'><br>

        <label class="mt-3" for="aplicacao"><b>Aplicação</b></label><br>
        <select id="aplicacao">
            <option value="">Escolha a aplicação do produto</option>
            <option value="fundação">Fundação</option>
            <option value="acabamento">Acabamento</option>
            <option value="estrutura">Estrutura</option>
        </select><br>

        <button type="submit">Salvar</button>
    </form>
</div>
