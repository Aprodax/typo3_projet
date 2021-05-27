#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_product'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_product (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL,
	videos int(11) unsigned NOT NULL default '0',
	availability_date int(11) DEFAULT '0' NOT NULL,
	categories int(11) unsigned DEFAULT '0' NOT NULL,
	brand int(11) unsigned DEFAULT '0',
	properties int(11) unsigned DEFAULT '0' NOT NULL,
	reviews int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_category'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_category (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	children int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_brand'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_brand (

	tx_catalogueftcbtclc_label varchar(255) DEFAULT '' NOT NULL,
	description text,
	logo int(11) unsigned NOT NULL default '0'

);

#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_feature'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_feature (

	name varchar(255) DEFAULT '' NOT NULL,
	unit varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_property'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_property (

	product int(11) unsigned DEFAULT '0' NOT NULL,

	value varchar(255) DEFAULT '' NOT NULL,
	feature int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_catalogueftcbtclc_domain_model_review'
#
CREATE TABLE tx_catalogueftcbtclc_domain_model_review (

	product int(11) unsigned DEFAULT '0' NOT NULL,

	reviewer varchar(255) DEFAULT '' NOT NULL,
	comment text,
	rating int(11) DEFAULT '0' NOT NULL,
	review_date int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_catalogueftcbtclc_product_category_mm'
#
CREATE TABLE tx_catalogueftcbtclc_product_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_catalogueftcbtclc_category_category_mm'
#
CREATE TABLE tx_catalogueftcbtclc_category_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
