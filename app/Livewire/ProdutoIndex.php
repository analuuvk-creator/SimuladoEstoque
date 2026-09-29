<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function delete(){
        $produto = Produto::find($id);
        

        $produto->delete();    
    }
    

    public function render()
    {
        return view('livewire.produto-index');
    }
}
