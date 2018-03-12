CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todo`;

CREATE TABLE `lists` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_title` varchar(100) NOT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `lists` (`list_id`, `list_title`) VALUES
(1, 'Vandaag'),
(2, 'Morgen');

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_title` varchar(100) NOT NULL,
  `item_status` varchar(100) NOT NULL,
  `list_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `items` (`item_id`, `item_title`, `item_status`, `list_id`) VALUES
(1, 'Boodschappen doen', 'active', 1),
(2, 'Schoonmaken', 'active', 2);
