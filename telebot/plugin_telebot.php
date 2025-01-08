<?php

// Inclui a classe principal do plugin
include_once(GLPI_PLUGIN_DIR . "/telebot/inc/plugin_telegram.inc.php");

// Registra o plugin no GLPI
function plugin_init_telebot() {
    Plugin::registerPlugin("telebot", "Telegram Bot", "1.0");

    // Registra a função que será chamada no hook
    Event::add('ticket.create', 'plugin_telegram_send_ticket_notification');
}

plugin_init_telebot();
