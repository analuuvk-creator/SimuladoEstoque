<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $categoria;
    public $prazo_validade;
    public $cor;
    public $textura;
    public $peso;
    public $aplicacao;

    public function store(){
        $this->validate([
            'peso' =>'required|decimal:3,2'
        ]);
        $produto = Produto::create ([
            'categoria' => $this->categoria,
            'prazo_validade' => $this->prazo_validade,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'aplicacao' => $this->aplicacao
        ]);

        $this->save();
        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect('produto.index');
    }
    
    public function render()
    {
        return view('livewire.produto-create');
    }
}
