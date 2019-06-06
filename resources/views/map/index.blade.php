@extends('layouts.default')
@section('title')
   Map
@stop
@section('content')
<div class="col-12" id="map">

</div>

@stop

@section('js')
    <script src="{{ asset('js/map.js') }}" defer></script>
@stop

@section('code')
@php
highlight_string('
<?php use phpseclib\Crypt\RSA;
$rsa = new RSA();
$rsa->setPrivateKeyFormat(RSA::PRIVATE_FORMAT_PKCS8);
$rsa->setPublicKeyFormat(RSA::PUBLIC_FORMAT_PKCS8);
$rsa->setMGFHash("sha512");
$keysCertificadoGerado = $rsa->createKey(2048);
//$keysCertificadoGerado[
//"privatekey"=>"---chave privada----",
// "publickey"=>"---chave publica---"
//]')
@endphp
@stop
