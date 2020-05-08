<?php
/**
 * @version		1.0.5 2013
 * @package		AMoney
 * @subpackage	mod_amoney
 * @copyright	Copyright (C) Leonidas 2008 - 2011. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

?>
<!-- Leonidas "Donate-Amoney" Module (v1.0.7) starts here -->
<script type="text/javascript">
/* <![CDATA[ */
	<?php
	echo $t2;
	if ($use_wm)
	{?>
	function show_wm()
	{
	<?php
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#wm').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_rupay)
	{?>
	function show_rupay()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#rupay').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_yandex)
	{?>
	function show_yandex()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#yandex').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_egold)
	{?>
	function show_egold()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#egold').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_paypal)
	{?>
	function show_paypal()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#paypal').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_libertyreserve)
	{?>
	function show_libertyreserve()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#libertyreserve').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_moneybookers)
	{?>
	function show_moneybookers()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#moneybookers').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_robox)
	{?>
	function show_robox()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#robox').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_sms)
	{?>
	function show_sms()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#sms').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_sms1)
	{?>
	function show_sms1()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#sms1').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_mmail)
	{?>
	function show_mmail()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#mmail').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_liqpay)
	{?>
	function show_liqpay()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#liqpay').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_smscoin)
	{?>
	function show_smscoin()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		<?php echo $t1;?>('#smscoin').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_cbank)
	{?>
	function show_cbank()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide();
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}?>
		<?php echo $t1;?>('#cbank').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}?>

	function hide_all()
	{
	<?php
	if ($use_wm)
	{?>
		<?php echo $t1;?>('#wm').hide();
	<?php
	}
	if ($use_rupay)
	{?>
		<?php echo $t1;?>('#rupay').hide()
	<?php
	}
	if ($use_yandex)
	{?>
		<?php echo $t1;?>('#yandex').hide();
	<?php
	}
	if ($use_egold)
	{?>
		<?php echo $t1;?>('#egold').hide();
	<?php
	}
	if ($use_paypal)
	{?>
		<?php echo $t1;?>('#paypal').hide();
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<?php echo $t1;?>('#libertyreserve').hide();
	<?php
	}
	if ($use_moneybookers)
	{?>
		<?php echo $t1;?>('#moneybookers').hide();
	<?php
	}
	if ($use_robox)
	{?>
		<?php echo $t1;?>('#robox').hide();
	<?php
	}
	if ($use_sms)
	{?>
		<?php echo $t1;?>('#sms').hide();
	<?php
	}
	if ($use_sms1)
	{?>
		<?php echo $t1;?>('#sms1').hide();
	<?php
	}
	if ($use_mmail)
	{?>
		<?php echo $t1;?>('#mmail').hide();
	<?php
	}
	if ($use_liqpay)
	{?>
		<?php echo $t1;?>('#liqpay').hide();
	<?php
	}
	if ($use_smscoin)
	{?>
		<?php echo $t1;?>('#smscoin').hide();
	<?php
	}
	if ($use_cbank)
	{?>
		<?php echo $t1;?>('#cbank').hide();
	<?php
	}?>
		return false;
	}
/* ]]> */
</script>

<!-- Panel -->
<div id="amoney" class="amoney-module<?php echo $params->get('moduleclass_sfx'); ?>" style="text-align: center;">
	<?php
	if ($pretext != '')
	{?>
<div class="amoney-mod1" style="text-align: center;">
		<span class="panel1"><span class="north" onclick="hide_all()" title="<?php echo JText::_('MOD_AMONEY_HIDEALL'); ?>"><?php echo $pretext;?></span></span>
	</div>
	<div class="amoney-payment" style="text-align: center;">
	<?php
	}
	if ($use_wm)
	{?>
		<a id="h1" class="south" title="<?php echo JText::_('MOD_AMONEY_WEBMONEY'); ?>" onclick="show_wm()"></a>
	<?php
	}
	if ($use_rupay)
	{?>
		<a id="h2" class="south" title="<?php echo JText::_('MOD_AMONEY_RBKMONEY'); ?>" onclick="show_rupay()"></a>
	<?php
	}
	if ($use_yandex)
	{?>
		<a id="h3" class="south" title="<?php echo JText::_('MOD_AMONEY_YANDEX'); ?>" onclick="show_yandex()" ></a>
	<?php
	}
	if ($use_egold)
	{?>
		<a id="h4" class="south" title="<?php echo JText::_('MOD_AMONEY_EGOLD'); ?>" onclick="show_egold()"></a>
	<?php
	}
	if ($use_paypal)
	{?>
		<a id="h5" class="south" title="<?php echo JText::_('MOD_AMONEY_PAYPAL'); ?>" onclick="show_paypal()"></a>
	<?php
	}
	if ($use_libertyreserve)
	{?>
		<a id="h6" class="south" title="<?php echo JText::_('MOD_AMONEY_LIBRES'); ?>" onclick="show_libertyreserve()"></a>
	<?php
	}
	if ($use_moneybookers)
	{?>
		<a id="h7" class="south" title="<?php echo JText::_('MOD_AMONEY_MONBOOK'); ?>" onclick="show_moneybookers()"></a>
	<?php
	}
	if ($use_robox)
	{?>
		<a id="h8" class="south" title="<?php echo JText::_('MOD_AMONEY_ROBOKASSA'); ?>" onclick="show_robox()"></a>
	<?php
	}
	if ($use_sms)
	{?>
		<a id="h9" class="south" title="<?php echo JText::_('MOD_AMONEY_SMS'); ?>" onclick="show_sms()"></a>
	<?php
	}
	if ($use_sms1)
	{?>
		<a id="h10" class="south" title="<?php echo JText::_('MOD_AMONEY_SMS1'); ?>" onclick="show_sms1()"></a>
	<?php
	}
	if ($use_mmail)
	{?>
		<a id="h11" class="south" title="<?php echo JText::_('MOD_AMONEY_MMAIL'); ?>" onclick="show_mmail()"></a>
	<?php
	}
	if ($use_liqpay)
	{?>
		<a id="h12" class="south" title="<?php echo JText::_('MOD_AMONEY_LIQPAY'); ?>" onclick="show_liqpay()"></a>
	<?php
	}
	if ($use_smscoin)
	{?>
		<a id="h13" class="south" title="<?php echo JText::_('MOD_AMONEY_SMSCOIN'); ?>" onclick="show_smscoin()"></a>
	<?php
	}
	if ($use_cbank)
	{?>
		<a id="h14" class="south" title="CberBank" onclick="show_cbank()"></a>
	<?php
	}?>
</div>
</div>
	<?php
	if ($use_wm)
	{?>
<!-- Webmoney -->
<div id="wm" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="wm-pay" name="pay" method="post" action="<?php echo $wm_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h15" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM'); ?></span>
				</div>
				<div class="cont1" style="text-align: center;">
<span class="focus-example1">
					<input id="wm-pay-1" class="wm-pay-1" type="text" name="LMI_PAYMENT_AMOUNT" size="3" value="<?php echo $wm_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span>
<span class="focus-example">
				<select id="wm-pay-2" class="wm-pay-2" name="LMI_PAYEE_PURSE"  title="<?php echo JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY'); ?>" style="min-width:30px;" >
					<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE'); ?>">	
	<?php
	if ($use_p1)
	{?>
						<option value="<?php echo $wmnum1;?>"><?php echo $wmtype1;?></option>
	<?php
	}
	if ($use_p2)
	{?>
						<option value="<?php echo $wmnum2;?>"><?php echo $wmtype2;?></option>
	<?php
	}
	if ($use_p3)
	{?>
						<option value="<?php echo $wmnum3;?>"><?php echo $wmtype3;?></option>
	<?php
	}
	if ($use_p4)
	{?>
						<option value="<?php echo $wmnum4;?>"><?php echo $wmtype4;?></option>
	<?php
	}
	if ($use_p5)
	{?>
						<option value="<?php echo $wmnum5;?>"><?php echo $wmtype5;?></option>
	<?php
	}?>
					</optgroup>
				</select>

</span>
					<input type="hidden" name="LMI_PAYMENT_DESC" value="<?php echo $wm_descpay1;?>" />
					<input type="hidden" name="LMI_PAYMENT_NO" value="<?php echo $random_chars1; ?>" />
					<input type="hidden" name="LMI_SIM_MODE" value="0" />
					<input type="hidden" name="LMI_SUCCESS_URL" value="<?php echo $wm_successurl;?>" />
					<input type="hidden" name="LMI_SUCCESS_METHOD" value="2" />
					<input type="hidden" name="LMI_FAIL_URL" value="<?php echo $wm_errorurl;?>" />
					<input type="hidden" name="LMI_FAIL_METHOD" value="2" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="wm-pay-button" class="<?php echo $am_button; ?>" type="submit" name="wmsubmit" value="<?php echo $btntxt; ?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_rupay)
	{?>
<!-- RBKmoney -->
<div id="rupay"  class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="rupay-pay" name="rupay_rupay" method="post" action="<?php echo $rupay_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h16" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1'); ?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
						<input id="rupay-pay-1" class="rupay-pay-1" type="text" name="recipientAmount" size="3" value="<?php echo $rupay_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />&nbsp;<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_RBL'); ?></span>
						<input type="hidden" name="eshopId" value="<?php echo $rupay_submit;?>" />
						<input type="hidden" name="orderId" value="<?php echo $random_chars1; ?>" />
						<input type="hidden" name="serviceName" value="<?php echo $random_chars1; ?>" />
						<input type="hidden" name="recipientCurrency" value="RUR" />
						<input type="hidden" name="serviceName" value="<?php echo $wm_descpay1;?>" />
						<input type="hidden" name="eshopAccount" value="<?php echo $rur;?>" />
						<input type="hidden" name="successUrl" value="<?php echo $rupay_successurl;?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="rupay-pay-button" class="<?php echo $am_button; ?>" type="submit" name="rupaysubmit" value="<?php echo $btntxt;?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_yandex)
	{?>
<!-- Yandex -->
<div id="yandex" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="yandex-pay" name="yandex_pay" method="post" action="<?php echo $yandex_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h17" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1');?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
					<input id="yandex-pay-1" class="yandex-pay-1" type="text" name="CompanySum" size="3" value="<?php echo $yandex_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />&nbsp;<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_RBL');?></span>
					<input type="hidden" name="to" value="<?php echo $yandex;?>" />
					<input type="hidden" name="CompanyName" value="<?php echo $wm_descpay1;?>" />
					<input type="hidden" name="CompanyLink" value="<?php echo $yandex_successurl;?>" />
				</div>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_ACCOUBT');?></span>&nbsp;<span class="letter2"><?php echo $yandex;?></span>
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="yandex-pay-button" class="<?php echo $am_button; ?>" type="submit" name="yandexsubmit" value="<?php echo $btntxt;?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_egold)
	{?>
<!-- E-Gold -->
<div id="egold" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form  id="egold-pay" name="egold_pay" method="post" action="<?php echo $egold_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h18" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM'); ?></span>
				</div>
				<div class="cont1" style="text-align: center;">
            <input type="hidden" name="PAYEE_ACCOUNT"  value="<?php echo $number;?>" />
            <input type="hidden" name="PAYEE_NAME"  value="<?php echo $name;?>" />
            <input type="hidden" name="PAYMENT_METAL_ID" value="1" />
<span class="focus-example1">
			<input id="egold-pay-1" class="egold-pay-1" type="text" name="PAYMENT_AMOUNT"  size="3" value="<?php echo $egold_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span>
			<input type="hidden" name="LMI_PAYMENT_DESC" value="<?php echo $wm_descpay1;?>" />
            <input type="hidden" name="STATUS_URL"  value="mailto:<?php echo $mail;?>" />
			<input type="hidden" name="NOPAYMENT_URL" value="<?php echo $egold_errorurl;?>" />
            <input type="hidden" name="PAYMENT_URL" value="<?php echo $egold_successurl;?>" />
            <input type="hidden" name="BAGGAGE_FIELDS"  value="" />
<span class="focus-example">
				<select id="egold-pay-2" class="egold-pay-2" name="payment_units" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY'); ?>" style="min-width:30px;">
                	<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE'); ?>">
                		<option value="1">USD</option>
                		<option value="85">Euro</option>
                	</optgroup>
                </select>
</span>
			<input type="hidden" name="suggested_memo" value="<?php echo $egoldinfo1; ?>" />
          </div>
		<div class="cont2" style="text-align: center;">
			<input id="egold-pay-button" class="<?php echo $am_button; ?>" type="submit" name="egoldsubmit" value="<?php echo $btntxt;?>" />
		</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_paypal)
	{?>
<!-- PayPal -->
<div id="paypal" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
<?php
$length = isset( $_POST[ 'paypallength' ] ) ? (int) $_POST[ 'paypallength' ] : "";
$amount = isset( $_POST[ 'paypalamount' ] ) ? trim( $_POST[ 'paypalamount' ] ) : "";
$amount = str_replace( ',', '.', $amount );
if( 1 <= $length && $length <= 3 )
{
  $amount = (int) round( $amount, 0 );
}
if( $amount < $paypalvalleast_val )
{
  $amount = $paypalvalleast_val;
}
$currency_code = isset( $_POST[ 'paypalcurrency_code' ] ) ? trim( $_POST[ 'paypalcurrency_code' ] ) : 0;
if ($length == 4) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&amount=".$amount."&no_shipping=0&no_note=1&tax=0&currency_code=".$currency_code."&bn=PP%2dDonationsBF&charset=UTF%2d8&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 1) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=W&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 2) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=M&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 3) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=Y&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
$currencies = array( 'CAD' => '$', 'USD' => '$', 'GBP' => '&pound;', 'AUD' => '$', 'JPY' => '&yen;', 'EUR' => '&euro;' );
echo "<div class=\"cont1\" style=\"text-align: center;\">";
echo "<div id=\"h19\" class=\"ctynh15\" style=\"text-align:center;\"></div>";
echo "</div>";
echo "$off_intrerst";
echo "<form id=\"paypal-pay\" action=\"".$_SERVER['REQUEST_URI']."\" method=\"post\" target=\"_blank\"><div class=\"cont1\" style=\"text-align: center;\">";
if ($paypalval_on == 0) {
  $javaScript = <<< JAVASCRIPT
<script type="text/javascript">
  function donateChangeCurrency( )
  {
    var selectionObj = document.getElementById( 'donate_currency_code' );
    var selection = selectionObj.value;
    var currencyObj = document.getElementById( 'donate_symbol_currency' );
    if( currencyObj )
    {
      var currencySymbols = { 'CAD': '$', 'USD': '$', 'GBP': '&pound;', 'AUD': '$', 'JPY': '&yen;', 'EUR': '&euro;' };
      var currencySymbol = currencySymbols[ selection ];
      currencyObj.innerHTML = currencySymbol;
    }
  }
</script>
JAVASCRIPT;
  $symbol = $currencies[ $paypalcur_val ];
  echo "$javaScript <div class=\"cont1\" style=\"text-align: center;\"><label class=\"letter\">". JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM')."</label>
</div>
<span class=\"focus-example1\">
<span class=\"letter\">".$symbol."</span>
<input id=\"paypal-pay-1\" class=\"paypal-pay-1\" type=\"text\" value=\"".$paypalval_val."\" name=\"paypalamount\" size=\"3\" title=\"".JText::_('MOD_AMONEY_ENTER_AMOUNT')."\" $amofixed /></span>&nbsp;";
}
elseif ($paypalval_on == 1) {
  echo "<input type=\"hidden\" value=\"".$paypalval_val."\" name=\"paypalamount\" />";
}
if ($paypalcur_on == 0) {
  print( "<span class=\"focus-example\"><select id=\"paypal-pay-3\" class=\"paypal-pay-3\" name=\"paypalcurrency_code\" title=\"".JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY')."\" style=\"min-width:30px;\" onchange=\"donateChangeCurrency();\">
<optgroup label=\"". JText::_('MOD_AMONEY_AMONEY_CHOICE')."\">" );
  foreach( $currencies as $currency => $dummy )
  {
    $selected = ( $currency == $paypalcur_val ) ? " selected=\"selected\"" : "";
    print( "<option value=\"$currency\"$selected>$currency</option>\n" );
  }
  print( "</optgroup></select></span>\n" );
}
elseif ($paypalcur_on == 1) {
  echo "<input type=\"hidden\" name=\"paypalcurrency_code\" value=\"".$paypalcur_val."\" />";
}
if ($donate_len == 0) {
  ?>
<span class="focus-example">
  <select id="paypal-pay-2" class="paypal-pay-2" name="paypallength" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_PERIODICITY'); ?>" style="min-width:30px;">
	<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE');?>">
    <option value="4"><?php echo JText::_('MOD_AMONEY_ONE_TIME');?></option>
    <option value="1"><?php echo JText::_('MOD_AMONEY_WEEKLY');?></option>
    <option value="2"><?php echo JText::_('MOD_AMONEY_MONTHLY');?></option>
    <option value="3"><?php echo JText::_('MOD_AMONEY_ANNUAL');?></option>
	</optgroup>
  </select>
</span>
	<?php
	}
	else if ($donate_len == 1)
	{?>
	<input type="hidden" name="paypallength" value="<?php echo $paypallen_val;?>" />
	<?php
	}?>
</div>
<div class="cont2" style="text-align: center;">
<input id="paypal-pay-button" class="<?php echo $am_button; ?>" type="submit" name="paypalsubmit" value="<?php echo $btntxt;?>" />
</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_libertyreserve)
	{?>
<!-- LibertyReserve -->
<div id="libertyreserve" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="libertyreserve-pay" name="libertyreserve" method="post" action="<?php echo $libertyreserve_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h20" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1');?></span>
				</div>
				<div class="cont1" style="text-align: center;">
	<input type="hidden" name="lr_acc" value="<?php echo $ur;?>" />
<?php if ($choose_cur) { ?>
<span class="focus-example1">
	<input id="libertyreserve-pay-1" class="libertyreserve-pay-1" type="text" name="lr_amnt" size="3" value="<?php echo $libertyreserve_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span>
<span class="focus-example">
			<select id="libertyreserve-pay-2" class="libertyreserve-pay-2" name="lr_currency" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY'); ?>" style="min-width:30px;">
				<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE'); ?>">
			<?php foreach ($curr as $cur_code) {
				$selected = ($cur_code['code'] == $currency_libertyreserve)?' selected="selected"':'';
				echo '<option value="'.$cur_code['code'].'"'.$selected.'>'.$cur_code['title'].'</option>';
			}
			?>
				</optgroup>
			</select></span>
<?php } else { echo '<span class="letter">'.$currency_libertyreserve2.'</span>&nbsp;&nbsp;
<span class="focus-example1">
	<input id="libertyreserve-pay-1" class="libertyreserve-pay-1" type="text" name="lr_amnt" value="'.$libertyreserve_summ.'" size="3" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" '.$amofixed.' />
</span>
	<input type="hidden" name="lr_currency" value="'.$currency_libertyreserve1.'" />'; }?>
	<input type="hidden" name="lr_comments" value="<?php echo $wm_descpay1;?>" />
	<input type="hidden" name="lr_success_url" value="<?php echo $libertyreserve_successurl;?>" />
	<input type="hidden" name="lr_fail_url" value="<?php echo $libertyreserve_errorurl;?>" />
	<input type="hidden" name="language" value="<?php echo $country; ?>" />
	<!-- baggage field -->
	<input type="hidden" name="order_id" value="<?php echo $random_chars1; ?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="libertyreserve-pay-button" class="<?php echo $am_button; ?>" type="submit" name="libertyreservesubmit" value="<?php echo $btntxt;?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_moneybookers)
	{?>
<!-- MoneyBookers -->
<div id="moneybookers" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="moneybookers-pay" name="moneybookers" method="post" action="<?php echo $moneybookers_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h21" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1');?></span>
				</div>
				<div class="cont1" style="text-align: center;">
<?php if ($choose_cur1) { ?>
<span class="focus-example1">
			<input id="moneybookers-pay-1" class="moneybookers-pay-1" type="text" name="amount" size="3" value="<?php echo $moneybookers_summ;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span>
<span class="focus-example">
			<select id="moneybookers-pay-2" class="moneybookers-pay-2" name="currency" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY'); ?>" style="min-width:30px;">
			<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE'); ?>">
			<?php foreach ($curr1 as $cur_code1) {
				$selected1 = ($cur_code1['code'] == $currency_moneybookers)?' selected="selected"':'';
				echo '<option value="'.$cur_code1['code'].'"'.$selected.'>'.$cur_code1['title'].'</option>';
			}
			?>
			</optgroup>
			</select></span>
<?php } else echo '<span class="focus-example"><span class="letter">'.$currency_moneybookers.'</span>&nbsp;&nbsp;
					<input id="moneybookers-pay-1" class="moneybookers-pay-1" type="text" name="amount" size="3" value="'.$moneybookers_summ.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" '.$amofixed.' />
</span>
					<input type="hidden" name="currency" value="'.$currency_moneybookers.'"/>'; ?>
					<input type="hidden" name="pay_to_email" value="<?php echo $moneybookers_email;?>" />
					<input type="hidden" name="status_url" value="<?php echo $moneybookers_successurl;?>" />
					<input type="hidden" name="language" value="<?php echo $country1; ?>" />
					<input type="hidden" name="detail1_description" value="<?php echo $pretext6;?>" />
					<input type="hidden" name="detail1_text" value="<?php echo $wm_descpay1;?> &mdash; N<?php echo $random_chars1; ?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="moneybookers-pay-button" class="<?php echo $am_button; ?>" type="submit" name="moneybookerssubmit" value="<?php echo $btntxt;?>" />
				</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_robox)
	{?>
<!-- Robox -->
<div id="robox" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="robox-pay" name="robox" method="post" action="<?php echo $robox_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h22" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_FIXED_AMOUNT');?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
      <input type="hidden" name="MrchLogin" value="<?php echo $mrh_login;?>" />
      <input id="robox-pay-1" class="robox-pay-1" type="text" name="outsum" size="3" value="<?php echo $out_summ;?>" title="<?php echo JText::_('MOD_AMONEY_A_FIXIXED_AMOUNT'); ?>" readonly="readonly" />&nbsp;<span class="letter">WMR</span>
      <input type="hidden" name="InvId" value="<?php echo $inv_id;?>"  />
      <input type="hidden" name="Desc" value="<?php echo $wm_descpay1;?>" />
      <input type="hidden" name="SignatureValue" value="<?php echo $crc;?>" />
      <input type="hidden" name="Shp_item" value="<?php echo $shp_item;?>" />
      <input type="hidden" name="IncCurrLabel" value="<?php echo $in_curr;?>" />
      <input type="hidden" name="Culture" value="<?php echo $culture;?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="robox-pay-button" class="<?php echo $am_button; ?>" type="submit" name="roboxsubmit" value="<?php echo $btntxt;?>" />
				</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_sms)
	{?>
<!-- Smskopilka -->
<div id="sms" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
				<div class="cont1" style="text-align: center;">
					<div id="h23" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
<a rel="nofollow" href="javascript:void(0)" onclick="javascript:window.open('http://smskopilka.ru/?info&amp;id=<?php echo $sms_id;?>','smskopilka','width=450,height=480,status=no,toolbar=no, menubar=no,scrollbars=yes,resizable=yes');">
<img class="kopilka south" src="<?php echo $smskopimg;?><?php echo $sms_imag;?>.gif" alt="<?php echo JText::_('MOD_AMONEY_SMS_ALT');?>" title="<?php echo JText::_('MOD_AMONEY_SMS_TIILE');?>" style="border:0" /></a>
				</div>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_sms1)
	{?>
<!-- Smszamok -->
<div id="sms1" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="smszamok-pay" name="smszamok" method="post" action="javascript:void(0)" onclick="window.open('http://iface.smszamok.ru/client/instructions.php?pid=<?php echo $sms1_id;?>', '_blank', 'location=no,height=300,width=700,scrollbars=1,resizable=1', false);">
				<div class="cont1" style="text-align: center;">
					<div id="h24" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_SMS_DESCRIPTION');?></span>
				</div>
				<div class="cont2" style="text-align: center;">
				<button id="smszamok-pay-button" class="<?php echo $am_button; ?>"><?php echo $btntxt;?></button>
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_mmail)
	{?>
<!-- MoneyMail -->
<div id="mmail" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<?php echo $mail_li; ?>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_liqpay)
	{?>
<!-- liqpay -->
<div id="liqpay" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
	<form id="liqpay-pay" name="liqpay" method="post" action="<?php echo $liqpay_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="h26" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php
						echo $off_intrerst;
						echo $switch_fixed;
					?>
				<div class="cont2" style="text-align: center;">
					<input id="liqpay-pay-button" class="<?php echo $am_button; ?>" type="submit" name="liqpaysubmit" value="<?php echo $btntxt;?>"/>
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_smscoin)
	{?>
<!-- SMScoin -->
<div id="smscoin" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
				<div class="cont1" style="text-align: center;">
					<div id="h27" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
<div id="cont2" class="cont2" style="text-align: center;">
<script type="text/javascript">
/* <![CDATA[ */
smsDonateId = '<?php echo $smscoin_id;?>';
smsDonateButton = '<?php echo $don_but;?>';
smsDonateLanguage = '<?php echo $smscoin_lan;?>';
function smsDonateInit() {
smsDonateButton = window.smsDonateButton || 1;
document.write('<img id="south" src="' + smsDonateButton + '" alt="Donate" title="Donate" onclick="smsDonatePopup(\'' + (window.smsDonateLanguage? window.smsDonateLanguage: '') + '\')" style="cursor: pointer" />');
}
function smsDonatePopup(language) {
if (!window.smsDonateId) return;
var lang = (!!language)? '&language=' + language: '';
var ls = (language == "english")? '_en': '';
window.open('http://donate.smscoin.com/js/smsdonate/index' + ls +
'.html?sid=' + smsDonateId + lang,
'smsdonate_popup', 'height=500,left=' + (screen.width - 700 >> 1) +
',resizable=yes,scrollbars=yes,top=' + (screen.height - 500 >> 1) +
',width=700');
}
smsDonateInit();
/* ]]> */
</script>
</div>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_cbank)
	{?>
<!-- CberBank -->
<div id="cbank" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>px;text-align: center;">
				<div class="cont1" style="text-align: center;">
					<div id="h28" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
<div id="cont3" class="cont2" style="text-align: center;">

<script type="text/javascript">
/* <![CDATA[ */
function new_window()
{
var win=window.open('','_blank','width=800,height=700')
win.document.open()
win.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">')
win.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">')
win.document.write('<head>')
win.document.write('<meta http-equiv="content-type" content="text/html; charset=utf-8"/>')
win.document.write('<title>&#1057;&#1095;&#1077;&#1090;</title>')
win.document.write('<style type="text/css">')
win.document.write('         div { position: absolute; background: transparent; text-align: left; color: #000000; font-family: Arial; font-size: 9pt; }')
win.document.write('         .center { text-align: center; }')
win.document.write('         .wide { width: 100%; }')
win.document.write('         .bfull { border: 1px #000000 solid; }')
win.document.write('         .smallf { font-size: 6pt; }')
win.document.write('         .field { border: none; border-bottom: 1px #000000 solid; font-style: italic; font-size: 8.5pt; }')
win.document.write('   @media print {')
win.document.write('    div .window {')
win.document.write('     widows: 0;')
win.document.write('     orphans: 0;')
win.document.write('    }')
win.document.write('   }')
win.document.write('</style>')
win.document.write('</head>')
win.document.write('<body>')
win.document.write('<div class="bfull" style="left: 20px; top: 20px; width: 705px; height: 574px;">')
win.document.write('<div class="bfull" style="left: 0px; top: 0px; width: 191px; height: 287px;">')
win.document.write('<div class="wide center" style="top: 13px;">&#1048;&#1079;&#1074;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077; &#8470;<?php echo $random_chars1; ?> </div>')
win.document.write('<div class="wide center" style="top: 206px;">&#1050;&#1072;&#1089;&#1089;&#1080;&#1088;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 191px; top: 0px; width: 514px; height: 287px;">')
win.document.write('<div class="smallf" style="left: 452px; top: 10px;">&#1060;&#1086;&#1088;&#1084;&#1072; &#1051;&#1059;&#1062;-4</div>')
win.document.write('<div class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_nemes; ?>,&nbsp;&#1050;&#1055;&#1055;:<?php echo $cbank_kpp; ?>,&nbsp;&#1048;&#1053;&#1053;:<?php echo $cbank_inn; ?>,&nbsp;&#1054;&#1050;&#1040;&#1058;&#1054;:<?php echo $cbank_kodokato; ?></div>')
win.document.write('<div class="smallf center" style="top: 40px; left: 7px; width: 500px;">&#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 7px; width: 350px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_banks1; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 7px; width: 350px;">&#1053;&#1072;&#1080;&#1084;&#1077;&#1085;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 364px; width: 143px;">&nbsp;<?php echo $cbank_raschchot; ?></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 364px; width: 143px;">&#1056;&#1072;&#1089;&#1095;&#1077;&#1090;&#1085;&#1099;&#1081; &#1089;&#1095;&#1077;&#1090;</div>')
win.document.write('<div class="field" style="top: 84px; left: 7px; width: 500px;">&nbsp;&#1050;/&#1089;&nbsp;<?php echo $cbank_korsche; ?>,&nbsp;&#1041;&#1048;&#1050;:<?php echo $cbank_bik; ?>,&nbsp;&#1050;&#1041;&#1050;:<?php echo $cbank_kbk; ?></div>')
win.document.write('<div class="smallf center" style="top: 100px; left: 7px; width: 500px;">&#1076;&#1088;&#1091;&#1075;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1086;&#1074;&#1089;&#1082;&#1080;&#1077; &#1088;&#1077;&#1082;&#1074;&#1080;&#1079;&#1080;&#1090;&#1099;</div>')
win.document.write('<div class="field" style="top: 114px; left: 7px; width: 500px; height:14px; overflow:hidden;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 130px; left: 7px; width: 500px;">&#1060;&#1048;&#1054; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 144px; left: 7px; width: 500px;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 160px; left: 7px; width: 500px;">Адрес плательщика</div>')
win.document.write('<div class="field" style="top: 174px; left: 7px; width: 500px;"><?php echo $cbank_blago; ?>, &#1041;&#1077;&#1079; &#1053;&#1044;&#1057;</div>')
win.document.write('<div class="smallf center" style="top: 190px; left: 7px; width: 500px;">&#1053;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div style="top: 204px; left: 7px; width: 76px;">&#1057;&#1091;&#1084;&#1084;&#1072;</div>')
win.document.write('<div class="field" style="top: 204px; left: 90px; width: 190px;"><?php echo $cbank_rub; ?></div>')
win.document.write('<div style="top: 246px; left: 7px; width: 200px;">&#1055;&#1086;&#1076;&#1087;&#1080;&#1089;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1097;&#1080;&#1082;&#1072;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 0px; top: 287px; width: 191px; height: 287px;">')
win.document.write('<div class="wide center" style="top: 13px;">&#1048;&#1079;&#1074;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077; &#8470;<?php echo $random_chars1; ?></div>')
win.document.write('<div class="wide center" style="top: 206px;">&#1050;&#1072;&#1089;&#1089;&#1080;&#1088;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 191px; top: 287px; width: 514px; height: 287px;">')
win.document.write('<div class="smallf" style="left: 452px; top: 10px;">&#1060;&#1086;&#1088;&#1084;&#1072; &#1051;&#1059;&#1062;-4</div>')
win.document.write('<div class="field" style="top: 24px; left: 7px; width: 500px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_nemes; ?>,&nbsp;&#1050;&#1055;&#1055;:<?php echo $cbank_kpp; ?>,&nbsp;&#1048;&#1053;&#1053;:<?php echo $cbank_inn; ?>,&nbsp;&#1054;&#1050;&#1040;&#1058;&#1054;:<?php echo $cbank_kodokato; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 40px; left: 7px; width: 500px;">&#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 7px; width: 350px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_banks1; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 7px; width: 350px;">&#1053;&#1072;&#1080;&#1084;&#1077;&#1085;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 364px; width: 143px;">&nbsp;<?php echo $cbank_raschchot; ?></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 364px; width: 143px;">&#1056;&#1072;&#1089;&#1095;&#1077;&#1090;&#1085;&#1099;&#1081; &#1089;&#1095;&#1077;&#1090;</div>')
win.document.write('<div class="field" style="top: 84px; left: 7px; width: 500px;"><span class="field" style="top: 84px; left: 7px; width: 500px;">&nbsp;&#1050;/&#1089;&nbsp;<?php echo $cbank_korsche; ?>,&nbsp;&#1041;&#1048;&#1050;:<?php echo $cbank_bik; ?>,&nbsp;&#1050;&#1041;&#1050;:<?php echo $cbank_kbk; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 100px; left: 7px; width: 500px;">&#1076;&#1088;&#1091;&#1075;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1086;&#1074;&#1089;&#1082;&#1080;&#1077; &#1088;&#1077;&#1082;&#1074;&#1080;&#1079;&#1080;&#1090;&#1099;</div>')
win.document.write('<div class="field" style="top: 114px; left: 7px; width: 500px; height:14px; overflow:hidden;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 130px; left: 7px; width: 500px;">&#1060;&#1048;&#1054; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 144px; left: 7px; width: 500px;"><span class="field" style="top: 144px; left: 7px; width: 500px;">&nbsp;</span></div>')
win.document.write('<div class="smallf center" style="top: 160px; left: 7px; width: 500px;">&#1040;&#1076;&#1088;&#1077;&#1089; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 174px; left: 7px; width: 500px;"><span class="field" style="top: 174px; left: 7px; width: 500px;"><?php echo $cbank_blago; ?>, &#1041;&#1077;&#1079; &#1053;&#1044;&#1057;</span></div>')
win.document.write('<div class="smallf center" style="top: 190px; left: 7px; width: 500px;">&#1053;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div style="top: 204px; left: 7px; width: 76px;">&#1057;&#1091;&#1084;&#1084;&#1072;</div>')
win.document.write('<div class="field" style="top: 204px; left: 90px; width: 190px;"><?php echo $cbank_rub; ?></div>')
win.document.write('<div style="top: 246px; left: 7px; width: 200px;">&#1055;&#1086;&#1076;&#1087;&#1080;&#1089;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1097;&#1080;&#1082;&#1072;</div>')
win.document.write('</div>')
win.document.write('</div>')
win.document.write('<div class="window" style="top: 630px;">Print <b>Ctrl+P</b></div>')
win.document.write('</body></html>')
win.document.close()
}
/* ]]> */
</script>

<input id="cbank-pay-button" class="<?php echo $am_button; ?>" type="submit" value="<?php echo JText::_('MOD_AMONEY_SAVINGS_BANK');?>" onclick="new_window()" />

</div>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($info_liqpay)
	{?>
<div id="ampoweredby_inf" style="text-align: center;">
					<?php
if ($params->get('switch_fixed')==1) {
$operation_envelop = '<operation_envelope>';
$operation_envelop .= '<operation_xml>'.$operation_xml.'</operation_xml>';
$operation_envelop .= '<signature>'.$signature.'</signature>';
$operation_envelop .= '</operation_envelope>';
$post = '<?xml version=\"1.0\" encoding=\"UTF-8\"?>';
$post .= '<request>';
$post .= '<liqpay>'.$operation_envelop.'</liqpay>';
$post .= '</request>';
$url = "https://www.liqpay.com/?do=api_xml";
$page = "/?do=api_xml";
$headers = array("POST ".$page." HTTP/1.0",
			"Content-type: text/xml;charset=\"utf-8\"",
			"Accept: text/xml",
			"Content-length: ".strlen($post));
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_TIMEOUT, 60);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
     $result = curl_exec($ch);
     curl_close($ch);
     echo $result;
} else {
$operation_envelop = '<operation_envelope>';
$operation_envelop .= '<operation_xml>'.$xml_encoded.'</operation_xml>';
$operation_envelop .= '<signature>'.$lqsignature.'</signature>';
$operation_envelop .= '</operation_envelope>';
$post = '<?xml version=\"1.0\" encoding=\"UTF-8\"?>';
$post .= '<request>';
$post .= '<liqpay>'.$operation_envelop.'</liqpay>';
$post .= '</request>';
$url = "https://www.liqpay.com/?do=api_xml";
$page = "/?do=api_xml";
$headers = array("POST ".$page." HTTP/1.0",
			"Content-type: text/xml;charset=\"utf-8\"",
			"Accept: text/xml",
			"Content-length: ".strlen($post));
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_TIMEOUT, 60);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
     $result = curl_exec($ch);
     curl_close($ch);
     echo $result;
};
					?>
</div>
<?php
	}?>
<div id="ampoweredby" class="ampoweredby1" style="text-align: center;"><?php
	if ($exterlink)
	{
echo $copcop;
	}?></div>
<!-- Leonidas "Donate-Amoney" Module (v1.0.7) ends here -->
