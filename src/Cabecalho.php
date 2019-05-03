<?php

namespace Preetender\Cnab;

use Preetender\Cnab\Interfaces\ICabecalho;

class Cabecalho extends Fabrica implements ICabecalho
{
    /**
     * Rerente à pagina 9.
     *
     * @inheritdoc http://download.itau.com.br/bankline/SISPAG_CNAB.pdf
     */
    protected $regras = [
        'codigo_do_banco' => '9|3',
        'codigo_do_lote' => '9|4',
        'tipo_de_registro' => '9|1',
        'brancos_1' => 'X|6',
        'layout_de_arquivo' => '9|3|081',
        'empresa_inscricao' => '9|1', // 1 = cpf | 2 = cnpj
        'inscricao_numero' => '9|14',
        'brancos_2' => 'X|20',
        'agencia' => '9|5',
        'brancos_3' => 'X|1',
        'conta' => '9|12',
        'brancos_4' => 'X|1',
        'dac' => '9|1',
        'nome_da_empresa' => 'X|30',
        'nome_do_banco' => 'X|30',
        'brancos_5' => 'X|10',
        'arquivo_codigo' => '9|1', // 1 = remessa | 2 = retorno
        'data_de_geracao' => '9|8', // DDMMAAAA
        'hora_da_geracao' => '9|6', // HHMMSS
        'zeros' => '9|9',
        'unidade_de_densidade' => '9|5',
        'brancos_6' => 'X|69',
    ];

    /**
     * CÓDIGO DO BCO NA COMPENSAÇÃO
     *
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
     * @return $this
     */
    public function setTipoDeRegistro(string $value)
    {
        $this->tipo_de_registro = $value;

        return $this;
    }

    /**
     * NUMERO DA VERSÃO DO LAYOUT DO ARQUIVO
     *
     * @return $this
     */
    public function setLayoutDeArquivo(string $value)
    {
        $this->layout_de_arquivo = $value;

        return $this;
    }

    /**
     * TIPO DE INSCRIÇÃO DA EMPRESA
     *
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
     * @return $this
     */
    public function setInscricaoNumero(string $value)
    {
        $this->inscricao_numero = $value;

        return $this;
    }

    /**
     * NÚMERO AGÊNCIA DEBITADA
     *
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
     * @return $this
     */
    public function setDAC(string $value)
    {
        $this->dac = $value;

        return $this;
    }

    /**
     * NOME DA EMPRESA
     *
     * @return $this
     */
    public function setNomeDaEmpresa(string $value)
    {
        $this->nome_da_empresa = $value;

        return $this;
    }

    /**
     * NOME DO BANCO
     *
     * @return $this
     */
    public function setNomeDoBanco(string $value)
    {
        $this->nome_do_banco = $value;

        return $this;
    }

    /**
     * CÓDIGOREMESSA/RETORNO.
     *
     * @return $this
     */
    public function setArquivoCodigo(string $value)
    {
        $this->arquivo_codigo = $value;

        return $this;
    }

    /**
     * DATA DE GERAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setDataDeGeracao(string $value)
    {
        $this->data_de_geracao = $value;

        return $this;
    }

    /**
     * HORA DE GERAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setHoraDaGeracao(string $value)
    {
        $this->hora_da_geracao = $value;

        return $this;
    }

    /**
     * DENSIDADE DE GRAVAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setUnidadeDeDensidade(string $value)
    {
        $this->unidade_de_densidade = $value;

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
