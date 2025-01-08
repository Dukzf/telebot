<?php

function plugin_telegram_send_ticket_notification($ticket) {
    $bot = new TeleBot();
    $message = "Novo chamado criado no GLPI!\n\n";
    $message .= "ID do Chamado: " . $ticket->fields['id'] . "\n";
    $message .= "Assunto: " . $ticket->fields['name'] . "\n";
    $message .= "Descrição: " . $ticket->fields['content'] . "\n";
    $message .= "Abertura: " . $ticket->fields['date'] . "\n";

    // Envia a mensagem para o Telegram
    $bot->sendMessage($message);
}
