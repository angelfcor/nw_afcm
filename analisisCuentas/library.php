<?php
session_start();

function cleanupSession()
{
    $_SESSION = [];
    session_destroy();
}

const SESSION_KEY = "nw_analisis_cuentas";

function addToSession($strKey, $value)
{
    if (isset($_SESSION[SESSION_KEY])) {
        $_SESSION[SESSION_KEY][$strKey] = $value;
    } else {
        $_SESSION[SESSION_KEY] = [];
        $_SESSION[SESSION_KEY][$strKey] = $value;
    }
}

function getFromSession($strKey)
{
    if (
        isset($_SESSION[SESSION_KEY])
        && isset($_SESSION[SESSION_KEY][$strKey])
    ) {
        return $_SESSION[SESSION_KEY][$strKey];
    }
    return null;
}

const CUENTAS_KEY = "cuentas_extraidas";

function procesarTextoYGuardarCuentas($textoCompleto) {
    $pattern = '/(\b\d{13}\b)/';
    $parts = preg_split($pattern, $textoCompleto, -1, PREG_SPLIT_DELIM_CAPTURE);
    
    $cuentas = array_filter($parts, function($value) use ($pattern) {
        return preg_match($pattern, $value);
    });
    
    $cuentasLimpias = array_values(array_unique($cuentas));
    
    addToSession(CUENTAS_KEY, $cuentasLimpias);
}

function getCuentasExtraidas() {
    return getFromSession(CUENTAS_KEY) ?? [];
}

?>