<?php

class AnimalComplaint extends Complaint {
var $descricaoQueixa;
var $observacaoQueixa;
var $nomeSolicitante;
var $ruaSolicitante;
var $compSolicitante;
var $bairroSolicitante;
var $cidadeSolicitante;
var $ufSolicitante;
var $cepSolicitante;
var $telefoneSolicitante;
var $emailSolicitante;
var $nomeAnimal;
var $qtdeAnimal;
var $diaIncomodo;
var $mesIncomodo;
var $anoIncomodo;
var $ruaOcorrencia;
var $compOcorrencia;
var $bairroOcorrencia;
var $cidadeOcorrencia;
var $ufOcorrencia;
var $cepOcorrencia;
var $telefoneOcorrencia;

$this->ComplaintRegistration("animalcomplaint", "descricaoQueixa = '$descricaoQueixa', observacaoQueixa = '$observacaoQueixa', nomeSolicitante = '$nomeSolicitante',
ruaSolicitante = '$ruaSolicitante', compSolicitante = '$compSolicitante', bairroSolicitante = '$bairroSolicitante', cidadeSolicitante = '$cidadeSolicitante',
ufSolicitante = '$ufSolicitante', cepSolicitante = '$cepSolicitante', telefoneSolicitante = '$telefoneSolicitante', emailSolicitante = '$emailSolicitante',
nomeAnimal = '$nomeAnimal', qtdeAnimal = '$qtdeAnimal', diaIncomodo = '$diaIncomodo', mesIncomodo = '$mesIncomodo', anoIncomodo = '$anoIncomodo', ruaOcorrencia = '$ruaOcorrencia',
compOcorrencia = '$compOcorrencia', bairroOcorrencia = '$bairroOcorrencia', cidadeOcorrencia = '$cidadeOcorrencia', ufOcorrencia = '$ufOcorrencia', cepOcorrencia = '$cepOcorrencia',
telefoneOcorrencia = '$telefoneOcorrencia'");
}
