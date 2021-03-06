<?php
define("MODULE_PAYMENT_PAYMILL_CC_STATUS_TITLE", "Activer");
define("MODULE_PAYMENT_PAYMILL_CC_DESCRIPTION", "Journal PAYMILL");
define("MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_TITLE", "Activer le paiement rapide.");
define("MODULE_PAYMENT_PAYMILL_CC_FASTCHECKOUT_DESC", "Si ce mode est activ&eacute;, les donn&eacute;es de vos clients seront conserv&eacute;es par PAYMILL et remises &agrave; disposition pour de futurs achats. Le client n'aura &agrave; saisir ses donn&eacute;es qu'une seule fois. Cette solution est compatible PCI.");
define("MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_TITLE", "S&eacute;quence");
define("MODULE_PAYMENT_PAYMILL_CC_SORT_ORDER_DESC", "Position de l'affichage lors du paiement.");
define("MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_TITLE", "Cl&eacute; priv&eacute;e");
define("MODULE_PAYMENT_PAYMILL_CC_PRIVATEKEY_DESC", "Vous trouverez votre cl&eacute; priv&eacute;e dans le cockpit PAYMILL.");
define("MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_TITLE", "Cl&eacute; publique");
define("MODULE_PAYMENT_PAYMILL_CC_PUBLICKEY_DESC", "Vous trouverez votre cl&eacute; publique dans le cockpit PAYMILL.");
define("MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_TITLE", "Etat de l'ordre d'op&eacute;ration");
define("MODULE_PAYMENT_PAYMILL_CC_TRANSACTION_ORDER_STATUS_ID_DESC", "Inclure les informations de l'op&eacute;ration &agrave; ce niveau du statut de l'ordre.");
define("MODULE_PAYMENT_PAYMILL_CC_LOGGING_TITLE", "Activer la journalisation.");
define("MODULE_PAYMENT_PAYMILL_CC_LOGGING_DESC", "Si ce mode est activ&eacute;, les informations concernant l'avancement du traitement de la commande seront &eacute;crites dans le journal.");
define("MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_TITLE", "&Eacute;tat de l'ordre");
define("MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_TITLE", "Etat de l'ordre d'op&eacute;ration");
define("MODULE_PAYMENT_PAYMILL_CC_TRANS_ORDER_STATUS_ID_DESC", "Inclure les informations de l'op&eacute;ration &agrave; ce niveau du statut de l'ordre.");
define("MODULE_PAYMENT_PAYMILL_CC_ALLOWED_TITLE", "Pays accept&eacute;s");
define("MODULE_PAYMENT_PAYMILL_CC_ALLOWED_DESC", "Si rien n'a &eacute;t&eacute; s&eacute;lectionn&eacute;, tous les pays seront accept&eacute;s");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_PUBLIC_TITLE", "Carte de cr&eacute;dit");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER", "Titulaire de la carte");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_NUMBER", "Num&eacute;ro de carte");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY", "Valable jusqu'au");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC", "CVC");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_TOOLTIP", "Le code CVV ou CVC est une fonctionnalit&eacute; de s&eacute;curit&eacute; des cartes de cr&eacute;dit. Il se compose en g&eacute;n&eacute;ral d'un nombre de trois &agrave; quatre chiffres. Sur les cartes de cr&eacute;dit VISA, il est appel&eacute; code CVV. On trouve le m&ecirc;me code sur les cartes de cr&eacute;dit MasterCard, o&ugrave; il est appel&eacute; cependant CVC. CVC signifie &laquo; Card Validation Code &raquo; (&laquo; Code de validation de carte &raquo;). Le code CVV signifie quant &agrave; lui &laquo; Card Validation Value code &raquo; (&laquo; code de Valeur de validation de carte &raquo;). Similaires &agrave; MasterCard et Visa, les autres marques telles que Diners Club, Discover et JCB contiennent un nombre &agrave; trois chiffres que l'on retrouve g&eacute;n&eacute;ralement au dos de la carte de cr&eacute;dit. Les cartes MAESTRO existent avec et sans le CVV &agrave; trois chiffres. Si vous utilisez une carte MAESTRO sans CVV, vous pourrez saisir 000 dans le formulaire. American Express utilise le CID (card identification number - num&eacute;ro d'identification de carte). Le CID est un nombre &agrave; quatre chiffres que l'on retrouve g&eacute;n&eacute;ralement &agrave; l'avant de la carte, en haut &agrave; droite du num&eacute;ro de carte de cr&eacute;dit.");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_MODE_TITLE","Formulaire de paiement");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_MODE_DESC","");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_LANG","fr");
define("MODULE_PAYMENT_PAYMILL_CC_PCI_BUTTON","Change");
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
define("PAYMILL_FIELD_INVALID_CARD_NUMBER", "Veuillez saisir un num&eacute;ro de carte de cr&eacute;dit valide.");
define("PAYMILL_FIELD_INVALID_CARD_EXP", "Date d'expiration invalide");
define("PAYMILL_FIELD_INVALID_CARD_CVC", "CVC invalide");
define("PAYMILL_FIELD_INVALID_CARD_HOLDER", "Veuillez saisir le nom du titulaire de la carte.");
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
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_TITLE", "Activer les Webhooks");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_DESC", "Synchroniser automatiquement mes Remboursements &agrave; partir du Cockpit PAYMILL et mon magasin");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK_CREATE", "Cr&eacute;er des Webhooks");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK_REMOVE", "Supprimer les Webhooks");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK", "Cr&eacute;er des Webhooks");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JANUARY", "Janvier");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_FEBRUARY", "F&eacute;vrier");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MARCH", "Mars");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_APRIL", "Avril");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_MAY", "Mai");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JUNE", "Juin");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_JULY", "Juillet");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_AUGUST", "Ao&ucirc;t");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_SEPTEMBER", "Septembre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_OCTOBER", "Octobre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_NOVEMBER", "Novembre");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_MONTH_DECEMBER", "D&eacute;cembre");
define("MODULE_PAYMENT_PAYMILL_CC_ZONE_TITLE", "Zones autoris&eacute;es");
define("MODULE_PAYMENT_PAYMILL_CC_ZONE_DESC", "Veuillez entrer individuellement les zones qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple, USA, GB (laisser un blanc pour autoriser toutes les zones))");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_EXPIRY_INVALID", "Date d'expiration invalide");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CARDNUMBER_INVALID", "Veuillez saisir un num&eacute;ro de carte de cr&eacute;dit valide.");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_CVC_INVALID", "CVC invalide");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_CREDITCARD_OWNER_INVALID", "Veuillez saisir le nom du titulaire de la carte.");
define("PAYMILL_0", "Une erreur s'est produit pendant le traiement de votre paiement.");
define("MODULE_PAYMENT_PAYMILL_CC_TEXT_TITLE", "PAYMILL Carte de cr&eacute;dit");
define("TEXT_INFO_API_VERSION", "API Version");
define("MODULE_PAYMENT_PAYMILL_CC_STATUS_DESC", "");
define("MODULE_PAYMENT_PAYMILL_CC_ORDER_STATUS_ID_DESC", "");
define("MODULE_PAYMENT_PAYMILL_CC_ACCEPTED_CARDS", "Accepted Credit Cards");
define('PAYMILL_REFUND_BUTTON_TEXT', 'refund order');
define('PAYMILL_REFUND_SUCCESS', 'Order successful refunded.');
define('PAYMILL_REFUND_ERROR', 'Order not successful refunded.');
?>