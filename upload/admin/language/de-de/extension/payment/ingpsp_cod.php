<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'ING PSP: Nachnahme';
$_['text_ingpsp_cod'] = '<img src="view/image/payment/ingpsp.png" alt="ING PSP" title="ING PSP" />';
$_['text_extension'] = 'Extensions';

/**
 * Entry points
 */
$_['entry_status'] = 'Status:';
$_['entry_order_completed'] = 'Bestellung abgeschlossen:';
$_['entry_order_new'] = 'Neu Bestellung:';
$_['entry_order_expired'] = 'Bestellung abgelaufen:';
$_['entry_order_cancelled'] = 'Bestellung annulliert:';
$_['entry_order_processing'] = 'Bestellung wird bearbeitet:';
$_['entry_order_error'] = 'Bestellfehler:';
$_['entry_sort_order'] = 'Sortierreihenfolge:';
$_['entry_ing_api_key'] = 'ING PSP API Schüssel:';
$_['entry_ing_total'] = 'Gesamt:';
$_['entry_ing_product'] = 'ING PSP Produkt:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_send_webhook'] = 'Webhook-URL automatisch generieren:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Speichern';
$_['text_button_cancel'] = 'Abbrechen';
$_['text_enabled'] = 'Aktiviert';
$_['text_disabled'] = 'Deaktiviert';
$_['text_payments'] = 'Zahlungen';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'ING PSP: Nachnahme Einstellungen aktualisiert!';
$_['text_edit_ing'] = 'Bearbeiten ING PSP: Nachnahme Einstellungen';
$_['text_yes'] = 'Ja';
$_['text_no'] = 'Nein';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'ING PSP API schlüssel ist erforderlich!';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Duplizieren Sie Ihre ING PSP API Schlüssel von Merchant Portal.';
$_['info_help_total'] = 'Die Zahlungsmethode wird gezeigt wenn die kasse insgesamt der Mindestbetrag erreicht.';
$_['info_plugin_not_configured'] = 'ING PSP: Nachnahme plugin ist nicht konfiguriert.';
$_['info_help_ip_filter'] = 'Wenn sie eingegeben werden, wird nur für diese IPs die Zahlungsmethode angezeigt. (Beispiel: 128.0.0.1, 255.255.255.255)';
$_['entry_ip_filter'] = 'IP-Filterung:';
$_['entry_test_api_key'] = 'Test API schlüssel:';
$_['info_help_test_api_key'] = 'Wenn eingegeben, wird dieser API-Schlüssel nur zu Testzwecken verwendet werden.';