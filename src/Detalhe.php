<?php

namespace Preetender\Cnab;

class Detalhe extends Fabrica
{
    /**
     * Rerente à pagina 11.
     *
     * @inheritdoc http://download.itau.com.br/bankline/SISPAG_CNAB.pdf
     */
    protected $regras = [
        'codigo_do_banco' => '9|3',
        'codigo_do_lote' => '9|4',
        'tipo_de_registro' => '9|1',
        'numero_do_registro' => '9|5',
        'segmento' => 'X|1|A',
        'tipo_de_movimento' => '9|3',
        'camara' => '9|3',
        'banco_favorecido' => '9|3',
        'agencia_conta' => 'X|20',
        'nome_do_favorecido' => 'X|30',
        'seu_numero' => 'X|20',
        'data_de_pagamento' => '9|8', // DDMMAAAA
        'moeda' => 'X|3|REA', // REA ou 009
        'codigo_ispb' => '9|8',
        'zeros' => '9|7',
        'valor_do_pagto' => '9|15',
        'nosso_numero' => 'X|15',
        'brancos_1' => 'X|5',
        'data_efetiva' => '9|8', // DDMMAAAA
        'valor_efetivo' => '9|15',
        'finalidade_detalhe' => 'X|18',
        'brancos_2' => 'X|2',
        'numero_do_documento' => '9|6',
        'numero_de_inscricao' => '9|14',
        'finalidade_doc_e_status_funcionario' => 'X|2',
        'finalidade_ted' => 'X|5',
        'brancos_3' => 'X|5',
        'aviso' => 'X|1',
        'ocorrencias' => 'X|10',
    ];
}
