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

insert into ecs_mail_templates (template_code, is_html, template_subject, template_content,last_modify, last_send, `type`) values
('referral_email_confirm', 0, 'Referral Confirm Email', '您好！<br><br>

您的朋友{user_name}推荐您成为{$shop_name}的会员<br />
请点击以下链接(或者复制到您的浏览器)来进行注册<br />
<a href="{$referral_comfirm_url}" target="_blank">{$referral_comfirm_url}</a><br><br>

{$shop_name}<br />
{$send_date}', unix_timestamp(), 1, 'template');
