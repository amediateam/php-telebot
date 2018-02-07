# Telegram BOT API Wrapper
### Telegram BOT API: V3.5
## Last maintain: 2/8/2018
**Examples:**
```php
<?php
use TelegramBot\Api\BotApi;
$bot = new BotApi('<token>');

$chatId = '<telegram_chat_id>';
$text = 'test!';

//using functions
$bot->sendMessage($chatId, $text);

//using objects
$sendMessage = new sendMessage($bot);
$sendMessage->setChatId($chatId);
$sendMessage->setText($text);
$sendMessage->invoke(); //by invoke
$bot->call($sendMessage); // by call

//send reply markup
$bot->sendMessage($chatId, $text, null, null, null, $bot->createInlineKeyboardMarkup([
    [
        $bot->createInlineKeyboardButton('Reply markup!', null, 'callback_data')
    ]
]));
```