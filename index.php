<?php 

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
$MP = new \danog\MadelineProto\API('session.madeline');
$MP->start();

$contact = ['_' => 'inputPhoneContact', 'client_id' => 0, 'phone' => '+380986282355', 'first_name' => 'Andriy', 'last_name' => 'Andriy'];
$import = $MP->contacts->importContacts(['contacts' => [$contact]]);

// 611834735
$user_id = $import['imported'][0]['user_id'];

$offset_id = 0;
$limit = 5;
// $response = $MP->messages->getMessagesViews(['peer' => $user_id, 'id' => [318, 319, 320], 'increment' => 1, ]);



/*
 * START Send simple message
 */
// $response = $MP->messages->sendMessage(['peer' => $user_id, 'message' => "https://www.youtube.com/watch?v=377AQ0y6LPA"]);
/*
 * END Send simple message
 */


/*
 * START Get messages history
 */
// $messagesHistory = $MP->messages->getHistory(['peer' => $user_id, 'offset_id' => $offset_id, 'offset_date' => 0, 'add_offset' => 0, 'limit' => $limit, 'max_id' => 500, 'min_id' => 0, 'hash' => 0 ]);
// $messages = array();
// if ( !empty($messagesHistory['messages']) ) {
//     foreach ( $messagesHistory['messages'] as $message ) {
//         $messages[$message['id']] = array(
//             'user_id' => $message['to_id']['user_id'],
//             'message' => $message['message'],
//             'date'    => date('d.m.Y H:i:s', $message['date']),
//         );
//     }
// }
/*
 * END Get messages history
 */


/*
 * Send Video file
 */
// $inputFile = $MP->upload('https://devrise.com.ua/marketplace/telegram/mobile_file_2020-12-16_20-22-15.mp4');
// $sentMessage = $MP->messages->sendMedia([
//     'peer' => $user_id,
//     'media' => [
//         '_' => 'inputMediaUploadedDocument',
//         'file' => $inputFile,
//         'attributes' => [
//             ['_' => 'documentAttributeFilename', 'file_name' => 'test.mp4']
//         ]
//     ],
//     'message' => '[This is the caption](https://t.me/MadelineProto)',
//     'parse_mode' => 'Markdown'
// ]);


$me = $MP->getSelf();

echo '<pre>';
print_r($me);
echo '<pre>';