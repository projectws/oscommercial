<?php
  define('HTTP_SERVER', 'https://192.168.56.115');
  define('HTTPS_SERVER', 'https://192.168.56.115');
  define('ENABLE_SSL', true);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '/catalog/');
  define('HTTPS_COOKIE_PATH', '/catalog/');
  define('DIR_WS_HTTP_CATALOG', '/catalog/');
  define('DIR_WS_HTTPS_CATALOG', '/catalog/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', '/home/student/public_html/catalog/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', 'student');
  define('DB_DATABASE', 'osCommerce');
  define('USE_PCONNECT', 'false');
  define('USE_CACHE', 'true');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'Asia/Singapore');
?>