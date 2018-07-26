<?php
namespace PhalApi\Image;
use LaiBao\Image\ImageManager;
class Lite
{
    protected $config;
    public function __construct($config) {
        $this->config = \PhalApi\DI()->config->get('app.Image');
    }

    public function send($addresses, $title, $content, $isHtml = TRUE)
    {
        $mail = new PHPMailer;
        $cfg = $this->config;
        $mail->isSMTP();
        $mail->Host = $cfg['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $cfg['username'];
        $mail->Password = $cfg['password'];
        $mail->CharSet = 'utf-8';
        $mail->From = $cfg['username'];
        $mail->FromName = $cfg['fromName'];
        $addresses = is_array($addresses) ? $addresses : array($addresses);
        foreach ($addresses as $address) {
            $mail->addAddress($address);
        }
        $mail->WordWrap = 50;
        $mail->isHTML($isHtml);
        $mail->Subject = trim($title);
        $mail->Body = $content . $cfg['sign'];
        if (!$mail->send()) {
            if ($this->debug) {
                \PhalApi\DI()->logger->debug('Fail to send email with error: ' . $mail->ErrorInfo);
            }
            return false;
        }
        if ($this->debug) {
            \PhalApi\DI()->logger->debug('Succeed to send email', array('addresses' => $addresses, 'title' => $title));
        }
        return true;
    }
}