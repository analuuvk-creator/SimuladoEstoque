<?php

use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/produto/edit', ProdutoEdit::class)->name('produto.edit');
Route::get('/produto/index', ProdutoIndex::class)->name('produto.index');
