<?php
use Preetender\Cnab\Cabecalho;
use Preetender\Cnab\CabecalhoLote;
use Preetender\Cnab\Remessa;
use Preetender\Cnab\SegmentoA;

require './vendor/autoload.php';

$lote = new CabecalhoLote;
$cabecalho = new Cabecalho;
// $detalhe = new SegmentoA;

$cabecalho
    ->setCodigoDoBanco('341')
    ->setCodigoDoLote('0000')
    ->setTipoDeRegistro('0')
    ->setLayoutDeArquivo('081')
    ->setEmpresaInscricao('2')
    ->setInscricaoNumero('28854704000140')
    ->setAgencia('32131')
    ->setConta('000000032381')
    ->setDAC('3')
    ->setNomeDaEmpresa('LUIS ALBERTO BARTOLOMEU 342765')
    ->setNomeDoBanco('ITAU AGENCIA BRASILIA CONJ NAC');

$lote->setCodigoDoBanco('341')
    ->setCodigoDoLote('0001')
    ->setTipoDeRegistro('1')
    ->setTipoDeOperacao('C')
    ->setTipoDePagamento('20')
    ->setFormaDePagamento('01')
    ->setLayoutDoLote('040')
    ->setEmpresaInscricao('2')
    ->setInscricaoNumero('28854704000140')
    ->setAgencia('32131')
    ->setConta('000000032381')
    ->setDAC('3')
    ->setNomeDaEmpresa('LUIS ALBERTO BARTOLOMEU 342765')
    ->setEnderecoDaEmpresa('RUA LAFAIETE SPINOLA DE CASTRO')
    ->setNumero('01530')
    ->setCidade('SAO JOSE DO RIO PRET')
    ->setCEP('15025510')
    ->setEstado('SP');

$segmento = new SegmentoA;
$segmento->setCodigoDoBanco('341')
    ->setCodigoDoLote('0001')
    ->setTipoDeRegistro('3')
    ->setNumeroDoRegistro('00001')
    ->setSegmento('A')
    ->setBancoFavorecido('341')
    ->setAgenciaConta('05245 000000040869')
    ->setNomeDoFavorecido('CESAR ARAUJO')
    ->setSeuNumero('')
    ->setDataDePagamento(date('dmY'))
    ->setValorEfetivo('000000000013545')
    ->setFinalidadeTED('5')
    ->setNumeroDeInscricao('05070216147');

$remessa = new Remessa($cabecalho, $lote, $segmento);

// $boot = new ReflectionClass(CabecalhoLote::class);
// dump($boot, $boot->getMethods());
$remessa->salvar('teste-documento.txt');

dump($remessa);

echo '<hr>';
echo strlen($cabecalho->getBuffer());
echo '<hr>';
echo strlen($lote->getBuffer());
echo '<hr>';
echo strlen($segmento->getBuffer());
echo '<hr>';

// dump($cabecalho, $lote, $detalhe, $remessa);

// file_put_contents('teste.txt', $cabecalho->getBuffer() . $lote->getBuffer() . $detalhe->getBuffer());
