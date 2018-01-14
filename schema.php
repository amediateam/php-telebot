<?php
return [
    'types' => [
        'WebhookInfo' => [
            'requiredParams' => ['url'],
            'map' => [
                'url' => 'String',
                'has_custom_certificate' => 'Boolean',
                'pending_update_count' => 'Integer',
                'last_error_date' => 'Integer',
                'last_error_message' => 'String',
                'max_connections' => 'Integer',
                'allowed_updates' => 'ArrayOfString',
            ]
        ],
        'InputMedia' => [
            'requiredParams' => ['type', 'media'],
            'map' => [
                'type' => 'String',
                'media' => 'String'
            ]
        ],
        'User' => [
            'requiredParams' => ['id'],
            'map' => [
                'id' => 'Integer',
                'is_bot' => 'Boolean',
                'first_name' => 'String',
                'last_name' => 'String',
                'username' => 'String',
                'language_code' => 'String',
            ],
        ],
        'Chat' => [
            'requiredParams' => ['id'],
            'constants' => [
                'TYPE_PRIVATE' => 'private',
                'TYPE_GROUP' => 'group',
                'TYPE_SUPER_GROUP' => 'supergroup',
                'TYPE_CHANNEL' => 'channel'
            ],
            'map' => [
                'id' => 'Integer',
                'type' => 'String',
                'title' => 'String',
                'username' => 'String',
                'first_name' => 'String',
                'last_name' => 'String',
                'all_members_are_administrators' => 'Boolean',
                'photo' => 'ChatPhoto',
                'description' => 'String',
                'invite_link' => 'String',
                'pinned_message' => 'Message',
                'sticker_set_name' => 'String',
                'can_set_sticker_set' => 'Boolean',
            ],
        ],
        'Message' => [
            'requiredParams' => ['message_id'],
            'map' => [
                'message_id' => 'Integer',
                'from' => 'User',
                'date' => 'Integer',
                'chat' => 'Chat',
                'forward_from' => 'User',
                'forward_from_chat' => 'Chat',
                'forward_from_message_id' => 'Integer',
                'forward_signature' => 'String',
                'forward_date' => 'Integer',
                'reply_to_message' => 'Message',
                'edit_date' => 'Integer',
                'media_group_id' => 'String',
                'author_signature' => 'String',
                'text' => 'String',
                'entities' => 'ArrayOfMessageEntity',
                'caption_entities' => 'ArrayOfMessageEntity',
                'audio' => 'Audio',
                'document' => 'Document',
                'game' => 'Game',
                'photo' => 'ArrayOfPhotoSize',
                'sticker' => 'Sticker',
                'video' => 'Video',
                'voice' => 'Voice',
                'video_note' => 'VideoNote',
                'caption' => 'String',
                'contact' => 'Contact',
                'location' => 'Location',
                'venue' => 'Venue',
                'new_chat_members' => 'ArrayOfUser',
                'left_chat_member' => 'User',
                'new_chat_title' => 'String',
                'new_chat_photo' => 'ArrayOfPhotoSize',
                'delete_chat_photo' => 'Boolean',
                'group_chat_created' => 'Boolean',
                'supergroup_chat_created' => 'Boolean',
                'channel_chat_created' => 'Boolean',
                'migrate_to_chat_id' => 'Integer',
                'migrate_from_chat_id' => 'Integer',
                'pinned_message' => 'Message',
                'invoice' => 'Invoice',
                'successful_payment' => 'SuccessfulPayment',
            ],
        ],
        'MessageEntity' => [
            'requiredParams' => ['type', 'offset', 'length'],
            'map' => [
                'type' => 'String',
                'offset' => 'Integer',
                'length' => 'Integer',
                'url' => 'String',
                'user' => 'User',
            ],
            'constants' => [
                'TYPE_MENTION' => 'mention',
                'TYPE_HASHTAG' => 'hashtag',
                'TYPE_BOT_COMMAND' => 'bot_command',
                'TYPE_URL' => 'url',
                'TYPE_EMAIL' => 'email',
                'TYPE_BOLD' => 'bold',
                'TYPE_ITALIC' => 'italic',
                'TYPE_CODE' => 'code',
                'TYPE_PRE' => 'pre',
                'TYPE_TEXT_LINK' => 'text_link',
            ],
        ],
        'PhotoSize' => [
            'requiredParams' => ['file_id', 'width', 'height'],
            'map' => [
                'file_id' => 'String',
                'width' => 'Integer',
                'height' => 'Integer',
                'file_size' => 'Integer',
            ],
        ],
        'Audio' => [
            'requiredParams' => ['file_id', 'duration'],
            'map' => [
                'file_id' => 'String',
                'duration' => 'Integer',
                'performer' => 'String',
                'title' => 'String',
                'mime_type' => 'String',
                'file_size' => 'Integer',
            ],
        ],
        'Document' => [
            'requiredParams' => ['file_id'],
            'map' => [
                'file_id' => 'String',
                'thumb' => 'PhotoSize',
                'file_name' => 'String',
                'mime_type' => 'String',
                'file_size' => 'Integer',
            ],
        ],
        'Video' => [
            'requiredParams' => ['file_id', 'width', 'height', 'duration'],
            'map' => [
                'file_id' => 'String',
                'width' => 'Integer',
                'height' => 'Integer',
                'duration' => 'Integer',
                'thumb' => 'PhotoSize',
                'mime_type' => 'String',
                'file_size' => 'Integer',
            ],
        ],
        'Voice' => [
            'requiredParams' => ['file_id', 'duration'],
            'map' => [
                'file_id' => 'String',
                'duration' => 'Integer',
                'mime_type' => 'String',
                'file_size' => 'Integer',
            ],
        ],
        'VideoNote' => [
            'requiredParams' => ['file_id', 'length', 'duration'],
            'map' => [
                'file_id' => 'String',
                'length' => 'Integer',
                'duration' => 'Integer',
                'thumb' => 'PhotoSize',
                'file_size' => 'Integer',
            ],
        ],
        'Contact' => [
            'requiredParams' => ['phone_number', 'first_name'],
            'map' => [
                'phone_number' => 'String',
                'first_name' => 'String',
                'last_name' => 'String',
                'user_id' => 'Integer',
            ],
        ],
        'Location' => [
            'requiredParams' => ['longitude', 'latitude'],
            'map' => [
                'longitude' => 'Float',
                'latitude' => 'Float',
            ],
        ],
        'Venue' => [
            'requiredParams' => ['location', 'title', 'address'],
            'map' => [
                'location' => 'Location',
                'title' => 'String',
                'address' => 'String',
                'foursquare_id' => 'String',
            ],
        ],
        'UserProfilePhotos' => [
            'requiredParams' => ['total_count', 'photos'],
            'map' => [
                'total_count' => 'Location',
                'photos' => 'ArrayOfArrayOfPhotoSize',
            ],
        ],
        'File' => [
            'requiredParams' => ['file_id'],
            'map' => [
                'file_id' => 'String',
                'file_size' => 'Integer',
                'file_path' => 'String',
            ],
        ],
        'ReplyKeyboardMarkup' => [
            'requiredParams' => ['keyboard'],
            'map' => [
                'keyboard' => 'ArrayOfArrayOfKeyboardButton',
                'resize_keyboard' => 'Boolean',
                'one_time_keyboard' => 'Boolean',
                'selective' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'KeyboardButton' => [
            'requiredParams' => ['text'],
            'map' => [
                'text' => 'String',
                'request_contact' => 'Boolean',
                'request_location' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'ReplyKeyboardRemove' => [
            'requiredParams' => ['remove_keyboard'],
            'map' => [
                'remove_keyboard' => 'Boolean',
                'selective' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'InlineKeyboardMarkup' => [
            'requiredParams' => ['inline_keyboard'],
            'map' => [
                'inline_keyboard' => 'ArrayOfArrayOfInlineKeyboardButton',
            ],
            'creatable' => true,
        ],
        'InlineKeyboardButton' => [
            'requiredParams' => ['text'],
            'map' => [
                'text' => 'String',
                'url' => 'String',
                'callback_data' => 'String',
                'switch_inline_query' => 'String',
                'switch_inline_query_current_chat' => 'String',
                'callback_game' => 'CallbackGame',
                'pay' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'CallbackQuery' => [
            'requiredParams' => ['id', 'from'],
            'map' => [
                'id' => 'Integer',
                'from' => 'User',
                'message' => 'Message',
                'inline_message_id' => 'Integer',
                'chat_instance' => 'String',
                'data' => 'String',
                'game_short_name' => 'String',
            ],
        ],
        'ForceReply' => [
            'requiredParams' => ['force_reply'],
            'map' => [
                'force_reply' => 'Boolean',
                'selective' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'ChatPhoto' => [
            'requiredParams' => ['small_file_id', 'big_file_id'],
            'map' => [
                'small_file_id' => 'String',
                'big_file_id' => 'String',
            ],
        ],
        'ChatMember' => [
            'requiredParams' => ['user', 'status'],
            'map' => [
                'user' => 'User',
                'status' => 'String',
                'until_date' => 'Integer',
                'can_be_edited' => 'Boolean',
                'can_change_info' => 'Boolean',
                'can_post_messages' => 'Boolean',
                'can_edit_messages' => 'Boolean',
                'can_delete_messages' => 'Boolean',
                'can_invite_users' => 'Boolean',
                'can_restrict_members' => 'Boolean',
                'can_pin_messages' => 'Boolean',
                'can_promote_members' => 'Boolean',
                'can_send_messages' => 'Boolean',
                'can_send_media_messages' => 'Boolean',
                'can_send_other_messages' => 'Boolean',
                'can_add_web_page_previews' => 'Boolean',
            ],
            'constants' => [
                'CREATOR' => 'creator',
                'ADMINISTRATOR' => 'administrator',
                'MEMBER' => 'member',
                'RESTRICTED' => 'restricted',
                'LEFT' => 'left',
                'KICKED' => 'kicked',
            ],
        ],
        'ResponseParameters' => [
            'requiredParams' => [],
            'map' => [
                'migrate_to_chat_id' => 'Integer',
                'retry_after' => 'Integer',
            ],
        ],
        'InlineQuery' => [
            'requiredParams' => ['id', 'from', 'query'],
            'map' => [
                'id' => 'String',
                'from' => 'User',
                'location' => 'Location',
                'query' => 'String',
                'offset' => 'String',
            ],
        ],
        'InlineQueryResultCachedAudio' => [
            'requiredParams' => ['id', 'audio_file_id'],
            'map' => [
                'id' => 'String',
                'audio_file_id' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'audio'
            ],
        ],
        'InlineQueryResultCachedDocument' => [
            'requiredParams' => ['id', 'document_file_id'],
            'map' => [
                'id' => 'String',
                'title' => 'String',
                'document_file_id' => 'String',
                'description' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'document'
            ],
        ],
        'InlineQueryResultCachedGif' => [
            'requiredParams' => ['id', 'gif_file_id'],
            'map' => [
                'id' => 'String',
                'title' => 'String',
                'gif_file_id' => 'String',
                'description' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'gif'
            ],
        ],
        'InlineQueryResultCachedMpeg4Gif' => [
            'requiredParams' => ['id', 'mpeg4_file_id'],
            'map' => [
                'id' => 'String',
                'mpeg4_file_id' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'mpeg4_gif'
            ],
        ],
        'InlineQueryResultCachedPhoto' => [
            'requiredParams' => ['id', 'photo_file_id'],
            'map' => [
                'id' => 'String',
                'photo_file_id' => 'String',
                'title' => 'String',
                'description' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'photo'
            ],
        ],
        'InlineQueryResultCachedSticker' => [
            'requiredParams' => ['id', 'sticker_file_id'],
            'map' => [
                'id' => 'String',
                'sticker_file_id' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'sticker'
            ],
        ],
        'InlineQueryResultCachedVideo' => [
            'requiredParams' => ['id', 'video_file_id'],
            'map' => [
                'id' => 'String',
                'video_file_id' => 'String',
                'title' => 'String',
                'description' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'video'
            ],
        ],
        'InlineQueryResultCachedVoice' => [
            'requiredParams' => ['id', 'voice_file_id'],
            'map' => [
                'id' => 'String',
                'voice_file_id' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'voice'
            ],
        ],
        'InlineQueryResultArticle' => [
            'requiredParams' => ['id', 'title', 'input_message_content'],
            'map' => [
                'id' => 'String',
                'title' => 'String',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'url' => 'String',
                'hide_url' => 'Boolean',
                'description' => 'String',
                'thumb_url' => 'String',
                'thumb_width' => 'Integer',
                'thumb_height' => 'Integer',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'article',
            ],
            'creatable' => true,
        ],
        'InlineQueryResultAudio' => [
            'requiredParams' => ['id', 'audio_url'],
            'map' => [
                'id' => 'String',
                'audio_url' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'performer' => 'String',
                'audio_duration' => 'Integer',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'audio',
            ],
            'creatable' => true,
        ],
        'InlineQueryResultContact' => [
            'requiredParams' => ['id', 'phone_number', 'first_name'],
            'map' => [
                'id' => 'String',
                'phone_number' => 'String',
                'first_name' => 'String',
                'last_name' => 'String',
                'thumb_url' => 'String',
                'thumb_width' => 'Integer',
                'thumb_height' => 'Integer',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'contact'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultGame' => [
            'requiredParams' => ['id', 'document_url', 'title'],
            'map' => [
                'type' => 'String',
                'id' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'document_url' => 'String',
                'mime_type' => 'String',
                'description' => 'String',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'game'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultDocument' => [
            'requiredParams' => ['id', 'game_short_name'],
            'map' => [
                'id' => 'String',
                'game_short_name' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'document'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultGif' => [
            'requiredParams' => ['id', 'gif_url'],
            'map' => [
                'id' => 'String',
                'gif_url' => 'String',
                'gif_width' => 'Integer',
                'gif_height' => 'Integer',
                'gif_duration' => 'Integer',
                'thumb_url' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'gif'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultLocation' => [
            'requiredParams' => ['id', 'latitude', 'longitude', 'title'],
            'map' => [
                'id' => 'String',
                'latitude' => 'Float',
                'longitude' => 'Float',
                'title' => 'String',
                'live_period' => 'Integer',
                'thumb_url' => 'String',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'thumb_width' => 'Integer',
                'thumb_height' => 'Integer',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'location'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultMpeg4Gif' => [
            'requiredParams' => ['id', 'mpeg4_url'],
            'map' => [
                'id' => 'String',
                'mpeg4_url' => 'String',
                'mpeg4_width' => 'Integer',
                'mpeg4_height' => 'Integer',
                'mpeg4_duration' => 'Integer',
                'thumb_url' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'mpeg4_gif'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultPhoto' => [
            'requiredParams' => ['id', 'photo_url'],
            'map' => [
                'id' => 'String',
                'photo_url' => 'String',
                'thumb_url' => 'String',
                'photo_width' => 'Integer',
                'photo_height' => 'Integer',
                'title' => 'String',
                'caption' => 'String',
                'reply_markup' => 'InlineKeyboardMarkup',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'photo'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultVenue' => [
            'requiredParams' => ['id', 'latitude', 'longitude', 'title', 'address'],
            'map' => [
                'id' => 'String',
                'latitude' => 'Float',
                'longitude' => 'Float',
                'title' => 'String',
                'address' => 'Integer',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'thumb_url' => 'String',
                'thumb_width' => 'Integer',
                'thumb_height' => 'Integer',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'venue'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultVideo' => [
            'requiredParams' => ['id', 'video_url', 'mime_type'],
            'map' => [
                'id' => 'String',
                'video_url' => 'String',
                'mime_type' => 'String',
                'thumb_url' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'video_width' => 'Integer',
                'video_height' => 'Integer',
                'video_duration' => 'Integer',
                'description' => 'String',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'video'
            ],
            'creatable' => true,
        ],
        'InlineQueryResultVoice' => [
            'requiredParams' => ['id', 'voice_url', 'title'],
            'map' => [
                'id' => 'String',
                'voice_url' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'voice_duration' => 'Integer',
                'input_message_content' => [
                    'InputTextMessageContent',
                    'InputLocationMessageContent',
                    'InputVenueMessageContent',
                    'InputContactMessageContent',
                ],
                'reply_markup' => 'InlineKeyboardMarkup',
                'type' => 'String',
            ],
            'defaultData' => [
                'type' => 'voice'
            ],
            'creatable' => true,
        ],
        'InputTextMessageContent' => [
            'requiredParams' => ['message_text'],
            'map' => [
                'message_text' => 'String',
                'parse_mode' => 'String',
                'disable_web_page_preview' => 'Boolean',
            ],
            'creatable' => true,
        ],
        'InputLocationMessageContent' => [
            'requiredParams' => ['latitude', 'longitude'],
            'map' => [
                'latitude' => 'Float',
                'longitude' => 'Float',
                'live_period' => 'Integer', //TODO: BETWEEN 60 and 86400
            ],
            'creatable' => true,
        ],
        'InputVenueMessageContent' => [
            'requiredParams' => ['latitude', 'longitude', 'title', 'address'],
            'map' => [
                'latitude' => 'Float',
                'longitude' => 'Float',
                'title' => 'String',
                'address' => 'String',
                'foursquare_id' => 'String',
            ],
            'creatable' => true,
        ],
        'InputContactMessageContent' => [
            'requiredParams' => ['phone_number', 'first_name'],
            'map' => [
                'phone_number' => 'String',
                'first_name' => 'String',
                'last_name' => 'String',
            ],
            'creatable' => true,
        ],
        'ChosenInlineResult' => [
            'requiredParams' => ['result_id', 'from', 'query'],
            'map' => [
                'result_id' => 'String',
                'from' => 'User',
                'location' => 'Location',
                'inline_message_id' => 'String',
                'query' => 'String',
            ],
        ],
        'Game' => [
            'requiredParams' => ['title', 'description', 'photo'],
            'map' => [
                'title' => 'String',
                'description' => 'String',
                'photo' => 'ArrayOfPhotoSize',
                'text' => 'String',
                'text_entities' => 'ArrayOfMessageEntity',
                'animation' => 'Animation',
            ]
        ],
        'Animation' => [
            'requiredParams' => ['file_id'],
            'map' => [
                'file_id' => 'String',
                'thumb' => 'PhotoSize',
                'file_name' => 'String',
                'mime_type' => 'String',
                'file_size' => 'Integer',
            ]
        ],
        'CallbackGame' => [
            'requiredParams' => [],
            'map' => [],
        ],
        'GameHighScore' => [
            'requiredParams' => ['position', 'user', 'score'],
            'map' => [
                'position' => 'Integer',
                'user' => 'User',
                'score' => 'Integer',
            ]
        ],
        'LabeledPrice' => [
            'requiredParams' => ['label', 'amount'],
            'map' => [
                'label' => 'String',
                'amount' => 'Integer',
            ]
        ],
        'Invoice' => [
            'requiredParams' => ['title', 'description', 'start_parameter', 'currency', 'total_amount'],
            'map' => [
                'title' => 'String',
                'description' => 'String',
                'start_parameter' => 'String',
                'currency' => 'String',
                'total_amount' => 'Integer',
            ]
        ],
        'ShippingAddress' => [
            'requiredParams' => ['country_code', 'state', 'city', 'street_line1', 'street_line2', 'post_code'],
            'map' => [
                'country_code' => 'String',
                'state' => 'String',
                'city' => 'String',
                'street_line1' => 'String',
                'street_line2' => 'String',
                'post_code' => 'String',
            ]
        ],
        'OrderInfo' => [
            'requiredParams' => [],
            'map' => [
                'name' => 'String',
                'phone_number' => 'String',
                'email' => 'String',
                'shipping_address' => 'ShippingAddress',
            ]
        ],
        'ShippingOption' => [
            'requiredParams' => ['id', 'title', 'prices'],
            'map' => [
                'id' => 'String',
                'title' => 'String',
                'prices' => 'ArrayOfLabeledPrice',
            ]
        ],
        'SuccessfulPayment' => [
            'requiredParams' => ['currency', 'total_amount', 'invoice_payload', 'telegram_payment_charge_id', 'provider_payment_charge_id'],
            'map' => [
                'currency' => 'String',
                'total_amount' => 'Integer',
                'invoice_payload' => 'String',
                'shipping_option_id' => 'String',
                'order_info' => 'OrderInfo',
                'telegram_payment_charge_id' => 'String',
                'provider_payment_charge_id' => 'String',
            ]
        ],
        'ShippingQuery' => [
            'requiredParams' => ['id', 'from', 'invoice_payload', 'shipping_address'],
            'map' => [
                'id' => 'String',
                'from' => 'User',
                'invoice_payload' => 'String',
                'shipping_address' => 'ShippingAddress',
            ]
        ],
        'PreCheckoutQuery' => [
            'requiredParams' => ['id', 'from', 'currency', 'total_amount', 'invoice_payload'],
            'map' => [
                'id' => 'String',
                'from' => 'User',
                'currency' => 'String',
                'total_amount' => 'Integer',
                'invoice_payload' => 'String',
                'shipping_option_id' => 'String',
                'order_info' => 'OrderInfo',
            ]
        ],
        'Sticker' => [
            'requiredParams' => ['file_id', 'width', 'height'],
            'map' => [
                'file_id' => 'String',
                'width' => 'Integer',
                'height' => 'Integer',
                'thumb' => 'PhotoSize',
                'emoji' => 'String',
                'set_name' => 'String',
                'mask_position' => 'MaskPosition',
                'file_size' => 'Integer',
            ]
        ],
        'StickerSet' => [
            'requiredParams' => ['name', 'title', 'contains_masks', 'stickers'],
            'map' => [
                'name' => 'String',
                'title' => 'String',
                'contains_masks' => 'Boolean',
                'stickers' => 'ArrayOfSticker',
            ]
        ],
        'MaskPosition' => [
            'requiredParams' => ['point', 'x_shift', 'y_shift', 'scale'],
            'map' => [
                'point' => 'String',
                'x_shift' => 'Float',
                'y_shift' => 'Float',
                'scale' => 'Float',
            ]
        ],
        'Update' => [
            'requiredParams' => ['update_id'],
            'map' => [
                'update_id' => 'Integer',
                'message' => 'Message',
                'edited_message' => 'Message',
                'channel_post' => 'Message',
                'edited_channel_post' => 'Message',
                'inline_query' => 'InlineQuery',
                'chosen_inline_result' => 'ChosenInlineResult',
                'callback_query' => 'CallbackQuery',
                'shipping_query' => 'ShippingQuery',
                'pre_checkout_query' => 'PreCheckoutQuery',
            ],
        ],
        'InputMediaPhoto' => [
            'requiredParams' => ['type', 'media'],
            'map' => [
                'type' => 'String',
                'media' => 'String',
                'caption' => 'String',
            ],
            'defaultData' => ['type' => 'photo'],
            'creatable' => true,
        ],
        'InputMediaVideo' => [
            'requiredParams' => ['type', 'media'],
            'map' => [
                'type' => 'String',
                'media' => 'String',
                'caption' => 'String',
                'width' => 'Integer',
                'height' => 'Integer',
                'duration' => 'Integer',
            ],
            'defaultData' => ['type' => 'video'],
            'creatable' => true,
        ],
    ],
    'methods' => [
        //Getting updates
        'getUpdates' => [
            'requiredParams' => [],
            'map' => [
                'offset' => 'Integer',
                'limit' => 'Integer',
                'timeout' => 'Integer',
                'allowed_updates' => 'ArrayOfString',
            ],
            'returnType' => 'ArrayOfUpdate'
        ],
        'setWebhook' => [
            'requiredParams' => ['url'],
            'map' => [
                'url' => 'String',
                'certificate' => 'InputFile',
                'max_connections' => 'Integer',
                'allowed_updates' => 'ArrayOfString',
            ],
            'returnType' => 'Boolean'
        ],
        'deleteWebhook' => [
            'requiredParams' => [],
            'map' => [],
            'returnType' => 'Boolean'
        ],
        'getWebhookInfo' => [
            'requiredParams' => [],
            'map' => [],
            'returnType' => 'Boolean'
        ],
        //Available methods
        'getMe' => [
            'requiredParams' => [],
            'map' => [],
            'returnType' => 'User'
        ],
        'sendMessage' => [
            'requiredParams' => ['chat_id', 'text'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'text' => 'String',
                'parse_mode' => 'String',
                'disable_web_page_preview' => 'Boolean',
                'disable_notification' => 'Boolean',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
                'reply_to_message_id' => 'Integer',
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'forwardMessage' => [
            'requiredParams' => ['chat_id', 'from_chat_id', 'message_id'],
            'map' => [
                'chat_id' => 'Integer',
                'from_chat_id' => 'Integer',
                'disable_notification' => 'Boolean',
                'message_id' => 'Integer',
            ],
            'returnType' => 'Message'
        ],
        'sendPhoto' => [
            'requiredParams' => ['chat_id', 'photo'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'photo' => ['InputFile', 'String'],
                'caption' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendAudio' => [
            'requiredParams' => ['chat_id', 'audio'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'audio' => ['InputFile', 'String'],
                'duration' => 'Integer',
                'performer' => 'String',
                'title' => 'String',
                'caption' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendDocument' => [
            'requiredParams' => ['chat_id', 'document'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'document' => ['InputFile', 'String'],
                'caption' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendVideo' => [
            'requiredParams' => ['chat_id', 'video'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'video' => ['InputFile', 'String'],
                'duration' => 'Integer',
                'width' => 'Integer',
                'height' => 'Integer',
                'caption' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendVoice' => [
            'requiredParams' => ['chat_id', 'voice'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'voice' => ['InputFile', 'String'],
                'caption' => 'String',
                'duration' => 'Integer',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendVideoNote' => [
            'requiredParams' => ['chat_id', 'video_note'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'video_note' => ['InputFile', 'String'],
                'duration' => 'Integer',
                'length' => 'Integer',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => 'Message'
        ],
        'sendMediaGroup' => [
            'requiredParams' => ['chat_id', 'media'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'media' => 'ArrayOfInputMedia',
                'duration' => 'Integer',
                'length' => 'Integer',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
            ],
            'defaultData' => [
            ],
            'returnType' => 'ArrayOfMessage'
        ],
        'sendLocation' => [
            'requiredParams' => ['chat_id', 'latitude', 'longitude'],
            'map' => [
                'chat_id' => 'Integer',
                'latitude' => 'Float',
                'longitude' => 'Float',
                'live_period' => 'Integer',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'returnType' => 'Message'
        ],
        'editMessageLiveLocation' => [
            'requiredParams' => ['latitude', 'longitude'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
                'inline_message_id' => 'String',
                'latitude' => 'Float',
                'longitude' => 'Float',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => ['Message', 'boolean']
        ],
        'stopMessageLiveLocation' => [ //TODO: Require notes
                                       'requiredParams' => [],
                                       'map' => [
                                           'chat_id' => ['Integer', 'String'],
                                           'message_id' => 'Integer',
                                           'inline_message_id' => 'String',
                                           'reply_markup' => [
                                               'InlineKeyboardMarkup',
                                               'ReplyKeyboardMarkup',
                                               'ReplyKeyboardRemove',
                                               'ForceReply',
                                           ],
                                       ],
                                       'defaultData' => [
                                       ],
                                       'returnType' => ['Message', 'boolean']
        ],
        'sendVenue' => [
            'requiredParams' => ['chat_id', 'latitude', 'longitude', 'title', 'address'],
            'map' => [
                'chat_id' => 'Integer',
                'latitude' => 'Float',
                'longitude' => 'Float',
                'title' => 'String',
                'address' => 'String',
                'foursquare_id' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'returnType' => 'Message'
        ],
        'sendContact' => [
            'requiredParams' => ['chat_id', 'phone_number', 'first_name'],
            'map' => [
                'chat_id' => 'Integer',
                'phone_number' => 'String',
                'first_name' => 'String',
                'last_name' => 'String',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'returnType' => 'Message'
        ],
        'sendChatAction' => [
            'requiredParams' => ['chat_id', 'action'],
            'map' => [
                'chat_id' => 'Integer',
                'action' => 'String',
            ],
            'returnType' => 'Boolean'
        ],
        'getUserProfilePhotos' => [
            'requiredParams' => ['user_id'],
            'map' => [
                'user_id' => 'Integer',
                'offset' => 'Integer',
                'limit' => 'Integer',
            ],
            'returnType' => 'UserProfilePhotos'
        ],
        'getFile' => [
            'requiredParams' => ['file_id'],
            'map' => [
                'file_id' => 'String',
            ],
            'returnType' => 'File'
        ],
        'kickChatMember' => [
            'requiredParams' => ['chat_id', 'user_id'],
            'map' => [
                'chat_id' => 'Integer',
                'user_id' => ['Integer', 'String'],
                'until_date' => 'Integer',
            ],
            'returnType' => 'boolean'
        ],
        'unbanChatMember' => [
            'requiredParams' => ['chat_id', 'user_id'],
            'map' => [
                'chat_id' => 'Integer',
                'user_id' => ['Integer', 'String'],
            ],
            'returnType' => 'boolean'
        ],
        'restrictChatMember' => [
            'requiredParams' => ['chat_id', 'user_id'],
            'map' => [
                'chat_id' => 'Integer',
                'user_id' => 'Integer',
                'until_date' => 'Integer',
                'can_send_messages' => 'Boolean',
                'can_send_media_messages' => 'Boolean',
                'can_send_other_messages' => 'Boolean',
                'can_add_web_page_previews' => 'Boolean',
            ],
            'returnType' => 'Boolean'
        ],
        'promoteChatMember' => [
            'requiredParams' => ['chat_id', 'user_id'],
            'map' => [
                'chat_id' => 'Integer',
                'user_id' => 'Integer',
                'until_date' => 'Integer',
                'can_change_info' => 'Boolean',
                'can_post_messages' => 'Boolean',
                'can_edit_messages' => 'Boolean',
                'can_delete_messages' => 'Boolean',
                'can_invite_users' => 'Boolean',
                'can_restrict_members' => 'Boolean',
                'can_pin_messages' => 'Boolean',
                'can_promote_members' => 'Boolean',
            ],
            'returnType' => 'Boolean'
        ],
        'exportChatInviteLink' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'String'
        ],
        'setChatPhoto' => [
            'requiredParams' => ['chat_id', 'photo'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'photo' => 'InputFile',
            ],
            'returnType' => 'boolean'
        ],
        'deleteChatPhoto' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'boolean'
        ],
        'setChatTitle' => [
            'requiredParams' => ['chat_id', 'title'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'title' => 'String',
            ],
            'returnType' => 'Boolean'
        ],
        'setChatDescription' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'description' => 'String',
            ],
            'returnType' => 'Boolean'
        ],
        'pinChatMessage' => [
            'requiredParams' => ['chat_id', 'message_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
                'disable_notification' => 'boolean',
            ],
            'returnType' => 'boolean'
        ],
        'unpinChatMessage' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'boolean'
        ],
        'leaveChat' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'boolean'
        ],
        'getChat' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'Chat'
        ],
        'getChatAdministrators' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'ArrayOfChatMember'
        ],
        'getChatMembersCount' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'Integer'
        ],
        'getChatMember' => [
            'requiredParams' => ['chat_id', 'user_id'],
            'map' => [
                'chat_id' => 'Integer',
                'user_id' => ['Integer', 'String'],
            ],
            'returnType' => 'ChatMember'
        ],
        'setChatStickerSet' => [
            'requiredParams' => ['chat_id', 'sticker_set_name'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'sticker_set_name' => 'String',
            ],
            'returnType' => 'boolean'
        ],
        'deleteChatStickerSet' => [
            'requiredParams' => ['chat_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
            ],
            'returnType' => 'boolean'
        ],
        'answerCallbackQuery' => [
            'requiredParams' => ['callback_query_id'],
            'map' => [
                'callback_query_id' => 'String',
                'text' => 'String',
                'show_alert' => 'Boolean',
                'url' => 'String',
                'cache_time' => 'Integer',
            ],
            'returnType' => 'boolean'
        ],
        //Updating messages
        'editMessageText' => [
            'requiredParams' => ['chat_id', 'message_id', 'text'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
                'inline_message_id' => 'String',
                'text' => 'String',
                'parse_mode' => 'String',
                'disable_web_page_preview' => 'Boolean',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => ['Message', 'boolean']
        ],
        'editMessageCaption' => [
            'requiredParams' => ['chat_id', 'message_id', 'caption'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
                'inline_message_id' => 'String',
                'caption' => 'String',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => ['Message', 'boolean']
        ],
        'editMessageReplyMarkup' => [
            'requiredParams' => ['chat_id', 'message_id', 'reply_markup'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
                'inline_message_id' => 'String',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [
            ],
            'returnType' => ['Message', 'boolean']
        ],
        'deleteMessage' => [
            'requiredParams' => ['chat_id', 'message_id'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'message_id' => 'Integer',
            ],
            'defaultData' => [
            ],
            'returnType' => 'boolean'
        ],
        //Stickers
        'sendSticker' => [
            'requiredParams' => ['chat_id', 'sticker'],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'sticker' => ['InputFile', 'String'],
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Boolean',
                'reply_markup' => [
                    'InlineKeyboardMarkup',
                    'ReplyKeyboardMarkup',
                    'ReplyKeyboardRemove',
                    'ForceReply',
                ],
            ],
            'defaultData' => [],
            'returnType' => 'Message'
        ],
        'getStickerSet' => [
            'requiredParams' => ['name'],
            'map' => [
                'name' => 'String',
            ],
            'defaultData' => [],
            'returnType' => 'StickerSet'
        ],
        'uploadStickerFile' => [
            'requiredParams' => ['user_id', 'png_sticker'],
            'map' => [
                'user_id' => 'Integer',
                'png_sticker' => 'InputFile',
            ],
            'defaultData' => [],
            'returnType' => 'File'
        ],
        'createNewStickerSet' => [
            'requiredParams' => ['user_id', 'name', 'png_sticker', 'emojis'],
            'map' => [
                'user_id' => 'Integer',
                'name' => 'String',
                'png_sticker' => ['InputFile', 'String'],
                'emojis' => 'String',
                'contains_masks' => 'Boolean',
                'mask_position' => 'MaskPosition',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        'addStickerToSet' => [
            'requiredParams' => ['user_id', 'name', 'png_sticker', 'emojis'],
            'map' => [
                'user_id' => 'Integer',
                'name' => 'String',
                'png_sticker' => ['InputFile', 'String'],
                'emojis' => 'String',
                'mask_position' => 'MaskPosition',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        'setStickerPositionInSet' => [
            'requiredParams' => ['sticker', 'position'],
            'map' => [
                'sticker' => 'String',
                'position' => 'Integer',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        'deleteStickerFromSet' => [
            'requiredParams' => ['sticker'],
            'map' => [
                'sticker' => 'String',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        //Inline Query
        'answerInlineQuery' => [
            'requiredParams' => ['inline_query_id', 'results'],
            'map' => [
                'inline_query_id' => 'String',
                'results' => 'ArrayOfInlineQueryResult',
                'cache_time' => 'Integer',
                'is_personal' => 'Boolean',
                'next_offset' => 'String',
                'switch_pm_text' => 'String',
                'switch_pm_parameter' => 'String',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        //Payments
        'sendInvoice' => [
            'requiredParams' => [
                'chat_id', 'title', 'description', 'payload',
                'provider_token', 'start_parameter', 'currency', 'prices'
            ],
            'map' => [
                'chat_id' => ['Integer', 'String'],
                'title' => 'String',
                'description' => 'String',
                'payload' => 'String',
                'provider_token' => 'String',
                'start_parameter' => 'String',
                'currency' => 'String',
                'prices' => 'ArrayOfLabeledPrice',
                'provider_data' => 'String',
                'photo_url' => 'String',
                'photo_size' => 'Integer',
                'photo_width' => 'Integer',
                'photo_height' => 'Integer',
                'need_name' => 'Boolean',
                'need_phone_number' => 'Boolean',
                'need_email' => 'Boolean',
                'need_shipping_address' => 'Boolean',
                'is_flexible' => 'Boolean',
                'disable_notification' => 'Boolean',
                'reply_to_message_id' => 'Integer',
                'reply_markup' => 'InlineKeyboardMarkup',
            ],
            'defaultData' => [],
            'returnType' => 'Message'
        ],
        'answerShippingQuery' => [
            'requiredParams' => ['shipping_query_id', 'ok'],
            'map' => [
                'shipping_query_id' => 'String',
                'ok' => 'Boolean',
                'shipping_options' => 'ArrayOfShippingOption',
                'error_message' => 'String',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
        'answerPreCheckoutQuery' => [
            'requiredParams' => ['pre_checkout_query_id', 'ok'],
            'map' => [
                'pre_checkout_query_id' => 'String',
                'ok' => 'Boolean',
                'error_message' => 'String',
            ],
            'defaultData' => [],
            'returnType' => 'Boolean'
        ],
    ],
];