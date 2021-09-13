<?php
interface iCamera
{
    function makeVideo();
    function makePhoto();
}
interface iMessenger
{
    function sendMessage($message);
}
 
class Mobile implements iCamera, iMessenger
{
    function makeVideo(){ echo "Запись видео";}
    function makePhoto(){ echo "Съемка фото";}
    function sendMessage($message) {echo "Отправка сообщения $message";}
}
$iphone12 = new Mobile();
$iphone12->makePhoto()
?>