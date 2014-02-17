USE oscommerce;

CREATE TABLE IF NOT EXISTS `wa_sessions` (
  `session_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `session_key` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `session_starttime` datetime NOT NULL,
  `session_year` int(4) NOT NULL,
  `session_month` int(2) NOT NULL,
  `session_month_string` varchar(15) NOT NULL,
  `session_day` int(2) NOT NULL,
  `session_dayofweek` varchar(15) NOT NULL,
  `session_hour` int(2) NOT NULL,
  `session_min` int(2) NOT NULL,
  `session_week` int(2) NOT NULL,
  `is_repeat_visitor` tinyint(1) NOT NULL,
  `is_new_visitor` tinyint(1) NOT NULL,
  `prior_session_id` bigint(20) DEFAULT NULL,
  `prior_session_datetime` datetime DEFAULT NULL,
  `first_page_url` varchar(1024) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `is_browser` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`session_id`)
);

CREATE TABLE IF NOT EXISTS `wa_views` (
  `view_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `view_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`view_ID`)
) '
