<?php
// Site
$_['site_url']             = '';

// Language
$_['language_code']        = 'en-gb';

// Date
$_['date_timezone']        = 'UTC';

// Database
$_['db_autostart']         = false;
$_['db_engine']            = 'mysqli'; // mysqli, pdo or pgsql
$_['db_hostname']          = 'localhost';
$_['db_username']          = 'root';
$_['db_password']          = '';
$_['db_database']          = '';
$_['db_port']              = 3306;

// Mail
$_['mail_engine']          = 'smtp'; // mail or smtp
$_['mail_from']            = 'no-reply@huandoan.com'; // Your E-Mail
$_['mail_sender']          = 'huandoan opencart'; // Your name or company name
$_['mail_reply_to']        = 'doanhuu.lehuan@gmail.com'; // Reply to E-Mail
$_['mail_smtp_hostname']   = 'mailhog';
$_['mail_smtp_username']   = '';
$_['mail_smtp_password']   = '';
$_['mail_smtp_port']       = 1025;
$_['mail_smtp_timeout']    = 5;
$_['mail_verp']            = false;
$_['mail_parameter']       = '';

// Cache
$_['cache_engine']         = 'redis'; // apc, file, mem, memcached or redis
$_['cache_expire']         = 3600;

// Session
$_['session_autostart']    = false;
$_['session_engine']       = 'file'; // db or file
$_['session_name']         = 'OCSESSID';
$_['session_domain']       = '';
$_['session_path']         = '/';
$_['session_expire']       = 999999999;
$_['session_probability']  = 1;
$_['session_divisor']      = 5;
$_['session_samesite']     = 'Strict';

// Template
$_['template_engine']      = 'twig';
$_['template_extension']   = '.twig';

// Error
$_['error_display']        = true; // You need to change this to false on a live site.
$_['error_log']            = true;
$_['error_filename']       = 'error.log';
$_['error_page']           = 'error.html';

// Response
$_['response_header']      = ['Content-Type: text/html; charset=utf-8'];
$_['response_compression'] = 0;

// Actions
$_['action_default']       = 'common/home';
$_['action_error']         = 'error/not_found';
$_['action_pre_action']    = [];
$_['action_post_action']   = [];
$_['action_event']         = [];
