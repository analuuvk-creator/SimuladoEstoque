<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $categoria;
    public $prazo_validade;
    public $cor;
    public $textura;
    public $peso;
    public $aplicacao;
    public $produtoId;

    public function mount() {
        $produto = Produto::find($this->produtoId);

        $this->categoria = $produto->categoria;
        $this->prazo_validade = $produto->prazo_validade;
        $this->cor = $produto->cor;
        $this->textura = $produto->textura;
        $this->peso = $produto->peso;
        $this->aplicacao = $produto->aplicacao;
        $this->produtoId = $produto->id;
    }

    public function update() {
        $produto = Produto::find($this->produtoId);

        $produto->categoria = $this->categoria;
        $produto->prazo_validade = $this->prazo_validade;
        $produto->cor = $this->cor;
        $produto->textura = $this->textura;
        $produto->peso = $this->peso;
        $produto->aplicacao = $this->aplicacao;

        $produto->save();
    }

    public function render()
    {
        return view('livewire.produto-edit');
    }
}
