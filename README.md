#### Telegram BOT API (HandCraft) 
##### (V3.6) Last maintain: 3/13/2018
**Example:**
```php
<?php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\sendMessage;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardButton;
$bot = new BotApi('<token>');

$chatId = '<telegram_chat_id>';
$text = 'test!';

//using objects
sendMessage::create($bot)
->setChatId($chatId)
->setText($text)
->setReplyMarkup(InlineKeyboardMarkup::createWithData([
    [
        InlineKeyboardButton::withUrl('Google', 'https://www.google.com')
    ],
]))
->execute(); 
```