<?php

namespace Preetender\Cnab;

use Preetender\Cnab\Interfaces\ISegmentoA;

class SegmentoA extends Fabrica implements ISegmentoA
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
        'finalidade_ted' => '9|5',
        'brancos_3' => 'X|5',
        'aviso' => 'X|1',
        'ocorrencias' => 'X|10',
    ];
    /**
     * CÓDIGO DO BCO NA COMPENSAÇÃO
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoDoBanco(string $value)
    {
        $this->codigo_do_banco = $value;

        return $this;
    }

    /**
     * LOTE DE SERVIÇO
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoDoLote(string $value)
    {
        $this->codigo_do_lote = $value;

        return $this;
    }

    /**
     * REGISTRO DETALHE DE LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeRegistro(string $value)
    {
        $this->tipo_de_registro = $value;

        return $this;
    }

    /**
     * Nº SEQUENCIAL REGISTRO NO LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDoRegistro(string $value)
    {
        $this->numero_do_registro = $value;

        return $this;
    }

    /**
     * CÓDIGO SEGMENTO REG. DETALHE
     *
     * @param string $value
     * @return $this
     */
    public function setSegmento(string $value)
    {
        $this->segmento = $value;

        return $this;
    }

    /**
     * TIPO DE MOVIMENTO
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeMovimento(string $value)
    {
        $this->tipo_de_movimento = $value;

        return $this;
    }

    /**
     * CÓDIGO DA CÂMARA CENTRALIZADORA
     *
     * @param string $value
     * @return $this
     */
    public function setCamara(string $value)
    {
        $this->camara = $value;

        return $this;
    }

    /**
     * CÓDIGO BANCO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setBancoFavorecido(string $value)
    {
        $this->banco_favorecido = $value;

        return $this;
    }

    /**
     * AGÊNCIA CONTA FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setAgenciaConta(string $value)
    {
        $this->agencia_conta = $value;

        return $this;
    }

    /**
     * NOME DO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setNomeDoFavorecido(string $value)
    {
        $this->nome_do_favorecido = $value;

        return $this;
    }

    /**
     * Nº DOCTO ATRIBUÍDO PELA EMPRESA
     *
     * @param string $value
     * @return $this
     */
    public function setSeuNumero(string $value)
    {
        $this->seu_numero = $value;

        return $this;
    }

    /**
     * DATA PREVISTA PARA PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setDataDePagamento(string $value)
    {
        $this->data_de_pagamento = $value;

        return $this;
    }

    /**
     * TIPO DA MOEDA
     *
     * @param string $value
     * @return $this
     */
    public function setMoeda(string $value)
    {
        $this->moeda = $value;

        return $this;
    }

    /**
     * IDENTIFICAÇÃO DA INSTITUIÇÃO PARA O SPB
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoISPB(string $value)
    {
        $this->codigo_ispb = $value;

        return $this;
    }

    /**
     * VALOR PREVISTO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setValorDoPagto(string $value)
    {
        $this->valor_do_pagto = $value;

        return $this;
    }

    /**
     * Nº DOCTO ATRIBUÍDO PELO BANCO
     *
     * @param string $value
     * @return $this
     */
    public function setNossoNumero(string $value)
    {
        $this->nosso_numero = $value;

        return $this;
    }

    /**
     * DATA REAL EFETIVAÇÃO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setDataEfetiva(string $value)
    {
        $this->data_efetiva = $value;

        return $this;
    }

    /**
     * VALOR REAL EFETIVAÇÃO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setValorEfetivo(string $value)
    {
        $this->valor_efetivo = $value;

        return $this;
    }

    /**
     * INFORMAÇÃO COMPLEMENTAR P/ HIST. DE C/C
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDetalhe(string $value)
    {
        $this->finalidade_detalhe = $value;

        return $this;
    }

    /**
     * Nº DO DOC/TED/ OP/ CHEQUE NO RETORNO
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDoDocumento(string $value)
    {
        $this->numero_do_documento = $value;

        return $this;
    }

    /**
     * Nº DE INSCRIÇÃO DO FAVORECIDO (CPF/CNPJ)
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDeInscricao(string $value)
    {
        $this->numero_de_inscricao = $value;

        return $this;
    }

    /**
     * FINALIDADE DO DOC E STATUS DO FUNCIONÁRIO NA EMPRESA
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDocEStatusFuncionario(string $value)
    {
        $this->finalidade_doc_e_status_funcionario = $value;

        return $this;
    }

    /**
     * FINALIDADE DA TED
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeTED(string $value)
    {
        $this->finalidade_ted = $value;

        return $this;
    }

    /**
     * AVISO AO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setAviso(string $value)
    {
        $this->aviso = $value;

        return $this;
    }

    /**
     * CÓDIGO OCORRÊNCIAS NO RETORNO
     *
     * @param string $value
     * @return $this
     */
    public function setOcorrencias(string $value)
    {
        $this->ocorrencias = $value;

        return $this;
    }

    /**
     * Gerar buffer
     *
     * @return string
     */
    public function toString(): string
    {
        return $this->getBuffer();
    }
}
