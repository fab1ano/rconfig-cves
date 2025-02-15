<?php
if (php_sapi_name() != 'cli') {
        $config_basedir = "http://".$_SERVER['HTTP_HOST']."/";
}
$config_web_basedir = $_SERVER['DOCUMENT_ROOT'] . "/";
$config_sitename = "rConfig";
$config_author = "Stephen Stack";
$config_version = "3.9.2";
$config_app_basedir = "/home/rconfig/";
$config_log_basedir = "/home/rconfig/logs/";
$config_data_basedir = "/home/rconfig/data/";
$config_backup_basedir = "/home/rconfig/backups/";
$config_syslogBackup_basedir = "/home/rconfig/backups/syslogs/";
$config_webLogs_basedir = "/home/rconfig/logs/wwwlogs/";
$config_phpLogs_basedir = "/home/rconfig/logs/phpLog/";
$config_reports_basedir = "/home/rconfig/reports/";
$config_templates_basedir = "/home/rconfig/templates/";
$config_temp_dir = "/home/rconfig/tmp/";
$config_page = basename($_SERVER['SCRIPT_NAME']);
$logdir = '../logs/';

/* DEFINES Below*/
define('WEB_DIR', '/home/rconfig/www');
define('SECRETKEY', '');
define('SECRETIV', '');

/* DATABASE DEFINES */
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'rconfig');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TBL_USERS", "users");
define("TBL_ACTIVE_USERS",  "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS",  "banned_users");

/**
 * Special Names and Level Constants - the admin
 * page will only be accessible to the user with
 * the admin name and also to those users at the
 * admin user level. Feel free to change the names
 * and level constants as you see fit, you may
 * also add additional level specifications.
 * Levels must be digits between 0-9.
 */
define("ADMIN_NAME", "admin");
define("GUEST_NAME", "Guest");
define("ADMIN_LEVEL", 9);
define("USER_LEVEL",  1);
define("GUEST_LEVEL", 0);

/**
 * This boolean constant controls whether or
 * not the script keeps track of active users
 * and active guests who are visiting the site.
 */
define("TRACK_VISITORS", true);

/**
 * Timeout Constants - these constants refer to
 * the maximum amount of time (in minutes) after
 * their last page fresh that a user and guest
 * are still considered active visitors.
 */
define("USER_TIMEOUT", 10);
define("GUEST_TIMEOUT", 5);

/**
 * Cookie Constants - these are the parameters
 * to the setcookie function call, change them
 * if necessary to fit your website. If you need
 * help, visit www.php.net for more info.
 * <http://www.php.net/manual/en/function.setcookie.php>
 */
define("COOKIE_EXPIRE", 60*60*24*100);  //100 days by default
define("COOKIE_PATH", "/");  //Available in whole domain

/**
 * Email Constants - these specify what goes in
 * the from field in the emails that the script
 * sends to users, and whether to send a
 * welcome email to newly registered users.
 */
define("EMAIL_FROM_NAME", "Administrator");
define("EMAIL_FROM_ADDR", "admin@rconfig.com");
define("EMAIL_WELCOME", true);

/**
 * This constant forces all users to have
 * lowercase usernames, capital letters are
 * converted automatically.
 */
define("ALL_LOWERCASE", true);
