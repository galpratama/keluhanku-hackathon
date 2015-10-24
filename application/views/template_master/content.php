<?php
$module = $_GET['module'];
if($module=='inbox')
{
	include 'inbox.php';

}
elseif($module=='inbox-read')
{
	include 'inbox-read.php';
}
elseif($module=='outbox')
{
	include 'outbox.php';
}
elseif($module=='outbox-read')
{
	include 'outbox-read.php';
}
elseif($module=='phonebook')
{
	include 'phonebook.php';
}
elseif($module=='group')
{
	include 'group.php';
}
elseif($module=='add-group')
{
	include 'add-group.php';
}
elseif($module=='add-phonebook')
{
	include 'add-phonebook.php';
}
elseif($module=='write')
{
	include 'write.php';
}
elseif($module=='dashboard')
{
	include 'dashboard.php';
}
?>