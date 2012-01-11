insert into ecs_shop_config set  parent_id = 1 , type='select', code = 'shop_referral_closed', store_range = '1,0', value = 0;

drop table ecs_user_referral;
create table ecs_user_referral (
    id mediumint unsigned not null auto_increment,
    user_id mediumint unsigned not null,
    referral_email varchar(255) not null,
    created_date int(10) unsigned NOT NULL DEFAULT '0',
    is_active tinyint default 1,
    registered_date int(10) unsigned NOT NULL DEFAULT '0',
    registered_user_id mediumint unsigned default null,
    primary key(id),
    index idx_ecs_user_referral_referral_email (referral_email)
);

