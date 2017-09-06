<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'ING PSP: Bank Transfer';
$_['text_ingpsp_sepa'] = '<img src="view/image/payment/ingpsp.png" alt="ING PSP" title="ING PSP" />';
$_['text_extension'] = 'Extensions';

/**
 * Entry points
 */
$_['entry_status'] = 'Status:';
$_['entry_order_completed'] = 'Order Completed:';
$_['entry_order_new'] = 'Order New:';
$_['entry_order_expired'] = 'Order Expired:';
$_['entry_order_cancelled'] = 'Order Cancelled:';
$_['entry_order_processing'] = 'Order Processing:';
$_['entry_order_error'] = 'Order Error:';
$_['entry_sort_order'] = 'Sort Order:';
$_['entry_ing_api_key'] = 'ING PSP API Key:';
$_['entry_ing_total'] = 'Minimum order amount:';
$_['entry_ing_product'] = 'ING PSP Product:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_send_webhook'] = 'Generate webhook URL:';
$_['entry_order_captured'] = 'Order Captured:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Save';
$_['text_button_cancel'] = 'Cancel';
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_payments'] = 'Payments';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'ING PSP: Bank Transfer settings updated!';
$_['text_edit_ing'] = 'Edit ING PSP: Bank Transfer Settings';
$_['text_yes'] = 'Yes';
$_['text_no'] = 'No';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'ING PSP API Key is required!';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Get your ING PSP API key from Payments merchant portal.';
$_['info_help_total'] = 'The checkout total the order must reach before this payment method becomes active.';
$_['info_plugin_not_configured'] = 'ING PSP: Bank Transfer plugin is not configured.';
$_['info_help_ip_filter'] = 'If entered, only for those IPs payment method will be displayed. (Example: 128.0.0.1, 255.255.255.255)';
$_['entry_ip_filter'] = 'IP Filtering:';
$_['entry_test_api_key'] = 'Test API Key:';
$_['info_help_test_api_key'] = 'If entered this API key will be used for testing purposes.';
