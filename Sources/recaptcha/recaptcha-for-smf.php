<?php
/**
 * reCAPTCHA for SMF
 *
 * @author    Michael Johnson <youngmug@animeneko.net>
 * @copyright 2007-2018 Michael Johnson
 * @license   https://choosealicense.com/licenses/bsd-3-clause/ BSD-3-Clause
 */

function load_recaptcha()
{
    global $context;

    $context['html_headers'] .= '<script src="https://www.google.com/recaptcha/api.js"></script>';
    loadLanguage('Recaptcha');
    loadTemplate(false, 'recaptcha');
}