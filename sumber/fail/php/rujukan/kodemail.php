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
	function kepalaMail($to = null, $from = null)
	{
		// To send HTML mail, the Content-type header must be set
		//$headers[] = 'MIME-Version: 1.0';
		//$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		$headers[] = 'From: ' . $from;
		$headers[] = 'Reply-to: ' . $from;
		$headers[] = 'MIME-Version: 1.0';
		//$headers[] = 'Content-Type: text/plain; charset=utf-8';
		//$headers[] = 'Content-Type: text/plain; charset=us-ascii';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'Content-Transfer-Encoding: 8bit';
		$headers[] = 'X-Mailer: PHP/' . PHP_VERSION;

		// nota tambahan
		//$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
		//$headers[] = 'From: Birthday Reminder <birthday@example.com>';
		//$headers[] = 'Cc: birthdayarchive@example.com';
		//$headers[] = 'Bcc: birthdaycheck@example.com';
		# cantumkan semua
		$header = implode("\r\n", $headers);

		return $header;
	}
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
	function emailPapar02()
	{
		echo '<html>'
		. "\n" . '<head>'
		. "\n" . '<title>Verifikasi email</title>'
		. "\n" . '</head>'
		. "\n" . '<body>'
		. "\n" . '<p> Kod verifikasi anda adalah <span style="font-size: 30px;">142637</span></p>'
		. "\n" . '</body>'
		. "\n" . '</html>';
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
$mailBody = "<html>\n<head>\n<title>$mailSubject</title>\n</head>\n<body>\n"
			. ''
			. '<p> Kod verifikasi anda adalah <span style="font-size: 30px;">'
			. $kodEmail . '</span></p>'
			. ''
			. "\n</body>\n</html>";
$mailMessage = str_replace("\n.", "\n..", $mailBody);

//emailPapar($mailTo,$mailSubject,$mailMessage);
//emailPapar02();
#--------------------------------------------------------------------------------------------------
//https://www.arclab.com/en/kb/php/how-to-test-and-fix-php-mail-function.html
$sender = 'kamibantu@duduk.mana';//'someone@somedomain.tld';
$recipient = 'sayaamin007-awek@yahoo.com';//'you@yourdomain.tld';

$subject = $mailSubject;
$message = $mailMessage;
$headers = kepalaMail($recipient, $sender);

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}//*/
#--------------------------------------------------------------------------------------------------
#==================================================================================================
#--------------------------------------------------------------------------------------------------
/*
https://www.php.net/manual/en/function.mail.php
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