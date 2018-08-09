<?php

// MOODLE CONFIGURATION FILE
//SYSCONTEXTID in config.php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->debug = E_ALL | E_STRICT;
$CFG->debugdisplay = false;

$CFG->dbtype    = 'mysqli';
//$CFG->dbhost    = 'moodledev-20160405.cpxu0frrf8e8.us-east-1.rds.amazonaws.com';
//$CFG->dbhost    = 'moodledev-20170410.cpxu0frrf8e8.us-east-1.rds.amazonaws.com';
$CFG->dbhost    = 'moodledev-20180205.cpxu0frrf8e8.us-east-1.rds.amazonaws.com';
$CFG->dbname    = 'moodle_dev';
//$CFG->dbname    = 'moodle_prod';
$CFG->dbuser    = 'moodle_admin';
$CFG->dbpass    = 'wZGFUYXb8RWUfY76MB3G';
$CFG->prefix    = 'mdl_';
$CFG->dbpersist = false;

// $CFG->showcrondebugging = true;

//$CFG->auth = '';

//$CFG->version  = 2018012500;
//$CFG->version = 2017111301.02;
// Using database level locking for cron and other locking tasks
$CFG->lock_factory = "\\core\\lock\\db_record_lock_factory";

//if($_SERVER['HTTP_HOST'] == 'moodle.bethel.edu')
//{
//    $CFG->wwwroot   = 'https://ac-websrv-h2.its.bethel.edu';
    $CFG->sslproxy  = false;
//}
//else
//    $CFG->wwwroot   = 'http://moodleprod.its.bethel.edu';

$CFG->wwwroot   = 'https://moodle.xp.bethel.edu';
$CFG->dataroot  = '/var/www/moodledata';
//$CFG->dataroot  = '/var/www/s3moodledata';
//$CFG->localcachedir = '/var/local/moodle-localcache';
$CFG->admin     = 'admin';
//$CFG->sslproxy  = true;

$CFG->passwordsaltmain = '@V{ZfL[!$K,EmWOn<+nh&g"uR2nb939AaDaT47X+2X<CWnk.xe9M-xc.*kFK5B8m';

$CFG->directorypermissions = 0770;

// $CFG->debugusers = '3';
$CFG->disablescheduledbackups = true;
$CFG->enablestats = false;
$CFG->dblogerror = true;

//we edited the lines that define which blocks go where when courses are //automagically created
// These variables define the specific settings for defined course formats.
// They override any settings defined in the formats own config file.
$CFG->defaultblocks_site = ':participants,activity_modules,library,quickmail,news_items';
$CFG->defaultblocks_social = ':participants,activity_modules,library,quickmail,news_items';
$CFG->defaultblocks_topics = ':participants,activity_modules,library,quickmail,news_items';
$CFG->defaultblocks_weeks = ':participants,activity_modules,library,quickmail,news_items';
$CFG->defaultblocks_topcoll = ':participants,activity_modules,library,quickmail,news_items';
// These blocks are used when no other default setting is found.
$CFG->defaultblocks = ':participants,activity_modules,library,quickmail,news_items';

//Theme
//$CFG->theme = 'Boost';

// Handle sessions using the DB
$CFG->session_handler_class = '\core\session\database';
$CFG->session_database_acquire_lock_timeout = 120;

require_once(dirname(__FILE__) .'/lib/setup.php');

//=========================================================================
// 7. SETTINGS FOR DEVELOPMENT SERVERS - not intended for production use!!!
//=========================================================================
//
// Force a debugging mode regardless the settings in the site administration
//@error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
//@ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
//$CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION SERVERS!
//$CFG->debugdisplay = 1;              // NOT FOR PRODUCTION SERVERS!
///
// You can specify a comma separated list of user ids that that always see
// debug messages, this overrides the debug flag in $CFG->debug and $CFG->debugdisplay
// for these users only.
// $CFG->debugusers = '2';
