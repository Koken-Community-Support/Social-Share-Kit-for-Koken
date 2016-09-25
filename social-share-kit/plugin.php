<?php

class kcsSocialShareKit extends KokenPlugin {

	function __construct(){
		$this->require_setup = true;
		$this->register_hook('before_closing_head', 'render_into_head');
		$this->register_hook('before_closing_body', 'renderMarkUp');
		$this->register_hook('before_closing_body', 'renderLast');
	}

	function render_into_head($data){
		if (!$data['lightbox']) {
			echo <<<OUT
			<link rel="stylesheet" href="{$this->get_path()}/css/social-share-kit.min.css" type="text/css">
OUT;
		}
	}

	function renderMarkUp($data){
		if (!$data['lightbox']) {
			if ($this->data->SocialShareKit_hides){
				echo <<<HTML
				<div class="ssk-group ssk-sticky ssk-center {$this->data->SocialShareKit_side} {$this->data->SocialShareKit_size} {$this->data->SocialShareKit_gray} {$this->data->SocialShareKit_shape} ssk-sticky-hide-xs">
HTML;
			} else {
				echo <<<HTML
				<div class="ssk-group ssk-sticky ssk-center {$this->data->SocialShareKit_side} {$this->data->SocialShareKit_size} {$this->data->SocialShareKit_gray} {$this->data->SocialShareKit_shape}">
HTML;
			}
			if ($this->data->SocialShareKit_facebook){
				echo <<<HTML
				<a href="" class="ssk ssk-facebook" title="{$this->data->SocialShareKit_sharethisFB}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_twitter){
				echo <<<HTML
				<a href="" class="ssk ssk-twitter" title="{$this->data->SocialShareKit_sharethisTwitter}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_gplus){
				echo <<<HTML
				<a href="" class="ssk ssk-google-plus" title="{$this->data->SocialShareKit_sharethisgPlus}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_pinterest){
				echo <<<HTML
				<a href="" class="ssk ssk-pinterest" title="{$this->data->SocialShareKit_sharethisPinterest}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_tumblr){
				echo <<<HTML
				<a href="" class="ssk ssk-tumblr" title="{$this->data->SocialShareKit_sharethisTumblr}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_vk){
				echo <<<HTML
				<a href="" class="ssk ssk-vk" title="{$this->data->SocialShareKit_sharethisVK}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_linkedin){
				echo <<<HTML
				<a href="" class="ssk ssk-linkedin" title="{$this->data->SocialShareKit_sharethisLinkedIn}"></a>
HTML;
			}
			if ($this->data->SocialShareKit_sharemail){
				echo <<<HTML
				<a href="" class="ssk ssk-email" title="{$this->data->SocialShareKit_sharemail}"></a>
HTML;
			}
			echo <<<HTML
			</div>
HTML;
		}
	}

	function renderLast($data){
		if (!$data['lightbox']) {
			echo <<<OUT
			<script src="{$this->get_path()}/js/social-share-kit.min.js"></script>
			<script>
				SocialShareKit.init();
			</script>
OUT;
		}
	}
}

 ?>
