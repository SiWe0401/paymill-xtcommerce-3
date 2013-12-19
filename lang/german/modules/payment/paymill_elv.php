<?php
define('TEXT_INFO_API_VERSION', 'API Version');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_TITLE', ' Paymill ELV');
define('MODULE_PAYMENT_PAYMILL_ELV_STATUS_TITLE', 'ELV Modul aktivieren');
define('MODULE_PAYMENT_PAYMILL_ELV_STATUS_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_DESCRIPTION', 'PAYMILL Log');
define('MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_TITLE', 'Transaction Order Status');
define('MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_TITLE', 'Fast Checkout');
define('MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_TITLE', 'Webhooks aktivieren');
define('MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK', 'Webhooks anlegen');
define('MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_CREATE', 'Webhooks anlegen');
define('MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_REMOVE', 'Webhooks entfernen');
define('MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_TITLE', 'Anzeigereihenfolge');
define('MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_DESC', 'Reihenfolge der Anzeige. Kleinste Ziffer wird zuerst angezeigt.');
define('MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_TITLE', 'Geheimer API Key');
define('MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_TITLE', '&Ouml;ffentlicher API Key');
define('MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_DESC', '');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_100', 'Zahlung konnte nicht ausgeführt werden. Der Zahlungsstatus ist "open"');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_200', 'Zahlung konnte nicht ausgeührt werden.');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_300', 'Es ist ein API Fehler aufgetreten!');
define('MODULE_PAYMENT_PAYMILL_ELV_LOGGING_TITLE', 'Logging aktivieren');
define('MODULE_PAYMENT_PAYMILL_ELV_LOGGING_DESC', '');
define('MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_TITLE', 'Bestellstatus');
define('MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_DESC', 'Setzt den Bestellstatus f&uuml;r erfolgreiche Zahlungen');
define('MODULE_PAYMENT_PAYMILL_ELV_ZONE_TITLE', 'Erlaubt f&uuml;r Zonen');
define('MODULE_PAYMENT_PAYMILL_ELV_ZONE_DESC', 'F&uuml;r alle Zonen leer lassen');
define('MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_TITLE' , 'Erlaubt f&uuml;r Zonen');
define('MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_DESC' , 'F&uuml;r alle Zonen leer lassen');
define('MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_TITLE', 'API Ergebnisse');
define('MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_DESC', 'API Ergebnisse in diesem Bestellstatus f&uuml;r Bestellungen speichern.');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_PUBLIC_TITLE', 'ELV');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT', 'Kontonummer');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE', 'Bankleitzahl');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER', 'Kontoinhaber');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_INVALID', 'Die Kontonummer, die Sie angegeben haben, ist ungültig. Bitte korrigieren Sie Ihre Angaben.');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE_INVALID', 'Die Bankleitzahl, die Sie angegeben haben, ist ungültig. Bitte korrigieren Sie Ihre Angaben.');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER_INVALID', 'Der Kontoinhaber, die Sie angegeben haben, ist ungültig. Bitte korrigieren Sie Ihre Angaben.');
define('PAYMILL_10001', 'Genereller Fehler bitte wenden Sie sich an den Support.');
define('PAYMILL_10002', 'Wir warten noch immer auf etwas.');
define('PAYMILL_20000', 'General success response.');
define('PAYMILL_40000', 'Generelles Problem mit den Daten.');
define('PAYMILL_40001', 'Es gibt ein Problem mit den Payment Daten.');
define('PAYMILL_40100', 'Es existieren Probleme mit der Kreditkarte. Nähere Details können nicht übergeben werden.');
define('PAYMILL_40101', 'Der CVV ist nicht korrekt.');
define('PAYMILL_40102', 'Die Kreditkarte ist abgelaufen oder noch gültig.');
define('PAYMILL_40103', 'Das Umsatzimit der Kreditkarte wurde mit dieser Transaktion überschritten oder ist bereits überschritten.');
define('PAYMILL_40104', 'Die Kreditkarte ist ungültig');
define('PAYMILL_40105', 'Das Kreditkartenablaufdatum ist nicht korrekt.');
define('PAYMILL_40106', 'Kreditkarten-Anbieter ist erforderlich.');
define('PAYMILL_40200', 'Probleme mit den Konto Daten.');
define('PAYMILL_40201', 'Daten stimmen nicht mit dem Bank-Account überein.');
define('PAYMILL_40202', 'Die Benutzer-Authentifizierung ist fehlgeschlagen.');
define('PAYMILL_40300', 'Es gibt es Problem mit den 3DSecure Daten.');
define('PAYMILL_40301', 'Währung oder Betrag stimmen nicht überein.');
define('PAYMILL_40400', 'Es gibt ein Problem mit den Eingabe Daten.');
define('PAYMILL_40401', 'Der Betrag ist zu niedrig oder null.');
define('PAYMILL_40402', 'Der Verwendungszweck ist zu lang.');
define('PAYMILL_40403', 'Die Währung ist nicht für den Kunden konfigurierten.');
define('PAYMILL_50000', 'Generelles Problem mit dem Backend.');
define('PAYMILL_50001', 'Die Kreditkarte ist auf einer Schwarzen Liste.');
define('PAYMILL_50100', 'Technisches Problem mit der Kreditkarte.');
define('PAYMILL_50101', 'Limit überschritten.');
define('PAYMILL_50102', 'Diese Karte wurde ohne weitere Gründe abgelehnt.');
define('PAYMILL_50103', 'Diese Karte wurde wegen Kartenmanipulationen abgelehnt.');
define('PAYMILL_50104', 'Die Transaktion wurde vom Authorisierungs-System abgelehnt (Karte durch Bank eingeschränkt).');
define('PAYMILL_50105', 'Die Konfiguration ist ungültig.');
define('PAYMILL_50200', 'Technischer Fehler mit dem Bankkonto.');
define('PAYMILL_50201', 'Dieser Kundenaccount ist auf einer Schwarzen Liste.');
define('PAYMILL_50300', 'Es gibt einen technischen Fehler mit 3-D Secure.');
define('PAYMILL_50400', 'Ablehnung aufgrund von Risiko Problemen.');
define('PAYMILL_50500', 'Generelle Zeitüberschreitung.');
define('PAYMILL_50501', 'Die Schnittstelle zum Acquirer reagiert nicht); daher bekommen wir keine Antwort ob die Transaktion erfolgreich durchgelaufen ist.');
define('PAYMILL_50502', 'Es gibt eine Zeitüberschreitung bei der Risiko-Management Transaktion.');
define('PAYMILL_50600', 'Doppelte Transaktion.');
define('MODULE_PAYMENT_PAYMILL_ELV_SEPA_TITLE','Zahlungsformular auf IBAN/BIC umstellen.');
define('MODULE_PAYMENT_PAYMILL_ELV_SEPA_DESC','Momentan nur aus Deutschland verf&uuml;gbar');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC','BIC');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN','IBAN');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN_INVALID','IBAN ungültig');
define('MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC_INVALID','BIC ungültig');
define('PAYMILL_internal_server_error', 'Kommunikation mit dem PSP fehlgeschlagen');
define('PAYMILL_invalid_public_key', ' Public Key ungültig');
define('PAYMILL_invalid_payment_data', 'Für diesen Zahlungsmodus, Kreditkartentyp, Währung oder Land nicht zugelassen');
define('PAYMILL_unknown_error', 'Unbekannter Fehler');
define('PAYMILL_field_invalid_amount_int', 'Fehlender oder ungültiger Betrag für 3-D Secure');
define('PAYMILL_field_invalid_amount', 'Fehlender oder ungültiger Betrag für 3-D Secure');
define('PAYMILL_field_invalid_currency', 'Fehlende oder ungültige Währung für 3-D Secure');
define('PAYMILL_field_invalid_account_number', 'Fehlende oder ungültige Kontonummer');
define('PAYMILL_field_invalid_account_holder', 'Fehlender oder ungültiger Karteninhaber');
define('PAYMILL_field_invalid_bank_code', 'Fehlende oder ungültige Bankleitzahl');
define('PAYMILL_field_invalid_iban', 'Fehlende oder ungültige IBAN');
define('PAYMILL_field_invalid_bic', 'Fehlende oder ungültiger BIC');
define('PAYMILL_field_invalid_country', 'Fehlendes oder nicht unterstütztes Land');
define('PAYMILL_field_invalid_bank_data', 'Fehlende oder ungültige Bankdatenkombination');
define('PAYMILL_0', 'Beim Ausführen der Zahlung ist ein Fehler aufgetreten.');
?>