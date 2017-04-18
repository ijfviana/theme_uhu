<?php

/*
 * @author    University Of Huelva
 * @package   theme_uhu
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Basic Heading
    $name = 'theme_uhu/basicheading';
    $heading = get_string('basicheading', 'theme_uhu');
    $information = get_string('basicheadingdesc', 'theme_uhu');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Logo file setting
	$name = 'theme_uhu/logo';
	$title = get_string('logo','theme_uhu');
	$description = get_string('logodesc', 'theme_uhu');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	// Hide Menu
	$name = 'theme_uhu/hidemenu';
	$title = get_string('hidemenu','theme_uhu');
	$description = get_string('hidemenudesc', 'theme_uhu');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Email url setting
	$name = 'theme_uhu/emailurl';
	$title = get_string('emailurl','theme_uhu');
	$description = get_string('emailurldesc', 'theme_uhu');
	$default = 'https://correo.uhu.es';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Custom CSS file
	$name = 'theme_uhu/customcss';
	$title = get_string('customcss','theme_uhu');
	$description = get_string('customcssdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Frontpage Heading
    $name = 'theme_uhu/frontpageheading';
    $heading = get_string('frontpageheading', 'theme_uhu');
    $information = get_string('frontpageheadingdesc', 'theme_uhu');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Title Date setting
	$name = 'theme_uhu/titledate';
	$title = get_string('titledate','theme_uhu');
	$description = get_string('titledatedesc', 'theme_uhu');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// General Alert setting
	$name = 'theme_uhu/generalalert';
	$title = get_string('generalalert','theme_uhu');
	$description = get_string('generalalertdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Snow Alert setting
	$name = 'theme_uhu/snowalert';
	$title = get_string('snowalert','theme_uhu');
	$description = get_string('snowalertdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

    // Colour Heading
    $name = 'theme_uhu/colourheading';
    $heading = get_string('colourheading', 'theme_uhu');
    $information = get_string('colourheadingdesc', 'theme_uhu');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Background colour setting
	$name = 'theme_uhu/backcolor';
	$title = get_string('backcolor','theme_uhu');
	$description = get_string('backcolordesc', 'theme_uhu');
	$default = '#fafafa';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// Graphic Wrap (Background Image)
	$name = 'theme_uhu/backimage';
	$title=get_string('backimage','theme_uhu');
	$description = get_string('backimagedesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	// Graphic Wrap (Background Position)
	$name = 'theme_uhu/backposition';
	$title = get_string('backposition','theme_uhu');
	$description = get_string('backpositiondesc', 'theme_uhu');
	$default = 'no-repeat';
	$choices = array('no-repeat'=>get_string('backpositioncentred','theme_uhu'), 'no-repeat fixed'=>get_string('backpositionfixed','theme_uhu'), 'repeat'=>get_string('backpositiontiled','theme_uhu'), 'repeat-x'=>get_string('backpositionrepeat','theme_uhu'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Menu hover background colour setting
	$name = 'theme_uhu/menuhovercolor';
	$title = get_string('menuhovercolor','theme_uhu');
	$description = get_string('menuhovercolordesc', 'theme_uhu');
	$default = '#a32638';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// Footer Options Heading
    $name = 'theme_uhu/footeroptheading';
    $heading = get_string('footeroptheading', 'theme_uhu');
    $information = get_string('footeroptdesc', 'theme_uhu');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Copyright setting
	$name = 'theme_uhu/copyright';
	$title = get_string('copyright','theme_uhu');
	$description = get_string('copyrightdesc', 'theme_uhu');
	$default = 'Universidad de Huelva';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// CEOP
	$name = 'theme_uhu/ceop';
	$title = get_string('ceop','theme_uhu');
	$description = get_string('ceopdesc', 'theme_uhu');
	$default = '';
	$choices = array(''=>get_string('ceopnone','theme_uhu'), 'http://www.thinkuknow.org.au/site/report.asp'=>get_string('ceopaus','theme_uhu'), 'http://www.ceop.police.uk/report-abuse/'=>get_string('ceopuk','theme_uhu'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Disclaimer setting
	$name = 'theme_uhu/disclaimer';
	$title = get_string('disclaimer','theme_uhu');
	$description = get_string('disclaimerdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
	$settings->add($setting);

	// Social Icons Heading
    $name = 'theme_uhu/socialiconsheading';
    $heading = get_string('socialiconsheading', 'theme_uhu');
    $information = get_string('socialiconsheadingdesc', 'theme_uhu');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Website url setting
	$name = 'theme_uhu/website';
	$title = get_string('website','theme_uhu');
	$description = get_string('websitedesc', 'theme_uhu');
	$default = 'http://www.uhu.es';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Facebook url setting
	$name = 'theme_uhu/facebook';
	$title = get_string('facebook','theme_uhu');
	$description = get_string('facebookdesc', 'theme_uhu');
	$default = 'https://www.facebook.com/uhu.es';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Twitter url setting
	$name = 'theme_uhu/twitter';
	$title = get_string('twitter','theme_uhu');
	$description = get_string('twitterdesc', 'theme_uhu');
	$default = 'https://twitter.com/CanalUHU';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Google+ url setting
	$name = 'theme_uhu/googleplus';
	$title = get_string('googleplus','theme_uhu');
	$description = get_string('googleplusdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Flickr url setting
	$name = 'theme_uhu/flickr';
	$title = get_string('flickr','theme_uhu');
	$description = get_string('flickrdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Pinterest url setting
	$name = 'theme_uhu/pinterest';
	$title = get_string('pinterest','theme_uhu');
	$description = get_string('pinterestdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Instagram url setting
	$name = 'theme_uhu/instagram';
	$title = get_string('instagram','theme_uhu');
	$description = get_string('instagramdesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// LinkedIn url setting
	$name = 'theme_uhu/linkedin';
	$title = get_string('linkedin','theme_uhu');
	$description = get_string('linkedindesc', 'theme_uhu');
	$default = 'http://es.linkedin.com/in/universidaddehuelva';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Wikipedia url setting
	$name = 'theme_uhu/wikipedia';
	$title = get_string('wikipedia','theme_uhu');
	$description = get_string('wikipediadesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// YouTube url setting
	$name = 'theme_uhu/youtube';
	$title = get_string('youtube','theme_uhu');
	$description = get_string('youtubedesc', 'theme_uhu');
	$default = 'https://www.youtube.com/user/UniversidaddeHuelva';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Apple url setting
	$name = 'theme_uhu/apple';
	$title = get_string('apple','theme_uhu');
	$description = get_string('appledesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Android url setting
	$name = 'theme_uhu/android';
	$title = get_string('android','theme_uhu');
	$description = get_string('androiddesc', 'theme_uhu');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

}
