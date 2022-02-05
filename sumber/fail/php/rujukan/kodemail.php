<?php
#==================================================================================================
include '../fungsi_global.php';
#==================================================================================================
# fungsi untuk hantar kod melalui email
#--------------------------------------------------------------------------------------------------
	function daftar()
	{
	}
#--------------------------------------------------------------------------------------------------
	function masuk()
	{
	}
#--------------------------------------------------------------------------------------------------
	function sahkan()
	{
	}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# fungsi terhad dalaman sahaja
#--------------------------------------------------------------------------------------------------
	function emailPapar($mailTo,$mailSubject,$mailMessage)
	{
		echo '<table border="1">'
		. '<tr><td>To</td><td><h2>' . $mailTo . '</h2></td></tr>'
		. '<tr><td>Subject</td><td><h2>' . $mailSubject . '</h2></td></tr>'
		. '<tr><td>Message</td><td>' . $mailMessage . '</td></tr>'
		. '</table>';
	}
#--------------------------------------------------------------------------------------------------
	function nomboRandom()
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Koding sikit nombor random
		/*$kod001 = time() * rand();
		$kod002 = number_format($kod001, 0, '', '');
		$kod003 = substr($kod002, 0, 6);//*/
		$kod004 = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
		/*semakPembolehubah($kod001,' semak kod random: ');
		semakPembolehubah($kod002,' semak kod random: ');
		semakPembolehubah($kod003,' semak kod random: ');
		semakPembolehubah($kod004,' semak kod random: ');//*/

		return $kod004;
	}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# mula koding
$kodEmail = nomboRandom();
$mailTo = 'a@b.c';
$mailSubject = 'Verifikasi email';
$mailBody = '<p> Kod verifikasi anda adalah <b style="font-size: 30px;">'
			. $kodEmail . '</b></p>';
$mailMessage = str_replace("\n.", "\n..", $mailBody);

emailPapar($mailTo,$mailSubject,$mailMessage);
#--------------------------------------------------------------------------------------------------
#==================================================================================================
#--------------------------------------------------------------------------------------------------
/*
https://www.w3schools.com/php/func_mail_mail.asp
Definition and Usage
The mail() function allows you to send emails directly from a script.

Syntax => mail(to,subject,message,headers,parameters);

Parameter Values

+------------+------------------------------------------------------------------------------------+
| Parameter	 | Description                                                                        |
+------------+------------------------------------------------------------------------------------+
| to         | Required. Specifies the receiver / receivers of the email                          |
+------------+------------------------------------------------------------------------------------+
| subject    | Required. Specifies the subject of the email. Note: This parameter cannot contain  |
|            | any newline characters                                                             |
+------------+------------------------------------------------------------------------------------+
| message    | Required. Defines the message to be sent. Each line should be separated with       |
|            | a LF(\n).                                                                          |
|            | Lines shoud not exceed 70 characters.                                              |
|            | Windows note: If a full stop is found on the beginning of a line in the message,   |
|            | it might be removed. To solve this problem, replace the full stop with             |
|            | a double dot:                                                                      |
|            | <?php $txt = str_replace("\n.", "\n..", $txt); ?>                                  |
+------------+------------------------------------------------------------------------------------+
| headers    | Optional. Specifies additional headers, like From, Cc, and Bcc. The additional     |
|            | headers should be separated with a CRLF (\r\n).                                    |
|            | Note: When sending an email, it must contain a From header. This can be set with   |
|            | this parameter or in the php.ini file.                                             |
+------------+------------------------------------------------------------------------------------+
| parameters | Optional. Specifies an additional param\eter to the sendmail program (the one      |
|            | defined in the sendmail_path configuration setting). (i.e. this can be used to set |
|            | the envelope sender address when using sendmail with the -f sendmail option)       |
+------------+------------------------------------------------------------------------------------+
//*/
#--------------------------------------------------------------------------------------------------
#==================================================================================================