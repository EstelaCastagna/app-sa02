<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_Carrousel extends Controller
{
    public function index()
    {
        // Lógica para recuperar os produtos do banco de dados ou de outra fonte de dados
        $produtos = [
            [
                'nome' => 'Produto 1',
                'preco' => 'R$ 50,00',
                'descricao' => 'Descrição do Produto 1',
                'imagem' => 'imagem1.jpg',
            ],
            [
                'nome' => 'Produto 2',
                'preco' => 'R$ 60,00',
                'descricao' => 'Descrição do Produto 2',
                'imagem' => 'imagem2.jpg',
            ],
            [
                'nome' => 'Produto 3',
                'preco' => 'R$ 70,00',
                'descricao' => 'Descrição do Produto 3',
                'imagem' => 'imagem3.jpg',
            ],
        ];

        return view('inicio', compact('produtos'));
    }
}
