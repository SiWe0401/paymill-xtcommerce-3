<?php
define('TEXT_INFO_API_VERSION', 'API Version');
define('MODULE_PAYMENT_PAYMILL_CC_ACCEPTED_CARDS', 'Accepted Creditcards');
define('MODULE_PAYMENT_PAYMILL_CC_STATUS_TITLE', 'Activate Creditcard Module');
define('MODULE_PAYMENT_PAYMILL_CC_STATUS_DESC', '');
define('MODULE_PAYMENT_PAYMILL_CC_DESCRIPTION', 'PAYMILL Log');
define('MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_TITLE', 'Fast Checkout');
define('MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_DESC', '');
define('MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_TITLE', 'Sort Order');
define('MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_DESC', 'Sort Order. Smallest Number will be shown first.');
define('MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_TITLE', 'Private API Key');
define('MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_DESC', '');
define('MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_TITLE', 'Public API Key');
define('MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_DESC', '');
define('MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_TITLE', 'Transaction order status');
define('MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_DESC', '');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_100', 'Payment could not be processed. The payment status is "open"');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_200', 'Payment could not be processed.');
define('MODULE_PAYMENT_PAYMILL_TEXT_ERROR_300', 'An API error occured!');
define('MODULE_PAYMENT_PAYMILL_CC_LOGGING_TITLE', 'Activate Logging');
define('MODULE_PAYMENT_PAYMILL_CC_LOGGING_DESC', '');
define('MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_TITLE', 'Order Status');
define('MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_DESC', 'Sets the order status for successful payment');
define('MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_TITLE', 'Transaction Order Status');
define('MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_DESC', 'Include transaction information in this order status level.');
define('MODULE_PAYMENT_PAYMILL_CC_ZONE_TITLE', 'Payment Zone');
define('MODULE_PAYMENT_PAYMILL_CC_ZONE_DESC', 'If a zone is selected, only enable this payment method for that zone.');
define('MODULE_PAYMENT_PAYMILL_CC_ALLOWED_TITLE' , 'Allowed Zones');
define('MODULE_PAYMENT_PAYMILL_CC_ALLOWED_DESC' , 'Please enter the zones <b>individually</b> that should be allowed to use this module (e.g. US, UK (leave blank to allow all zones))');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_TITLE','Paymill Credit Card');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_PUBLIC_TITLE','Credit Card');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER','Credit Card Owner');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_NUMBER','Credit Card Number');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY','Valid until');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC','CVC-Code');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY_INVALID','The expiry date is invalid.');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CARDNUMBER_INVALID','The creditcard number is invalid.');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_INVALID','The CVC field is a mandotory field.');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER_INVALID','The Credit Card Owner field is ivalid.');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JANUARY','January');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_FEBRUARY','February');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MARCH','March');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_APRIL','April');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MAY','May');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JUNE','June');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JULY','July');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_AUGUST','August');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_SEPTEMBER','September');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_OCTOBER','October');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_NOVEMBER','November');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_DECEMBER','December');
define('MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_TOOLTIP', 'What is a CVV/CVC number? Prospective credit cards will have a 3 to 4-digit number, usually on the back of the card. It ascertains that the payment is carried out by the credit card holder and the card account is legitimate. On Visa the CVV (Card Verification Value) appears after and to the right of your card number. Same goes for Mastercard’s CVC (Card Verfication Code), which also appears after and to the right of  your card number, and has 3-digits. Diners Club, Discover, and JCB credit and debit cards have a three-digit card security code which also appears after and to the right of your card number. The American Express CID (Card Identification Number) is a 4-digit number printed on the front of your card. It appears above and to the right of your card number. On Maestro the CVV appears after and to the right of your number. If you don’t have a CVV for your Maestro card you can use 000.');
define('PAYMILL_10001', 'General undefined response.');
define('PAYMILL_10002', 'Still waiting on something.');
define('PAYMILL_20000', 'General success response.');
define('PAYMILL_40000', 'General problem with data.');
define('PAYMILL_40001', 'General problem with payment data.');
define('PAYMILL_40100', 'Problem with credit card data.');
define('PAYMILL_40101', 'Problem with cvv.');
define('PAYMILL_40102', 'Card expired or not yet valid.');
define('PAYMILL_40103', 'Limit exceeded.');
define('PAYMILL_40104', 'Card invalid.');
define('PAYMILL_40105', 'Expiry date not valid.');
define('PAYMILL_40106', 'Credit card brand required.');
define('PAYMILL_40200', 'Problem with bank account data.');
define('PAYMILL_40201', 'Bank account data combination mismatch.');
define('PAYMILL_40202', 'User authentication failed.');
define('PAYMILL_40300', 'Problem with 3d secure data.');
define('PAYMILL_40301', 'Currency / amount mismatch');
define('PAYMILL_40400', 'Problem with input data.');
define('PAYMILL_40401', 'Amount too low or zero.');
define('PAYMILL_40402', 'Usage field too long.');
define('PAYMILL_40403', 'Currency not allowed.');
define('PAYMILL_50000', 'General problem with backend.');
define('PAYMILL_50001', 'Country blacklisted.');
define('PAYMILL_50100', 'Technical error with credit card.');
define('PAYMILL_50101', 'Error limit exceeded.');
define('PAYMILL_50102', 'Card declined by authorization system.');
define('PAYMILL_50103', 'Manipulation or stolen card.');
define('PAYMILL_50104', 'Card restricted.');
define('PAYMILL_50105', 'Invalid card configuration data.');
define('PAYMILL_50200', 'Technical error with bank account.');
define('PAYMILL_50201', 'Card blacklisted.');
define('PAYMILL_50300', 'Technical error with 3D secure.');
define('PAYMILL_50400', 'Decline because of risk issues.');
define('PAYMILL_50500', 'General timeout.');
define('PAYMILL_50501', 'Timeout on side of the acquirer.');
define('PAYMILL_50502', 'Risk management transaction timeout.');
define('PAYMILL_50600', 'Duplicate transaction.');
define('PAYMILL_internal_server_error', 'Communication with PSP failed');
define('PAYMILL_invalid_public_key', 'Public Key is invalid');
define('PAYMILL_invalid_payment_data', 'Payment mode, card type, currency or country not accepted.');
define('PAYMILL_unknown_error', 'Unknown Error');
define('PAYMILL_3ds_cancelled', '3-D Secure process has been aborted');
define('PAYMILL_field_invalid_card_number', 'Invalid or missing card number');
define('PAYMILL_field_invalid_card_exp_year', 'Invalid or missing expiry year');
define('PAYMILL_field_invalid_card_exp_month', 'Invalid or missing expiry month');
define('PAYMILL_field_invalid_card_exp', 'Card no longer (or not yet) valid');
define('PAYMILL_field_invalid_card_cvc', 'Invalid CVC');
define('PAYMILL_field_invalid_card_holder', 'Invalid card holder');
define('PAYMILL_field_invalid_amount_int', 'Invalid or missing amount for 3-D Secure');
define('PAYMILL_field_invalid_amount', 'Invalid or missing amount for 3-D Secure');
define('PAYMILL_field_invalid_currency', 'Invalid or missing currency for 3-D Secure');
?>