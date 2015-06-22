<?php
define("MODULE_PAYMENT_PAYMILL_CC_STATUS_TITLE", "Attivare");
define("MODULE_PAYMENT_PAYMILL_CC_DESCRIPTION", "Registro PAYMILL");
define("MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_TITLE", "Abilitare pagamento veloce");
define("MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_DESC", "Abilitando la funzione, i dati dei suoi clienti saranno archiviati da PAYMILL e resi nuovamente disponibili per futuri acquisti. Il cliente dovr&agrave; inserire i propri dati una sola volta. Questa soluzione &egrave; conforme agli standard PCI.");
define("MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_TITLE", "Sequenza");
define("MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_DESC", "Posizione di visualizzazione durante il pagamento.");
define("MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_TITLE", "Chiave privata");
define("MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_DESC", "Pu&ograve; trovare la sua chiave privata nel pannello di controllo di PAYMILL.");
define("MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_TITLE", "Chiave pubblica");
define("MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_DESC", "Pu&ograve; trovare la sua chiave pubblica nel pannello di controllo di PAYMILL.");
define("MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_TITLE", "Stato dell'ordine della transazione");
define("MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_DESC", "Inserire le informazioni di transazione in questo livello di stato dell'ordine.");
define("MODULE_PAYMENT_PAYMILL_CC_LOGGING_TITLE", "Attivare la registrazione.");
define("MODULE_PAYMENT_PAYMILL_CC_LOGGING_DESC", "Abilitando la funzione, le informazioni riguardanti lo stato di avanzamento dell'elaborazione dell'ordine verranno scritte nel registro.");
define("MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_TITLE", "Stato dell'ordine");
define("MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_TITLE", "Stato dell'ordine della transazione");
define("MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_DESC", "Inserire le informazioni di transazione in questo livello di stato dell'ordine.");
define("MODULE_PAYMENT_PAYMILL_CC_ALLOWED_TITLE", "Paesi accettati");
define("MODULE_PAYMENT_PAYMILL_CC_ALLOWED_DESC", "Se non &egrave; stato selezionato nulla, saranno accettati tutti i paesi");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_PUBLIC_TITLE", "Carta di credito");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER", "Titolare carta");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_NUMBER", "Numero carta");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY", "Valida fino al");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC", "CVC");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_TOOLTIP", "Il codice CVV o CVC &egrave; una funzione di sicurezza delle carte di credito. Di solito, &egrave; un numero composto da tre o quattro cifre. Sulle carte di credito VISA, &egrave; indicato come codice CVV. Lo stesso codice pu&ograve; essere trovato sulle carte di credito MasterCard, dove per&ograve; &egrave; denominato CVC. CVC &egrave; l'abbreviazione di  &quot;Card Validation Code&quot; (Codice di validazione della carta). Il codice CVV, invece, &egrave; l'abbreviazione di &quot;Card Validation Value code&quot; (Codice del valore di verifica della carta). Similmente alla MasterCard e alla Visa, altre marche come la Diners Club, la Discover e la JCB contengono un numero a tre cifre che di solito pu&ograve; essere trovato sul retro della carta di credito. Esistono carte MAESTRO con o senza un codice CVV a tre cifre. Nel caso in cui venga utilizzata una carta MAESTRO priva di CVV, &egrave; possibile inserire 000 nel modulo. L'American Express utilizza il CID (Numero di identificazione della carta). Il CID &egrave; un numero a quattro cifre che di solito si trova sulla parte anteriore della carta, in alto a destra dal numero della carta di credito.");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_MODE_TITLE","Payment form");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_LANG","it");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_BUTTON","Change");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_MODE_DESC","");
define("PAYMILL_10001", "General undefined response.");
define("PAYMILL_10002", "Still waiting on something.");
define("PAYMILL_20000", "General success response.");
define("PAYMILL_40000", "General problem with data.");
define("PAYMILL_40001", "General problem with payment data.");
define("PAYMILL_40100", "Problem with credit card data.");
define("PAYMILL_40101", "Problem with cvv.");
define("PAYMILL_40102", "Card expired or not yet valid.");
define("PAYMILL_40103", "Limit exceeded.");
define("PAYMILL_40104", "Card invalid.");
define("PAYMILL_40105", "Expiry date not valid.");
define("PAYMILL_40106", "Credit card brand required.");
define("PAYMILL_40200", "Problem with bank account data.");
define("PAYMILL_40201", "Bank account data combination mismatch.");
define("PAYMILL_40202", "User authentication failed.");
define("PAYMILL_40300", "Problem with 3d secure data.");
define("PAYMILL_40301", "Currency / amount mismatch");
define("PAYMILL_40400", "Problem with input data.");
define("PAYMILL_40401", "Amount too low or zero.");
define("PAYMILL_40402", "Usage field too long.");
define("PAYMILL_40403", "Currency not allowed.");
define("PAYMILL_50000", "General problem with backend.");
define("PAYMILL_50001", "Country blacklisted.");
define("PAYMILL_50100", "Technical error with credit card.");
define("PAYMILL_50101", "Error limit exceeded.");
define("PAYMILL_50102", "Card declined by authorization system.");
define("PAYMILL_50103", "Manipulation or stolen card.");
define("PAYMILL_50104", "Card restricted");
define("PAYMILL_50105", "Invalid card configuration data.");
define("PAYMILL_50200", "Technical error with bank account.");
define("PAYMILL_50201", "Card blacklisted.");
define("PAYMILL_50300", "Technical error with 3D secure.");
define("PAYMILL_50400", "Decline because of risk issues.");
define("PAYMILL_50500", "General timeout.");
define("PAYMILL_50501", "Timeout on side of the acquirer.");
define("PAYMILL_50502", "Risk management transaction timeout");
define("PAYMILL_50600", "Duplicate transaction.");
define("PAYMILL_FIELD_INVALID_CARD_NUMBER", "Inserire un numero di carta di credito valido.");
define("PAYMILL_FIELD_INVALID_CARD_EXP", "Data scadenza non valida");
define("PAYMILL_FIELD_INVALID_CARD_CVC", "CVC non valido");
define("PAYMILL_FIELD_INVALID_CARD_HOLDER", "Inserire il nome del titolare della carta.");
define("PAYMILL_INTERNAL_SERVER_ERROR", "The communication with the psp failed.");
define("PAYMILL_INVALID_PUBLIC_KEY", "The public key is invalid.");
define("PAYMILL_INVALID_PAYMENT_DATA", "Paymentmethod, card type currency or country not authorized");
define("PAYMILL_UNKNOWN_ERROR", "Unknown Error");
define("PAYMILL_3DS_CANCELLED", "3-D Secure process has been canceled by the user");
define("PAYMILL_FIELD_INVALID_CARD_EXP_YEAR", "Invalid Expiry Year");
define("PAYMILL_FIELD_INVALID_CARD_EXP_MONTH", "Invalid Expiry Month");
define("PAYMILL_FIELD_INVALID_AMOUNT_INT", "Missing amount for 3-D Secure");
define("PAYMILL_FIELD_INVALID_AMOUNT", "Missing amount for 3-D Secure");
define("PAYMILL_FIELD_INVALID_CURRENCY", "Invalid currency for 3-D Secure");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_TITLE", "Abilita webhook");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_DESC", "Sincronizza automaticamente i miei Rimborsi dal cockpit di PAYMILL con il mio negozio");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK_CREATE", "Crea webhook");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK_REMOVE", "Rimuovi webhook");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK", "Crea webhook");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JANUARY", "Gennaio");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_FEBRUARY", "Febbraio");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MARCH", "Marzo");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_APRIL", "Aprile");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MAY", "Maggio");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JUNE", "Giugno");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JULY", "Luglio");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_AUGUST", "Agosto");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_SEPTEMBER", "Settembre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_OCTOBER", "Ottobre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_NOVEMBER", "Novembre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_DECEMBER", "Dicembre");
define("MODULE_PAYMENT_PAYMILL_CC_ZONE_TITLE", "Zone supportate");
define("MODULE_PAYMENT_PAYMILL_CC_ZONE_DESC", "Inserire individualmente le zone supportate per l'utilizzo di questo modulo (ad es. USA, UK (lasciare lo spazio vuoto per inserire tutte le zone))");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY_INVALID", "Data scadenza non valida");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CARDNUMBER_INVALID", "Inserire un numero di carta di credito valido.");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_INVALID", "CVC non valido");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER_INVALID", "Inserire il nome del titolare della carta.");
define("PAYMILL_0", "Si &egrave; verificato un errore durante l'elaborazione del pagamento.");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_TITLE", "PAYMILL Carta di credito");
define("TEXT_INFO_API_VERSION", "API Version");
define("MODULE_PAYMENT_PAYMILL_CC_STATUS_DESC", "");
define("MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_DESC", "");
define("MODULE_PAYMENT_PAYMILL_CC_ACCEPTED_CARDS", "Accepted Credit Cards");
define('PAYMILL_REFUND_BUTTON_TEXT', 'refund order');
define('PAYMILL_REFUND_SUCCESS', 'Order successful refunded.');
define('PAYMILL_REFUND_ERROR', 'Order not successful refunded.');
?>