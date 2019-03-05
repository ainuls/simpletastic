<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'component/head.php';?>
	<style>
	.list-icon{
		display: flex;
		flex-wrap: wrap;
	}
	.list-icon li{
		display: flex;
		/*justify-content: center;*/
		align-items: center;
		width: 225px;
		margin-right: 10px;
		margin-bottom: 10px;
		padding: 10px 15px;
		border: 1px solid #dbdbdb;
		border-radius: 4px;
		list-style: none;
		font-size: .8em;
	}
	.list-icon li > i{
		font-size: 1.5em;
		margin-right: 20px;
	}
	@media only screen and (max-width: 991px) {.list-icon li{width: 31.5%;}}
	@media only screen and (max-width: 767px) {.list-icon li{width: 47%;}}
	@media only screen and (max-width: 540px) {.list-icon li{width: 100%;margin-right: 0;}}

</style>
</head>
<body>
	<div id="wrapper">
		<?php include 'component/sidebar.php';?>
		<div id="body">
			<?php include 'component/topbar.php';?>
			<div class="container-fluid" id="content">
				<div class="row">
					<div class="col">
						<div class="alert alert-info alert-contrast show" role="alert">
							<div class="icon"><i class="icon-info"></i></div>
							<div class="message"><strong>Disclaimer!</strong> These icons are based on <b>Simple Line Icon</b> which you can check them out from the original creators <a href="http://simplelineicons.com/" target="_BLANK" class="badge badge-secondary ml-1" style="padding-top: 1px;padding-bottom: 1px;">here</a></div>
						</div>
						<div class="card card-secondary card-contrast">
							<div class="card-header">Icon List</div>
							<div class="card-body">
								<ul class="list-icon">
									<li><i class="icon-user"></i>icon-user</li>
									<li><i class="icon-people"></i>icon-people</li>
									<li><i class="icon-user-female"></i>icon-user-female</li>
									<li><i class="icon-user-follow"></i>icon-user-follow</li>
									<li><i class="icon-user-following"></i>icon-user-following</li>
									<li><i class="icon-user-unfollow"></i>icon-user-unfollow</li>
									<li><i class="icon-login"></i>icon-login</li>
									<li><i class="icon-logout"></i>icon-logout</li>
									<li><i class="icon-emotsmile"></i>icon-emotsmile</li>
									<li><i class="icon-phone"></i>icon-phone</li>
									<li><i class="icon-call-end"></i>icon-call-end</li>
									<li><i class="icon-call-in"></i>icon-call-in</li>
									<li><i class="icon-call-out"></i>icon-call-out</li>
									<li><i class="icon-map"></i>icon-map</li>
									<li><i class="icon-location-pin"></i>icon-location-pin</li>
									<li><i class="icon-direction"></i>icon-direction</li>
									<li><i class="icon-directions"></i>icon-directions</li>
									<li><i class="icon-compass"></i>icon-compass</li>
									<li><i class="icon-layers"></i>icon-layers</li>
									<li><i class="icon-menu"></i>icon-menu</li>
									<li><i class="icon-list"></i>icon-list</li>
									<li><i class="icon-options-vertical"></i>icon-options-vertical</li>
									<li><i class="icon-options"></i>icon-options</li>
									<li><i class="icon-arrow-down"></i>icon-arrow-down</li>
									<li><i class="icon-arrow-up"></i>icon-arrow-up</li>
									<li><i class="icon-arrow-left"></i>icon-arrow-left</li>
									<li><i class="icon-arrow-right"></i>icon-arrow-right</li>
									<li><i class="icon-arrow-down-circle"></i>icon-arrow-down-circle</li>
									<li><i class="icon-arrow-up-circle"></i>icon-arrow-up-circle</li>
									<li><i class="icon-arrow-left-circle"></i>icon-arrow-left-circle</li>
									<li><i class="icon-arrow-right-circle"></i>icon-arrow-right-circle</li>
									<li><i class="icon-check"></i>icon-check</li>
									<li><i class="icon-clock"></i>icon-clock</li>
									<li><i class="icon-plus"></i>icon-plus</li>
									<li><i class="icon-minus"></i>icon-minus</li>
									<li><i class="icon-close"></i>icon-close</li>
									<li><i class="icon-event"></i>icon-event</li>
									<li><i class="icon-exclamation"></i>icon-exclamation</li>
									<li><i class="icon-organization"></i>icon-organization</li>
									<li><i class="icon-trophy"></i>icon-trophy</li>
									<li><i class="icon-screen-smartphone"></i>icon-screen-smartphone</li>
									<li><i class="icon-screen-desktop"></i>icon-screen-desktop</li>
									<li><i class="icon-plane"></i>icon-plane</li>
									<li><i class="icon-notebook"></i>icon-notebook</li>
									<li><i class="icon-mustache"></i>icon-mustache</li>
									<li><i class="icon-mouse"></i>icon-mouse</li>
									<li><i class="icon-magnet"></i>icon-magnet</li>
									<li><i class="icon-energy"></i>icon-energy</li>
									<li><i class="icon-disc"></i>icon-disc</li>
									<li><i class="icon-cursor"></i>icon-cursor</li>
									<li><i class="icon-cursor-move"></i>icon-cursor-move</li>
									<li><i class="icon-crop"></i>icon-crop</li>
									<li><i class="icon-chemistry"></i>icon-chemistry</li>
									<li><i class="icon-speedometer"></i>icon-speedometer</li>
									<li><i class="icon-shield"></i>icon-shield</li>
									<li><i class="icon-screen-tablet"></i>icon-screen-tablet</li>
									<li><i class="icon-magic-wand"></i>icon-magic-wand</li>
									<li><i class="icon-hourglass"></i>icon-hourglass</li>
									<li><i class="icon-graduation"></i>icon-graduation</li>
									<li><i class="icon-ghost"></i>icon-ghost</li>
									<li><i class="icon-game-controller"></i>icon-game-controller</li>
									<li><i class="icon-fire"></i>icon-fire</li>
									<li><i class="icon-eyeglass"></i>icon-eyeglass</li>
									<li><i class="icon-envelope-open"></i>icon-envelope-open</li>
									<li><i class="icon-envelope-letter"></i>icon-envelope-letter</li>
									<li><i class="icon-bell"></i>icon-bell</li>
									<li><i class="icon-badge"></i>icon-badge</li>
									<li><i class="icon-anchor"></i>icon-anchor</li>
									<li><i class="icon-wallet"></i>icon-wallet</li>
									<li><i class="icon-vector"></i>icon-vector</li>
									<li><i class="icon-speech"></i>icon-speech</li>
									<li><i class="icon-puzzle"></i>icon-puzzle</li>
									<li><i class="icon-printer"></i>icon-printer</li>
									<li><i class="icon-present"></i>icon-present</li>
									<li><i class="icon-playlist"></i>icon-playlist</li>
									<li><i class="icon-pin"></i>icon-pin</li>
									<li><i class="icon-picture"></i>icon-picture</li>
									<li><i class="icon-handbag"></i>icon-handbag</li>
									<li><i class="icon-globe-alt"></i>icon-globe-alt</li>
									<li><i class="icon-globe"></i>icon-globe</li>
									<li><i class="icon-folder-alt"></i>icon-folder-alt</li>
									<li><i class="icon-folder"></i>icon-folder</li>
									<li><i class="icon-film"></i>icon-film</li>
									<li><i class="icon-feed"></i>icon-feed</li>
									<li><i class="icon-drop"></i>icon-drop</li>
									<li><i class="icon-drawer"></i>icon-drawer</li>
									<li><i class="icon-docs"></i>icon-docs</li>
									<li><i class="icon-doc"></i>icon-doc</li>
									<li><i class="icon-diamond"></i>icon-diamond</li>
									<li><i class="icon-cup"></i>icon-cup</li>
									<li><i class="icon-calculator"></i>icon-calculator</li>
									<li><i class="icon-bubbles"></i>icon-bubbles</li>
									<li><i class="icon-briefcase"></i>icon-briefcase</li>
									<li><i class="icon-book-open"></i>icon-book-open</li>
									<li><i class="icon-basket"></i>icon-basket</li>
									<li><i class="icon-basket-loaded"></i>icon-basket-loaded</li>
									<li><i class="icon-bag"></i>icon-bag</li>
									<li><i class="icon-action-undo"></i>icon-action-undo</li>
									<li><i class="icon-action-redo"></i>icon-action-redo</li>
									<li><i class="icon-wrench"></i>icon-wrench</li>
									<li><i class="icon-umbrella"></i>icon-umbrella</li>
									<li><i class="icon-trash"></i>icon-trash</li>
									<li><i class="icon-tag"></i>icon-tag</li>
									<li><i class="icon-support"></i>icon-support</li>
									<li><i class="icon-frame"></i>icon-frame</li>
									<li><i class="icon-size-fullscreen"></i>icon-size-fullscreen</li>
									<li><i class="icon-size-actual"></i>icon-size-actual</li>
									<li><i class="icon-shuffle"></i>icon-shuffle</li>
									<li><i class="icon-share"></i>icon-share</li>
									<li><i class="icon-share-alt"></i>icon-share-alt</li>
									<li><i class="icon-rocket"></i>icon-rocket</li>
									<li><i class="icon-question"></i>icon-question</li>
									<li><i class="icon-pie-chart"></i>icon-pie-chart</li>
									<li><i class="icon-pencil"></i>icon-pencil</li>
									<li><i class="icon-note"></i>icon-note</li>
									<li><i class="icon-loop"></i>icon-loop</li>
									<li><i class="icon-home"></i>icon-home</li>
									<li><i class="icon-grid"></i>icon-grid</li>
									<li><i class="icon-graph"></i>icon-graph</li>
									<li><i class="icon-microphone"></i>icon-microphone</li>
									<li><i class="icon-music-tone"></i>icon-music-tone</li>
									<li><i class="icon-music-tone-alt"></i>icon-music-tone-alt</li>
									<li><i class="icon-earphones"></i>icon-earphones</li>
									<li><i class="icon-earphones-alt"></i>icon-earphones-alt</li>
									<li><i class="icon-equalizer"></i>icon-equalizer</li>
									<li><i class="icon-like"></i>icon-like</li>
									<li><i class="icon-dislike"></i>icon-dislike</li>
									<li><i class="icon-control-start"></i>icon-control-start</li>
									<li><i class="icon-control-rewind"></i>icon-control-rewind</li>
									<li><i class="icon-control-play"></i>icon-control-play</li>
									<li><i class="icon-control-pause"></i>icon-control-pause</li>
									<li><i class="icon-control-forward"></i>icon-control-forward</li>
									<li><i class="icon-control-end"></i>icon-control-end</li>
									<li><i class="icon-volume-1"></i>icon-volume-1</li>
									<li><i class="icon-volume-2"></i>icon-volume-2</li>
									<li><i class="icon-volume-off"></i>icon-volume-off</li>
									<li><i class="icon-calendar"></i>icon-calendar</li>
									<li><i class="icon-bulb"></i>icon-bulb</li>
									<li><i class="icon-chart"></i>icon-chart</li>
									<li><i class="icon-ban"></i>icon-ban</li>
									<li><i class="icon-bubble"></i>icon-bubble</li>
									<li><i class="icon-camrecorder"></i>icon-camrecorder</li>
									<li><i class="icon-camera"></i>icon-camera</li>
									<li><i class="icon-cloud-download"></i>icon-cloud-download</li>
									<li><i class="icon-cloud-upload"></i>icon-cloud-upload</li>
									<li><i class="icon-envelope"></i>icon-envelope</li>
									<li><i class="icon-eye"></i>icon-eye</li>
									<li><i class="icon-flag"></i>icon-flag</li>
									<li><i class="icon-heart"></i>icon-heart</li>
									<li><i class="icon-info"></i>icon-info</li>
									<li><i class="icon-key"></i>icon-key</li>
									<li><i class="icon-link"></i>icon-link</li>
									<li><i class="icon-lock"></i>icon-lock</li>
									<li><i class="icon-lock-open"></i>icon-lock-open</li>
									<li><i class="icon-magnifier"></i>icon-magnifier</li>
									<li><i class="icon-magnifier-add"></i>icon-magnifier-add</li>
									<li><i class="icon-magnifier-remove"></i>icon-magnifier-remove</li>
									<li><i class="icon-paper-clip"></i>icon-paper-clip</li>
									<li><i class="icon-paper-plane"></i>icon-paper-plane</li>
									<li><i class="icon-power"></i>icon-power</li>
									<li><i class="icon-refresh"></i>icon-refresh</li>
									<li><i class="icon-reload"></i>icon-reload</li>
									<li><i class="icon-settings"></i>icon-settings</li>
									<li><i class="icon-star"></i>icon-star</li>
									<li><i class="icon-symbol-female"></i>icon-symbol-female</li>
									<li><i class="icon-symbol-male"></i>icon-symbol-male</li>
									<li><i class="icon-target"></i>icon-target</li>
									<li><i class="icon-credit-card"></i>icon-credit-card</li>
									<li><i class="icon-paypal"></i>icon-paypal</li>
									<li><i class="icon-social-tumblr"></i>icon-social-tumblr</li>
									<li><i class="icon-social-twitter"></i>icon-social-twitter</li>
									<li><i class="icon-social-facebook"></i>icon-social-facebook</li>
									<li><i class="icon-social-instagram"></i>icon-social-instagram</li>
									<li><i class="icon-social-linkedin"></i>icon-social-linkedin</li>
									<li><i class="icon-social-pinterest"></i>icon-social-pinterest</li>
									<li><i class="icon-social-github"></i>icon-social-github</li>
									<li><i class="icon-social-google"></i>icon-social-google</li>
									<li><i class="icon-social-reddit"></i>icon-social-reddit</li>
									<li><i class="icon-social-skype"></i>icon-social-skype</li>
									<li><i class="icon-social-dribbble"></i>icon-social-dribbble</li>
									<li><i class="icon-social-behance"></i>icon-social-behance</li>
									<li><i class="icon-social-foursquare"></i>icon-social-foursquare</li>
									<li><i class="icon-social-soundcloud"></i>icon-social-soundcloud</li>
									<li><i class="icon-social-spotify"></i>icon-social-spotify</li>
									<li><i class="icon-social-stumbleupon"></i>icon-social-stumbleupon</li>
									<li><i class="icon-social-youtube"></i>icon-social-youtube</li>
									<li><i class="icon-social-dropbox"></i>icon-social-dropbox</li>
									<li><i class="icon-social-vkontakte"></i>icon-social-vkontakte</li>
									<li><i class="icon-social-steam"></i>icon-social-steam</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'component/js.php';?>
</body>
</html>