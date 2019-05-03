<?php

namespace Preetender\Cnab;

use Preetender\Cnab\Interfaces\ICabecalhoLote;

class CabecalhoLote extends Fabrica implements ICabecalhoLote
{
    /**
     * Rerente à pagina 10.
     *
     * @inheritdoc http://download.itau.com.br/bankline/SISPAG_CNAB.pdf
     */
    protected $regras = [
        'codigo_do_banco' => '9|3|341',
        'codigo_do_lote' => '9|4',
        'tipo_de_registro' => '9|1|1',
        'tipo_de_operacao' => 'X|1|C', // C = credito
        'tipo_de_pagamento' => '9|2',
        'forma_de_pagamento' => '9|2',
        'layout_do_lote' => '9|03|040',
        'brancos_1' => 'X|1',
        'empresa_inscricao' => '9|1', // 1 - cpf | 2 - cnpj
        'inscricao_numero' => '9|14',
        'indentificacao_do_lancamento' => 'X|4',
        'brancos_2' => 'X|16',
        'agencia' => 'X|5',
        'brancos_3' => 'X|1',
        'conta' => '9|12',
        'brancos_4' => 'X|1',
        'dac' => '9|1',
        'nome_da_empresa' => 'X|30',
        'finalidade_do_lote' => 'X|30',
        'historico_de_cc' => 'X|10',
        'endereco_da_empresa' => 'X|30',
        'numero' => '9|5',
        'complemento' => 'X|15',
        'cidade' => 'X|20',
        'cep' => '9|8',
        'estado' => 'X|2',
        'brancos_5' => 'X|8',
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
     * REGISTRO HEADER DE ARQUIVO
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
     * OPERAÇAO
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeOperacao(string $value = 'C')
    {
        $this->tipo_de_operacao = $value;

        return $this;
    }

    /**
     * TIPO DE PAGTO
     *
     * @params string $value
     * @return $this
     */
    public function setTipoDePagamento(string $value)
    {
        $this->tipo_de_pagamento = $value;

        return $this;
    }

    /**
     * FORMA DE PAGAMENTO
     *
     * @params string $value
     * @return $this
     */
    public function setFormaDePagamento(string $value)
    {
        $this->forma_de_pagamento = $value;

        return $this;
    }

    /**
     * Nº DA VERSÃO DO LAYOUT DO LOTE
     *
     * @params string $value
     * @return $this
     */
    public function setLayoutDoLote(string $value)
    {
        $this->layout_do_lote = $value;

        return $this;
    }

    /**
     * TIPO INSCRIÇÃO EMPRESA DEBITADA
     *
     * @params string $value
     * @return $this
     */
    public function setEmpresaInscricao(string $value)
    {
        $this->empresa_inscricao = $value;

        return $this;
    }

    /**
     * CNPJ EMPRESA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setInscricaoNumero(string $value)
    {
        $this->inscricao_numero = $value;

        return $this;
    }

    /**
     * IDENTIFICAÇÃO DO LANÇAMENTO NO EXTRATO DO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setIndentificacaoDoLancamento(string $value)
    {
        $this->indentificacao_do_lancamento = $value;

        return $this;
    }

    /**
     * NÚMERO AGÊNCIA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setAgencia(string $value)
    {
        $this->agencia = $value;

        return $this;
    }

    /**
     * NÚMERO DE C/C DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setConta(string $value)
    {
        $this->conta = $value;

        return $this;
    }

    /**
     * DAC DA AGÊNCIA/CONTA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setDAC(string $value)
    {
        $this->dac = $value;

        return $this;
    }

    /**
     * NOME DA EMPRESA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setNomeDaEmpresa(string $value)
    {
        $this->nome_da_empresa = $value;

        return $this;
    }

    /**
     * FINALIDADE DOS PAGTOS DO LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDoLote(string $value)
    {
        $this->finalidade_do_lote = $value;

        return $this;
    }

    /**
     * COMPLEMENTO HISTÓRICO C/C DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setHistoricoDeCC(string $value)
    {
        $this->historico_de_cc = $value;

        return $this;
    }

    /**
     * NOME DA RUA, AV, PÇA, ETC...
     *
     * @param string $value
     * @return $this
     */
    public function setEnderecoDaEmpresa(string $value)
    {
        $this->endereco_da_empresa = $value;

        return $this;
    }

    /**
     * NÚMERO DO LOCAL
     *
     * @param string $value
     * @return $this
     */
    public function setNumero(string $value)
    {
        $this->numero = $value;

        return $this;
    }

    /**
     * CASA, APTO, SALA, ETC...
     *
     * @param string $value
     * @return $this
     */
    public function setComplemento(string $value)
    {
        $this->complemento = $value;

        return $this;
    }

    /**
     * NOME DA CIDADE
     *
     * @param string $value
     * @return $this
     */
    public function setCidade(string $value)
    {
        $this->cidade = $value;

        return $this;
    }

    /**
     * CEP
     *
     * @param string $value
     * @return $this
     */
    public function setCEP(string $value)
    {
        $this->cep = $value;

        return $this;
    }

    /**
     * SIGLA DO ESTADO
     *
     * @param string $value
     * @return $this
     */
    public function setEstado(string $value)
    {
        $this->estado = $value;

        return $this;
    }

    /**
     * CÓDIGO OCORRÊNCIAS P/RETORNO
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
