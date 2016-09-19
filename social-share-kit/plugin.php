<?php

class SocialShareKit extends KokenPlugin {

	function __construct(){
		$this->require_setup = true;
		$this->register_hook('before_closing_head', 'render_into_head');
		$this->register_hook('before_closing_body', 'renderMarkUp');
		$this->register_hook('before_closing_body', 'renderLast');
	}
	function render_into_head(){
		echo <<<OUT
<link rel="stylesheet" href="{$this->get_path()}/css/social-share-kit.css" type="text/css">
OUT;
	}

	function renderMarkUp(){
		$ssk_side		= $this->data->SocialShareKit_side;
		$ssk_size		= $this->data->SocialShareKit_size;
		$ssk_grayscale	= $this->data->SocialShareKit_gray;
		$ssk_shape		= $this->data->SocialShareKit_shape;

		$ssk_facebook	= $this->data->SocialShareKit_facebook;
		$ssk_twitter	= $this->data->SocialShareKit_twitter;
		$ssk_gplus		= $this->data->SocialShareKit_gplus;
		$ssk_pinterest	= $this->data->SocialShareKit_pinterest;
		$ssk_tumblr		= $this->data->SocialShareKit_tumblr;
		$ssk_vk			= $this->data->SocialShareKit_vk;
		$ssk_linkedin	= $this->data->SocialShareKit_linkedin;
		$ssk_email		= $this->data->SocialShareKit_email;

		$ssk_share1		= $this->data->SocialShareKit_sharethis;
		$ssk_share2		= $this->data->SocialShareKit_sharemail;

		echo <<<HTML
<div class="ssk-group ssk-sticky ssk-center {$ssk_side} {$ssk_size} {$ssk_grayscale} {$ssk_shape}">
	<a href="" class="ssk ssk-facebook" style="display:{$ssk_facebook};" title="{$ssk_share1} Facebook"></a>
	<a href="" class="ssk ssk-twitter" style="display:{$ssk_twitter};" title="{$ssk_share1} Twitter"></a>
	<a href="" class="ssk ssk-google-plus" style="display:{$ssk_gplus};" title="{$ssk_share1} Googele+"></a>
	<a href="" class="ssk ssk-pinterest" style="display:{$ssk_pinterest};" title="{$ssk_share1} Pinterest"></a>
	<a href="" class="ssk ssk-tumblr" style="display:{$ssk_tumblr};" title="{$ssk_share1} Tumblr"></a>
	<a href="" class="ssk ssk-vk" style="display:{$ssk_vk};" title="{$ssk_share1} VK"></a>
	<a href="" class="ssk ssk-linkedin" style="display:{$ssk_linkedin};" title="{$ssk_share1} LinkedIn"></a>
	<a href="" class="ssk ssk-email" style="display:{$ssk_email};" title="{$ssk_share2}"></a>
</div>
HTML;
	}

	function renderLast(){
		echo <<<OUT
<script type="text/javascript" src="{$this->get_path()}/js/social-share-kit.min.js"></script>
<script>
	SocialShareKit.init();
</script>
OUT;
	}
}

 ?>
