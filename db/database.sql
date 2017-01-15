CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `price` float(12,4) NOT NULL,
  `stock` float(12,4) DEFAULT NULL,
  `attribute_set_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`),
  KEY `name` (`name`)
);

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
);

CREATE TABLE IF NOT EXISTS `product_category` (
  `category_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `category_id` (`category_id`,`product_id`)
);

CREATE TABLE IF NOT EXISTS `attribute_set` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `attribute` (
  `id`   INT(11) UNSIGNED  NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `attribute_set_id` (
  `attribute_set_id` int(10) unsigned NOT NULL,
  `attribute_id` int(10) unsigned NOT NULL
);

CREATE TABLE IF NOT EXISTS `attribute_value` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attribute_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attribute_value_attribute_id_attribute_id` (`attribute_id`)
);

CREATE TABLE IF NOT EXISTS `product_attribute_value` (
  `product_id` int(11) unsigned NOT NULL,
  `attribute_value_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `product_id` (`product_id`,`attribute_value_id`)
);

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE IF NOT EXISTS `customer_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `postcode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
);

ALTER TABLE product_category ADD CONSTRAINT product_category_product_id_product_id FOREIGN KEY ( product_id ) REFERENCES `product` ( id ) ON DELETE CASCADE;
ALTER TABLE product_category ADD CONSTRAINT product_category_category_id_category_id FOREIGN KEY ( category_id ) REFERENCES `category` ( id ) ON DELETE CASCADE;

ALTER TABLE product ADD CONSTRAINT product_attribute_set_id_attribute_set_id FOREIGN KEY ( attribute_set_id ) REFERENCES `attribute_set` ( id );
ALTER TABLE attribute_set_id ADD CONSTRAINT attribute_set_id_attribute_set_id_attribute_set_id FOREIGN KEY ( attribute_set_id ) REFERENCES `attribute_set` ( id ) ON DELETE CASCADE;
ALTER TABLE attribute_set_id ADD CONSTRAINT attribute_set_id_attribute_id_attribute_id FOREIGN KEY ( attribute_id ) REFERENCES `attribute` ( id) ;
ALTER TABLE attribute_value ADD CONSTRAINT attribute_value_attribute_id_attribute_id FOREIGN KEY ( attribute_id ) REFERENCES `attribute` ( id );
ALTER TABLE product_attribute_value ADD CONSTRAINT product_attribute_value_attribute_value_id_attribute_value_id FOREIGN KEY ( attribute_value_id ) REFERENCES `attribute_value` ( id ) ON DELETE CASCADE ;
ALTER TABLE product_attribute_value ADD CONSTRAINT product_attribute_value_product_id_product_id FOREIGN KEY ( product_id ) REFERENCES `product` ( id ) ON DELETE CASCADE ;

ALTER TABLE customer_address ADD CONSTRAINT customer_address_customer_id_customer_id FOREIGN KEY (customer_id ) REFERENCES `customer` ( id ) ON DELETE CASCADE ;
