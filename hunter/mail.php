<?
if (array_key_exists('contactMM', $_POST)) {
   $to = 'tommylinks@mail.ru';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['nameMM']."\nТелефон: ".$_POST['contactMM']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['messageMM'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y H:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['nameMM'];
}
?>