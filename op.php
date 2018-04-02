<?php
echo "OP - Funzionante";
function prom($chatID, $userID, $can_invite_users = true, $can_delete_messages = true, $can_restrict_members = true)
{
global $api;
$args = array(
'chat_id' => $chatID,
'user_id' => $userID,
'can_delete_messages' => $can_delete_messages
);
$r = new HttpRequest("get", "https://api.telegram.org/$api/promoteChatMember", $args);

}

if($msg=="/op")
{
	$sender = $update["message"]["from"]["username"];
		$replyID = $update["message"]["from"]["id"];
prom($chatID, $replyID);
	sm($chatID, "Sei stato reso amministratore");
}
