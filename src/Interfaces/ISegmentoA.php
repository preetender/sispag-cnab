<?php

namespace Preetender\Cnab\Interfaces;

interface ISegmentoA
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
     * REGISTRO DETALHE DE LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeRegistro(string $value);

    /**
     * Nº SEQUENCIAL REGISTRO NO LOTE
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDoRegistro(string $value);

    /**
     * CÓDIGO SEGMENTO REG. DETALHE
     *
     * @param string $value
     * @return $this
     */
    public function setSegmento(string $value);

    /**
     * TIPO DE MOVIMENTO
     *
     * @param string $value
     * @return $this
     */
    public function setTipoDeMovimento(string $value);

    /**
     * CÓDIGO DA CÂMARA CENTRALIZADORA
     *
     * @param string $value
     * @return $this
     */
    public function setCamara(string $value);

    /**
     * CÓDIGO BANCO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setBancoFavorecido(string $value);

    /**
     * AGÊNCIA CONTA FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setAgenciaConta(string $value);

    /**
     * NOME DO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setNomeDoFavorecido(string $value);

    /**
     * Nº DOCTO ATRIBUÍDO PELA EMPRESA
     *
     * @param string $value
     * @return $this
     */
    public function setSeuNumero(string $value);

    /**
     * DATA PREVISTA PARA PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setDataDePagamento(string $value);

    /**
     * TIPO DA MOEDA
     *
     * @param string $value
     * @return $this
     */
    public function setMoeda(string $value);

    /**
     * IDENTIFICAÇÃO DA INSTITUIÇÃO PARA O SPB
     *
     * @param string $value
     * @return $this
     */
    public function setCodigoISPB(string $value);

    /**
     * VALOR PREVISTO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setValorDoPagto(string $value);

    /**
     * Nº DOCTO ATRIBUÍDO PELO BANCO
     *
     * @param string $value
     * @return $this
     */
    public function setNossoNumero(string $value);

    /**
     * DATA REAL EFETIVAÇÃO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setDataEfetiva(string $value);

    /**
     * VALOR REAL EFETIVAÇÃO DO PAGTO
     *
     * @param string $value
     * @return $this
     */
    public function setValorEfetivo(string $value);

    /**
     * INFORMAÇÃO COMPLEMENTAR P/ HIST. DE C/C
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDetalhe(string $value);

    /**
     * Nº DO DOC/TED/ OP/ CHEQUE NO RETORNO
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDoDocumento(string $value);

    /**
     * Nº DE INSCRIÇÃO DO FAVORECIDO (CPF/CNPJ)
     *
     * @param string $value
     * @return $this
     */
    public function setNumeroDeInscricao(string $value);

    /**
     * FINALIDADE DO DOC E STATUS DO FUNCIONÁRIO NA EMPRESA
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeDocEStatusFuncionario(string $value);

    /**
     * FINALIDADE DA TED
     *
     * @param string $value
     * @return $this
     */
    public function setFinalidadeTED(string $value);

    /**
     * AVISO AO FAVORECIDO
     *
     * @param string $value
     * @return $this
     */
    public function setAviso(string $value);

    /**
     * CÓDIGO OCORRÊNCIAS NO RETORNO
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
