<?php

class TeleBot {
    private $api_url = "https://api.telegram.org/bot";

    public function sendMessage($message) {
        $token = '7279809686:AAGw4naqGo3j0ME_Ouu8I87bWwcTDWT7UE4';  // Substitua pelo seu token do bot
        $chat_id = '7279809686';   // Substitua pelo seu chat ID

        $url = $this->api_url . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message);
        $result = file_get_contents($url);

        return $result;
    }
}
