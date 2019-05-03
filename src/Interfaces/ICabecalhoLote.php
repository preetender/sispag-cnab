<?php

namespace Preetender\Cnab\Interfaces;

interface ICabecalhoLote
{
    /**
     * CÓDIGO DO BCO NA COMPENSAÇÃO
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoDoBanco(string $value);

    /**
     * LOTE DE SERVIÇO
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoDoLote(string $value);

    /**
     * REGISTRO HEADER DE ARQUIVO
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeRegistro(string $value);

    /**
     * OPERAÇAO
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeOperacao(string $value = 'C');

    /**
     * TIPO DE PAGTO
     *
     * @params string $value
     * @return $this
     */
    public function setTipoDePagamento(string $value);

    /**
     * FORMA DE PAGAMENTO
     *
     * @params string $value
     * @return $this
     */
    public function setFormaDePagamento(string $value);

    /**
     * Nº DA VERSÃO DO LAYOUT DO LOTE
     *
     * @params string $value
     * @return $this
     */
    public function setLayoutDoLote(string $value);

    /**
     * TIPO INSCRIÇÃO EMPRESA DEBITADA
     *
     * @params string $value
     * @return $this
     */
    public function setEmpresaInscricao(string $value);

    /**
     * CNPJ EMPRESA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setInscricaoNumero(string $value);

    /**
     * IDENTIFICAÇÃO DO LANÇAMENTO NO EXTRATO DO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setIndentificacaoDoLancamento(string $value);

    /**
     * NÚMERO AGÊNCIA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setAgencia(string $value);

    /**
     * NÚMERO DE C/C DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setConta(string $value);

    /**
     * DAC DA AGÊNCIA/CONTA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setDAC(string $value);

    /**
     * NOME DA EMPRESA DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setNomeDaEmpresa(string $value);

    /**
     * FINALIDADE DOS PAGTOS DO LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDoLote(string $value);

    /**
     * COMPLEMENTO HISTÓRICO C/C DEBITADA
     *
     * @param string $value
     * @return $this
     */
    public function setHistoricoDeCC(string $value);

    /**
     * NOME DA RUA, AV, PÇA, ETC...
     *
     * @param string $value
     * @return $this
     */
    public function setEnderecoDaEmpresa(string $value);

    /**
     * NÚMERO DO LOCAL
     *
     * @param string $value
     * @return $this
     */
    public function setNumero(string $value);

    /**
     * CASA, APTO, SALA, ETC...
     *
     * @param string $value
     * @return $this
     */
    public function setComplemento(string $value);

    /**
     * NOME DA CIDADE
     *
     * @param string $value
     * @return $this
     */
    public function setCidade(string $value);

    /**
     * CEP
     *
     * @param string $value
     * @return $this
     */
    public function setCEP(string $value);

    /**
     * SIGLA DO ESTADO
     *
     * @param string $value
     * @return $this
     */
    public function setEstado(string $value);

    /**
     * CÓDIGO OCORRÊNCIAS P/RETORNO
     *
     * @param string $value
     * @return $this
     */
    public function setOcorrencias(string $value);

    /**
     * Gerar buffer
     *
     * @return string
     */
    public function toString(): string;
}
