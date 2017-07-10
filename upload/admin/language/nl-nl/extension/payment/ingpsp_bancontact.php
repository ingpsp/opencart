<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'ING PSP: Bancontact';
$_['text_ingpsp_bancontact'] = '<img src="view/image/payment/ingpsp.png" alt="ING PSP" title="ING PSP" />';
$_['text_extension'] = 'Extensies';

/**
 * Entry points
 */
$_['entry_status'] = 'Status:';
$_['entry_order_completed'] = 'Bestelling afgerond:';
$_['entry_order_new'] = 'Nieuwe Bestelling :';
$_['entry_order_expired'] = 'Bestelling Verlopen:';
$_['entry_order_cancelled'] = 'Bestelling is geannuleerd:';
$_['entry_order_processing'] = 'Bestelling in verwerking:';
$_['entry_order_error'] = 'Bestellingsfout:';
$_['entry_sort_order'] = 'Sorteervolgorde:';
$_['entry_ing_api_key'] = 'ING PSP API Key:';
$_['entry_ing_total'] = 'Minimum bestelbedrag:';
$_['entry_ing_product'] = 'ING PSP Product:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_send_webhook'] = 'Genereer webhook URL:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Opslaan';
$_['text_button_cancel'] = 'Annuleren';
$_['text_enabled'] = 'Ingeschakeld';
$_['text_disabled'] = 'Uitgeschakeld';
$_['text_payments'] = 'Betalingen';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'ING PSP: Bancontact instellingen bijgewerkt';
$_['text_edit_ing'] = 'Bewerken ING PSP Payments: Bancontact instellingen';
$_['text_yes'] = 'Ja';
$_['text_no'] = 'Nee';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'De ING PSP API Key is verplicht';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Kopieer uw ING PSP API key van uw merchant portal.';
$_['info_help_total'] = 'De betaalmethode wordt alleen getoond als het totaalbedrag van een bestelling hoger is dan dit bedrag.';
$_['info_plugin_not_configured'] = 'ING PSP: Bancontact plugin is niet ingesteld.';
$_['info_help_ip_filter'] = 'U  kunt specifieke IP adressen opgeven waarvoor de betaalmethode zichtbaar is, bv als u wilt testen  (bijvoorbeeld: 128.0.0.1, 255.255.255.255). Vult u niets in dan is de betaalmethode voor alle IP adressen zichtbaar.';
$_['entry_ip_filter'] = 'IP-Filteren:';
$_['entry_test_api_key'] = 'Test API Key:';
$_['info_help_test_api_key'] = 'Vul hier de API Key in van uw test webshop.';