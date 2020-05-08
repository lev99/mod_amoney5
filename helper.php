<?php
/**
 * @version 3.0
 * @package AMoney
 * @copyright (C) 2008 Adeptus
 * @Email: adeptus@adeptsite.info
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
################################################################################
## Title............: AMoney                                                  ##
## Description......: Popular WebMoney module for Joomla CMS                  ##
## Author...........: Leonidas                                                ##
## Version..........: 1.0.7                                                   ##
## Created date.....: 17.12.2013                                              ##
## Contact info.....: url: foto-s.ru / e-mail: leonidas78@mail.ru             ##
## Joomla Version...: 1.5.х, 2.5.х and 3.0.x Stable and high                  ##
## Note.............: This script is a part of AMoney 1.0 package.            ##
## Based............: on AMoney 1.0 by Adeptus[http://www.adeptsite.info]     ##
################################################################################

// no direct access
defined('_JEXEC') or die;

// Global
$mainframe = JFactory::getApplication();
$mosConfig_live_site = JURI::base( true );

//css
$document =& JFactory::getDocument();
$document->addStyleSheet('modules/mod_amoney/css/templates.css');
//button
$am_button = $params->get('am_button', 'button');
///////////////////////////////
$characters = array(
"1","2","3","4","5","6","7","8","9","1","2","3",
"4","5","6","7","8","9","1","2","3","4","5","6",
"1","2","3","4","5","6","7","8","9");
$amonykeys = array();
while(count($amonykeys) < 7) {
$x = mt_rand(0, count($characters)-1);
if(!in_array($x, $amonykeys)) {
$amonykeys[] = $x;
}
}
foreach($amonykeys as $amonykey){
$random_chars1 .= $characters[$amonykey];
}
//jQuery
if ($params->get('off_jquery1')==1) {
$document =& JFactory::getDocument();
$document->addScript('modules/mod_amoney/js/jquery-2.0.3.js' );
};
if ($params->get('t1')==0) {
$t1='jQuery';
$t2='
jQuery.noConflict();
';
}
elseif ($params->get('t1')==1) {
$t1='$';
$t2='
var $ = jQuery.noConflict();
';
}
elseif ($params->get('t1')==2) {
$t1='$j';
$t2='
var $j = jQuery.noConflict();
';
}
elseif ($params->get('t1')==3) {
$t1='$';
$t2='';
};
//tipsy - Facebook-style tooltip plugin for jQuery
if ($params->get('off_tipsy1')==1) {
$document =& JFactory::getDocument();
$document->addScript('modules/mod_amoney/js/jquery.tipsy.js' );
$document->addScript('modules/mod_amoney/js/tipsy.js' );
$document->addStyleSheet('modules/mod_amoney/css/tipsy.css' );
};
// Note: please refer: "Powered by Donate-Amoney" - not to remove, if you want to remove, please contact the author of the script!
$str2 = 'Donate-Amoney';
$str1 = 'http://foto-s.ru/newspage/joomla/413-universal-module';
$str3 = JText::_('MOD_AMONEY_POWERED_BY');
$str4 = JText::_('MOD_AMONEY_VISIT_AUTHOR');
$copcop = 'Работает на&nbsp;<a id="north" href="http://foto-s.ru/newspage/joomla/413-universal-module" title="Посетить Автора!" rel="nofollow">Donate-Amoney</a>';
if ($params->get('copy')==1) {
$copycopy='<span class="letter">Работает на</span>&nbsp;<a class="north" href="http://foto-s.ru/newspage/joomla/413-universal-module" title="Посетить Автора!" rel="nofollow"><span class="letter1">Donate-Amoney</span></a>';
$copy= $copycopy; }
else { $copy=""; };
$width_border = $params->get('width_border', '100');
$height_border = $params->get('height_border', '180');
$height_border1 = ($height_border - 18);
// Change the appearance of jQuery
if ($params->get('jfadtogquery')==1) {
$jfadtogquery='fadeIn(1500)';
} else {
$jfadtogquery='toggle(500)';
};
///////////////////////////////
$datename = $params->get('datename', 'Updated:');
$current1 = $params->get('current1', '3000');
$goal1 = $params->get('goal1', '10000');
$date1 = $params->get('date1', '27/1/2009');
$whitebarheight = 100 - (($current1 / $goal1) * 100);
$bulbpercent = (($current1 / $goal1) * 100);
$rounded_number = round($bulbpercent);
if ($params->get('off_intrerst')==1) {
$off_intrerst = '<div class="karma1" style="text-align:center">';
$off_intrerst .= '<div class="karma2" style="text-align:center">';
$off_intrerst .= '<span class="letter3">$'.$goal1.'&nbsp;&nbsp;&nbsp;'.$rounded_number.'%&nbsp;&nbsp;&nbsp;$'.$current1.'</span>';
$off_intrerst .= '<div class="karma3 gray" style="margin:0px auto 0px;">';
$off_intrerst .= '<div class="red" style="width: '.$rounded_number.'%;float: right;"></div>';
$off_intrerst .= '</div>';
$off_intrerst .= '<div class="karma4" style="text-align:center">';
$off_intrerst .= '<span class="letter">'.$datename.'&nbsp;&nbsp;'.$date1.'</span>';
$off_intrerst .= '</div>';
$off_intrerst .= '</div>';
$off_intrerst .= '</div>';
} else {
$off_intrerst="";
};
//////////////////////////////////////////
$pretext = $params->get('pretext', '&#1041;&#1083;&#1072;&#1075;&#1086;&#1076;&#1072;&#1088;&#1085;&#1086;&#1089;&#1090;&#1100; &#1040;&#1074;&#1090;&#1086;&#1088;&#1091;');
$pretext5 = $params->get('pretext5', 'Donate');
$btntxt = $params->get('btntxt', '&#1054;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1090;&#1100;');
$exterlink = $params->get('exterlink', 0);
// Switch to a fixed amount
if ($params->get('amofixed')==1) {
$amofixed='readonly="readonly"'; }
else { $amofixed=""; };
// Webmoney
$use_wm = $params->get('use_wm', 1);
$use_p1 = $params->get('use_p1', 1);
$wmr = $params->get('wmr','R000000000000');
$use_p2 = $params->get('use_p2', 1);
$wmz = $params->get('wmz','Z000000000000');
$use_p3 = $params->get('use_p3', 1);
$wme = $params->get('wme','E000000000000');
$use_p4 = $params->get('use_p4', 1);
$wmu = $params->get('wmu','U000000000000');
$use_p5 = $params->get('use_p5', 1);
$wmb = $params->get('wmb','B000000000000');
$wm_summ = $params->get('wm_summ', '10');
$wm_successurl = $params->get('wm_successurl', JURI::base());
$wm_errorurl = $params->get('wm_errorurl', JURI::base());
$wm_url_adds = "https://merchant.webmoney.ru/lmi/payment.asp";
$wm_descpay = $params->get('wm_descpay','Gratitude to the Author');
$mmdescription = $params->get('mmdescription','Order in this store-syakom');
$mmmessage = $params->get('mmmessage','Pokupua so-so stuff');
$egoldinfo = $params->get('egoldinfo','');
if ($params->get('gost5')==1) {
$gost5 = array(
"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D","Е"=>"E","Ё"=>"YE","Ж"=>"ZH",
"З"=>"Z","И"=>"I","Й"=>"YI","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N","О"=>"O",
"П"=>"P","Р"=>"R","С"=>"S","Т"=>"T","У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS",
"Ч"=>"CH","Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"Y","Ь"=>"","Э"=>"JE","Ю"=>"YU",
"Я"=>"YA","а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"ye",
"ж"=>"zh","з"=>"z","и"=>"i","й"=>"yi","к"=>"k","л"=>"l","м"=>"m","н"=>"n",
"о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
"ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"","ы"=>"y","ь"=>"","э"=>"je",
"ю"=>"yu","я"=>"ya"
);
$wm_descpay1 = strtr($wm_descpay, $gost5);
$mmdescription1 = strtr($mmdescription, $gost5);
$mmmessage1 = strtr($mmmessage, $gost5);
$egoldinfo1 = strtr($egoldinfo, $gost5);
$pretext6 = strtr($pretext5, $gost5);
} else {
$gost5 = "";
$wm_descpay1 = $wm_descpay;
$mmdescription1 = $mmdescription;
$mmmessage1 = $mmmessage;
$egoldinfo1 = $egoldinfo;
$pretext6 = $pretext5;
};
// RBK Money
$use_rupay = $params->get('use_rupay', 0);
$rupay_submit = $params->get('rupay_submit','0000000');
$rur = $params->get('RUR','RU000000000');
$rupay_summ = $params->get('rupay_summ', '10');
$rupay_url_adds = "https://rbkmoney.ru/acceptpurchase.aspx";
$rupay_successurl = $params->get('rupay_successurl', JURI::base());
// Yandex
$use_yandex = $params->get('use_yandex', 0);
$yandex = $params->get('yandex','00000000000000');
$yandex_summ = $params->get('yandex_summ','10');
$yandex_url_adds = "https://money.yandex.ru/charity.xml";
$yandex_successurl = $params->get('yandex_successurl', JURI::base());
// E-gold
$use_egold = $params->get('use_egold', 0);
$egold_summ = $params->get('egold_summ','10');
$number = $params->get('number','0000000');
$name = $params->get('name', JURI::base());
$mail = $params->get('mail','you@mai.com');
$egold_url_adds = "https://www.e-gold.com/sci_asp/payments.asp";
$egold_successurl = $params->get('egold_successurl', JURI::base());
$egold_errorurl = $params->get('egold_errorurl', JURI::base());
// PayPal
$use_paypal = $params->get('use_paypal', 0);
$donate_email = $params->get('paypal_email','alex1962@donpac.ru');
$paypalcur_on = $params->get('paypalcur_on');
$paypalcur_val = $params->get('paypalcur_val');
$paypalval_on = $params->get('paypalval_on');
$paypalval_val = $params->get('paypalval_val');
$paypalvalleast_val = $params->get('paypalvalleast_val');
$donate_len = $params->get('donate_len','1');
$paypallen_val = $params->get('paypallen_val');
$link_cancel = $params->get('link_cancel',JURI::base());
$link_return = $params->get('link_return',JURI::base());
// LibertyReserve
$use_libertyreserve = $params->get('use_libertyreserve', 1);
$libertyreserve_summ = $params->get('libertyreserve_summ', '10');
$ur = $params->get('ur','U6541727');
$libertyreserve_url_adds = "https://sci.libertyreserve.com";
$libertyreserve_successurl = $params->get('libertyreserve_successurl', JURI::base());
$libertyreserve_errorurl = $params->get('libertyreserve_errorurl', JURI::base());
//////
$currency_libertyreserve	= $params->def( 'currency_libertyreserve', 'USD' );
$curr = array();
$curr[] = array('code'=>'LRUSD', 'title'=>'U.S Dollar');
$curr[] = array('code'=>'LREUR', 'title'=>'Euros');
$choose_cur	= $params->def( 'choose_cur', 0 );
$country	= $params->def( 'country', 'US' );
$gost12 = array(
"USD"=>"LRUSD","EUR"=>"LREUR"
);
$currency_libertyreserve1 = strtr($currency_libertyreserve, $gost12);
$gost13 = array(
"USD"=>"$","EUR"=>"&euro;"
);
$currency_libertyreserve2 = strtr($currency_libertyreserve, $gost13);
// MoneyBookers
$use_moneybookers = $params->get('use_moneybookers', 0);
$choose_cur1	= $params->def( 'choose_cur1', 0 );
$currency_moneybookers = $params->def( 'currency_moneybookers', 'USD' );
$moneybookers_email = $params->get('moneybookers_email','andrew.opeyda@gmail.com');
$moneybookers_summ = $params->get('moneybookers_summ', '10');
$moneybookers_url_adds = "https://www.moneybookers.com/app/payment.pl";
$moneybookers_successurl = $params->get('moneybookers_successurl', JURI::base());
$country1	= $params->def( 'country1', 'US' );
$curr1 = array();
$curr1[] = array('code'=>'USD', 'title'=>'USD - $');
$curr1[] = array('code'=>'AUD', 'title'=>'AUD - $');
$curr1[] = array('code'=>'GBP', 'title'=>'GBP - &pound;');
$curr1[] = array('code'=>'CAD', 'title'=>'CAD - $');
$curr1[] = array('code'=>'CZK', 'title'=>'CZK - K&#269;');
$curr1[] = array('code'=>'DKK', 'title'=>'DKK - kr');
$curr1[] = array('code'=>'EUR', 'title'=>'EUR - &euro;');
$curr1[] = array('code'=>'HKD', 'title'=>'HKD - HK$');
$curr1[] = array('code'=>'HUF', 'title'=>'HUF - Ft');
$curr1[] = array('code'=>'ILS', 'title'=>'ILS - &#8362;');
$curr1[] = array('code'=>'JPY', 'title'=>'JPY - &yen;');
$curr1[] = array('code'=>'MXN', 'title'=>'MXN - $');
$curr1[] = array('code'=>'NZD', 'title'=>'NZD - NZ$');
$curr1[] = array('code'=>'NOK', 'title'=>'NOK - kr');
$curr1[] = array('code'=>'PLN', 'title'=>'PLN - z&#322;');
$curr1[] = array('code'=>'SGD', 'title'=>'SGD - S$');
$curr1[] = array('code'=>'SEK', 'title'=>'SEK - kr');
$curr1[] = array('code'=>'CHF', 'title'=>'CHF');
// Robox
$use_robox = $params->get('use_robox', 0);
$mrh_login = $params->get('mrh_login','demo');
$mrh_pass1 = $params->get('mrh_pass1','Morbid11');
$inv_id = $params->get('inv_id', $random_chars1);
$robox_url_adds = "https://merchant.roboxchange.com/Index.aspx";
$out_summ = $params->get('out_summ','8.96');
$shp_item = "2";
$in_curr = "AlfaBankR";
$culture = $params->get('culture', 'ru');
$crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");
// Smskopilka
$use_sms = $params->get('use_sms', 0);
$sms_imag = $params->get('sms_imag','58160');
$sms_id = $params->get('sms_id','00000');
$smskopimg = JURI::base().'modules/mod_amoney/images/';
// Smszamok
$use_sms1 = $params->get('use_sms1', 0);
$sms1_id = $params->get('sms1_id','00000');
// MoneyMail
$use_mmail = $params->get('use_mmail', 0);
$mmna = $params->get('mmna','0000000000000000');
$imagemm = $params->get('imagemm', 0);
$mmtext = $params->get('mmtext', '');
/////////////////////////////////////////////
$mmshop_is = $params->get('mmshop_is','123456');
$mmsum = $params->get('mmsum','10.00');
$mmissuer_id = $params->get('mmissuer_id','543-TSH');
$mmsignature = $params->get('mmsignature','1234567890abcdef');
$logomm = JURI::base().'modules/mod_amoney/images/logomm.gif';
$mmail_url_adds = "https://money.mail.ru/pay/light/";
if ($params->get('mail_li')==1) {
$mail_li = '<div class="cont1" style="text-align: center;">';
$mail_li .= '<div class="south" title="'.$mmtext.'"><a class="amoney-mmail-img1" href="https://money.mail.ru/pay/account/'.$mmna.'/" rel="nofollow" target="_blank">';
$mail_li .= '<span class="amoney-mmail-img2" style="background-image: url('.JURI::base().'modules/mod_amoney/images/'.$imagemm.'.gif)">'.$mmtext.'</span>';
$mail_li .= '</a></div>';
$mail_li .= '</div>';
} else {
$mail_li = '<form id="m_mail-pay" name="m_mail" method="post" action="'.$mmail_url_adds.'" target="_blank">';
$mail_li .= '<div class="cont1" align="center">';
$mail_li .= '<div id="h25" class="ctynh15" style="text-align: center;"></div>';
$mail_li .= '</div>';
$mail_li .= ''.$off_intrerst.'';
$mail_li .= '<div class="cont1" style="text-align: center;">';
$mail_li .= '<span class="letter">'.JText::_('MOD_AMONEY_ENTER_AMOUNT1').'</span>';
$mail_li .= '</div>';
$mail_li .= '<div class="focus-example cont1" style="text-align: center;">';
$mail_li .= '<input type="hidden" name="shop_is" value="'.$mmshop_is.'"/>';
$mail_li .= '<input type="hidden" name="currency" value="RUR"/>';
$mail_li .= '<input id="m_mail-pay-1" class="m_mail-pay-1" type="text" name="sum" size="5" value="'.$mmsum.'" '.$amofixed.' title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'"/>&nbsp;<span class="letter">'.JText::_('MOD_AMONEY_AMONEY_RBL').'</span>';
$mail_li .= '<input type="hidden" name="description" value="'.$mmdescription1.'"/>';
$mail_li .= '<input type="hidden" name="issuer_id" value="'.$mmissuer_id.'"/>';
$mail_li .= '<input type="hidden" name="message" value="'.$mmmessage1.'"/>';
$mail_li .= '<input type="hidden" name="signature" value="'.$mmsignature.'"/>';
$mail_li .= '</div>';
$mail_li .= '<div class="cont2" style="text-align: center;">';
$mail_li .= '<input id="m_mail-pay-button" class="m_mail-pay-button" type="submit"  name="m_mail" value="'.$btntxt.'"/>';
$mail_li .= '</div>';
$mail_li .= '</form>';
};
// liqpay
$use_liqpay = $params->get('use_liqpay', 0);
$info_liqpay = $params->get('info_liqpay', 0);
$merchant_id = $params->get('merchant_id','i0000000000');
$phone = $params->get('phone','+00000000000');
$liqpay_url_adds = "https://www.liqpay.com/?do=clickNbuy";
$signature = $params->get('signature','XFXBKtVRGNKlyappjJUylZGjHFwDQ2zBCK2VH3J');
$liqpay_summ = $params->get('liqpay_summ', '10');
$liqpay_currency = $params->get('liqpay_currency', '0');
$gost3 = array( '0' => 'UAH', '1' => 'EUR', '2' => 'USD', '3' => 'RUR' );
$liq1_currency = strtr($liqpay_currency, $gost3);
$gost4 = array( '0' => '&#8372;', '1' => '&euro;', '2' => '$', '3' => '&#1412;' );
$liq1_currenc1 = strtr($liqpay_currency, $gost4);
$method='card,liqpay,delayed';
$result_url = $params->get('result_url', JURI::base());
$server_url = $params->get('server_url', JURI::base());
if ($params->get('switch_fixed')==1) {
$str = "<request>";
$str .= "<version>1.2</version>";
$str .= "<result_url>$result_url</result_url>";
$str .= "<server_url>$server_url</server_url>";
$str .= "<merchant_id>$merchant_id</merchant_id>";
$str .= "<order_id>$random_chars1</order_id>";
$str .= "<amount>$liqpay_summ</amount>";
$str .= "<currency>$liq1_currency</currency>";
$str .= "<description>$wm_descpay1</description>";
$str .= "<default_phone>$phone</default_phone>";
$str .= "<pay_way>$method</pay_way>";
$str .= "</request>";
$operation_xml = base64_encode($str);
$signature = base64_encode(sha1($signature.$str.$signature, 1));
$switch_fixed = '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<span class="letter">'.JText::_('MOD_AMONEY_FIXED_AMOUNT').'</span>';
$switch_fixed .= '</div>';
$switch_fixed .= '<div class="focus-example cont1" style="text-align: center;">
<input id="liqpay-pay-1" class="liqpay-pay-1" type="text" size="3" value="'.$liqpay_summ.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" readonly="readonly" />&nbsp;<span class="letter">'.$liq1_currency.'&nbsp;-&nbsp;'.$liq1_currenc1.'</span>
<input type="hidden" name="operation_xml" value="'.$operation_xml.'"/>
<input type="hidden" name="signature" value="'.$signature.'"/>
</div>';
} else {
$switch_fixed = '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<span class="letter">'.JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM').'</span>';
$switch_fixed .= '</div>';
$switch_fixed .= '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<input type="hidden" name="version" value="1.2"/>';
$switch_fixed .= '<input type="hidden" name="merchant_id" value="'.$merchant_id.'"/>';
$switch_fixed .= '<span class="focus-example1"><input id="liqpay-pay-1" class="liqpay-pay-1" type="text" size="3" name="amount" value="'.$liqpay_summ.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" '.$amofixed.' /></span>&nbsp;';
$switch_fixed .= '<span class="focus-example">';
$switch_fixed .= '<select id="liqpay-pay-2" class="liqpay-pay-2" name="currency" title="'.JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY').'" style="min-width:30px;">';
$switch_fixed .= '<optgroup label="'.JText::_('MOD_AMONEY_AMONEY_CHOICE').'">';
$switch_fixed .= '<option value="USD">USD</option>';
$switch_fixed .= '<option value="EUR">EUR</option>';
$switch_fixed .= '<option value="UAH">UAH</option>';
$switch_fixed .= '<option value="RUR">RUR</option>';
$switch_fixed .= '</optgroup>';
$switch_fixed .= '</select></span>';
$switch_fixed .= '<input type="hidden" name="description" value="'.$wm_descpay1.'"/>';
$switch_fixed .= '<input type="hidden" name="order_id" value="$random_chars1"/>';
$switch_fixed .= '<input type="hidden" name="operation_xml" value="'.$xml_encoded.'"/>';
$switch_fixed .= '<input type="hidden" name="signature" value="'.$lqsignature.'"/>';
$switch_fixed .= '</div>';
$xml = "<request>";
$xml .= "<version>1.2</version>";
$xml .= "<result_url>$result_url</result_url>";
$xml .= "<server_url>$server_url</server_url>";
$xml .= "<merchant_id>$merchant_id</merchant_id>";
$xml .= "<order_id>$random_chars1</order_id>";
$xml .= "<amount>$liqpay_summ</amount>";
$xml .= "<currency>$liq1_currency</currency>";
$xml .= "<description>$wm_descpay1</description>";
$xml .= "<default_phone>$phone</default_phone>";
$xml .= "<pay_way>$method</pay_way>";
$xml .= "</request>";
$xml_encoded = base64_encode($xml);
$lqsignature = base64_encode(sha1($signature.$xml.$signature, 1));
};
// SMScoin
$use_smscoin = $params->get('use_smscoin', 0);
$smscoin_id = $params->get('smscoin_id','000000');
$don_but = JURI::base().'modules/mod_amoney/images/4.gif';
$smscoin_lan = $params->get('smscoin_lan','russian');
// CberBank
$use_cbank = $params->get('use_cbank', 0);
$cbank_nemes = $params->get('cbank_nemes','');
$cbank_kpp = $params->get('cbank_kpp','775003035');
$cbank_inn = $params->get('cbank_inn','7707083893');
$cbank_kodokato = $params->get('cbank_kodokato','11111111111');
$cbank_raschchot = $params->get('cbank_raschchot','30301810500001000001');
$cbank_banks1 = $params->get('cbank_banks1','');
$cbank_bik = $params->get('cbank_bik','044525225');
$cbank_korsche = $params->get('cbank_korsche','30101081004000000225');
$cbank_kbk = $params->get('cbank_kbk','111111111111111111111');
$cbank_blago = $params->get('cbank_blago','&#1054;&#1082;&#1072;&#1079;&#1072;&#1085;&#1080;&#1077; &#1091;&#1089;&#1083;&#1091;&#1075;.');
$cbank_rub = $params->get('cbank_rub','0 &#1088;&#1091;&#1073;. 00 &#1082;&#1086;&#1087;.');
//////////////////////////////////////////////////////////////////////////////
if ($wmr != '') {
$wmtype1 = 'WMR';
$wmnum1 = $wmr;
}
if ($wmz != '') {
$wmtype2 = 'WMZ';
$wmnum2 = $wmz;
}
if ($wme != '') {
$wmtype3 = 'WME';
$wmnum3 = $wme;
}
if ($wmu != '') {
$wmtype4 = 'WMU';
$wmnum4 = $wmu;
}
if ($wmb != '') {
$wmtype5 = 'WMB';
$wmnum5 = $wmb;
}
require(JModuleHelper::getLayoutPath('mod_amoney'));
?>
