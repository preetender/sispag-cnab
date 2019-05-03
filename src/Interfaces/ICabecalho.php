<?php

namespace Preetender\Cnab\Interfaces;

interface ICabecalho
{
    /**
     * CÓDIGO DO BCO NA COMPENSAÇÃO
     *
     * @return $this
     */
    public function setCodigoDoBanco(string $value);

    /**
     * LOTE DE SERVIÇO
     *
     * @return $this
     */
    public function setCodigoDoLote(string $value);

    /**
     * REGISTRO HEADER DE ARQUIVO
     *
     * @return $this
     */
    public function setTipoDeRegistro(string $value);

    /**
     * NUMERO DA VERSÃO DO LAYOUT DO ARQUIVO
     *
     * @return $this
     */
    public function setLayoutDeArquivo(string $value);

    /**
     * TIPO DE INSCRIÇÃO DA EMPRESA
     *
     * @return $this
     */
    public function setEmpresaInscricao(string $value);

    /**
     * CNPJ EMPRESA DEBITADA
     *
     * @return $this
     */
    public function setInscricaoNumero(string $value);

    /**
     * NÚMERO AGÊNCIA DEBITADA
     *
     * @return $this
     */
    public function setAgencia(string $value);

    /**
     * NÚMERO DE C/C DEBITADA
     *
     * @return $this
     */
    public function setConta(string $value);

    /**
     * DAC DA AGÊNCIA/CONTA DEBITADA
     *
     * @return $this
     */
    public function setDAC(string $value);

    /**
     * NOME DA EMPRESA
     *
     * @return $this
     */
    public function setNomeDaEmpresa(string $value);

    /**
     * NOME DO BANCO
     *
     * @return $this
     */
    public function setNomeDoBanco(string $value);

    /**
     * CÓDIGOREMESSA/RETORNO.
     *
     * @return $this
     */
    public function setArquivoCodigo(string $value);

    /**
     * DATA DE GERAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setDataDeGeracao(string $value);

    /**
     * HORA DE GERAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setHoraDaGeracao(string $value);

    /**
     * DENSIDADE DE GRAVAÇÃO DO ARQUIVO
     *
     * @return $this
     */
    public function setUnidadeDeDensidade(string $value);

    /**
     * Gerar buffer
     *
     * @return string
     */
    public function toString(): string;
}
