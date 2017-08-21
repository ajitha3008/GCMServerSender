# GCMServerSender

This is a php web server that was designed to send push notification to one of the registered device. This server is compatible with the Android application at https://github.com/ajitha3008/GCMClientRecevier

Enter your server details in https://github.com/ajitha3008/GCMServerSender/blob/master/config.php before hosting these files in your web server.

Get a server key for "GOOGLE_API_KEY" from google console and replace it here.

I tested it locally using XAMPP webserver in Windows and MAMP webserver in iOS. This server code is compatible with php v7.X.X

Before hosting the server get into the phpMyAdmin and create a database named gcm and a table named gcm_users using the following raw query.

CREATE TABLE IF NOT EXISTS `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
