<?php

$installer = $this;
$pathFile = Mage::getBaseDir('var').DS.'install_galaelectronues.txt';
if(file_exists($pathFile)){
    echo 'Installing Gala Electronues theme, please come back in some minutes ...';
    exit;
}
$installer->startSetup();


####################################################################################################
# ADD THEMEFRAMEWORK LAYOUT
####################################################################################################

$model = Mage::getModel('themeframework/area');
	
$data = array(
	'package_theme'  => 'default/galaelectronues',
	'layout'         => '1column',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:47:"<div class="container-header">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_search";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area3";i:1;s:8:"em_area4";}}i:2;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:1;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:5:{i:0;s:15:"global_messages";i:1;s:8:"em_area5";i:2;s:7:"content";i:3;s:8:"em_area7";i:4;s:8:"em_area6";}}i:2;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}i:1;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"footer-left";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:2;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:3;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:16:"container-footer";s:10:"inner_html";s:51:"<div class="footer-inner grid_24">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"alpha";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:2;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/galaelectronues',
	'layout'         => '2columns-left',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:47:"<div class="container-header">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_search";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area3";i:1;s:8:"em_area4";}}i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:3;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"18";s:4:"push";s:1:"6";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:5:{i:0;s:15:"global_messages";i:1;s:8:"em_area5";i:2;s:7:"content";i:3;s:8:"em_area7";i:4;s:8:"em_area6";}}i:1;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:2:"18";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:47:"<div class="col-left sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:4:{i:0;s:8:"em_area8";i:1;s:4:"left";i:2;s:9:"em_area10";i:3;s:8:"em_area9";}}i:2;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}i:1;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"footer-left";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:2;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:3;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:16:"container-footer";s:10:"inner_html";s:51:"<div class="footer-inner grid_24">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"alpha";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:2;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/galaelectronues',
	'layout'         => '2columns-right',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:47:"<div class="container-header">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_search";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area3";i:1;s:8:"em_area4";}}i:2;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:1;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:5:{i:0;s:15:"global_messages";i:1;s:8:"em_area5";i:2;s:7:"content";i:3;s:8:"em_area7";i:4;s:8:"em_area6";}}i:2;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:48:"<div class="col-right sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area11";i:1;s:5:"right";i:2;s:9:"em_area12";}}i:3;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}i:1;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"footer-left";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:2;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:3;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:16:"container-footer";s:10:"inner_html";s:51:"<div class="footer-inner grid_24">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"alpha";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:2;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/galaelectronues',
	'layout'         => '3columns',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:47:"<div class="container-header">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_search";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area3";i:1;s:8:"em_area4";}}i:2;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:1;a:11:{s:6:"column";s:2:"12";s:4:"push";s:1:"6";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:5:{i:0;s:15:"global_messages";i:1;s:8:"em_area5";i:2;s:7:"content";i:3;s:8:"em_area7";i:4;s:8:"em_area6";}}i:2;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:2:"12";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:47:"<div class="col-left sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:4:{i:0;s:8:"em_area8";i:1;s:4:"left";i:2;s:9:"em_area10";i:3;s:8:"em_area9";}}i:3;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:48:"<div class="col-right sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area11";i:1;s:5:"right";i:2;s:9:"em_area12";}}i:4;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:4:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}i:1;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"footer-left";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:2;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:3;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:16:"container-footer";s:10:"inner_html";s:51:"<div class="footer-inner grid_24">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:3:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"alpha";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:5:"omega";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:2;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();


####################################################################################################
# ADD MEGAMENU PRO
####################################################################################################

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('megamenupro')} (
  `megamenupro_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `content` text NOT NULL default '', 
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`megamenupro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$helper = Mage::helper('galaelectronuessettings');
$helperSample = Mage::helper('galaelectronuessettings/sample');
$helperSample->importSampleData();
$installer->endSetup(); 
unlink($pathFile);