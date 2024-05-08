<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[
            0 => [
                'nome' => 'Fornecedor 1',
                'status'=> 'N',
                'cnpj'=> '0',
                'ddd'=> '', //São Paulo
                'telefone'=> '0000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status'=> 'S',
                'cnpj'=> null,
                'ddd'=> '', //Fortaleza
                'telefone'=> '1111-1111',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status'=> 'N',
                'cnpj'=> '1',
                'ddd'=> '', //Rio de Janeiro
                'telefone'=> '2222-2222',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status'=> 'S',
                'cnpj'=> '2',
                'ddd'=> '', //Minas Gerais
                'telefone'=> '3333-3333',
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status'=> 'S',
                'cnpj'=> '3',
                'ddd'=> '', //Bahia
                'telefone'=> '4444-4444',
            ] 
        ];
    }
}
