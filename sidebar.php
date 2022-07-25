<?php
$sidebarImgPath = wp_upload_dir()['baseurl'] . '\/sidebar\/';
$igURL = 'https://www.instagram.com/joemaru_mrtk/';
$twURL = 'https://twitter.com/Joemaru_fishing';
?>

<div id="secondary" class="sidebar-area l-sidebarArea" role="complementary">
	<div class="normal-sidebar widget-area <?= is_home() ? 'p-homeSidebar' : 'p-postSidebar' ?>">

		<div class="p-sidebarProf c-sidebarElement">
			<div class="p-profHeader c-sidebarHeader"><i class="fa-solid fa-address-card"></i>プロフィール</div>
			<div class="p-profContent c-sidebarContent">
				<img class="a-profImg" src="<?= $sidebarImgPath . 'prof.png' ?>">
				<div class="a-profName">きょう</div>
				<div class="a-profDescription">
					ここにプロフィール，説明，経歴を入力します．ここにプロフィール，説明，経歴を入力します．ここにプロフィール，説明，経歴を入力します．ここにプロフィール，説明，経歴を入力します．
				</div>
				<div class="p-profSNS">
					<div class="a-profSNSHeader">SNSはこちらから</div>
					<div class="a-profSNSIcons">
						<a href="<?= $igURL ?>" target="_blank" rel="noopener noreferrer">
							<i class="fa-brands fa-instagram"></i>
						</a>
						<a href="<?= $twURL ?>" target="_blank" rel="noopener noreferrer">
							<i class="fa-brands fa-twitter"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="p-sidebarIg c-sidebarElement">
			<div class="p-igHeader c-sidebarHeader"><i class="fa-solid fa-photo-film"></i>Instagram</div>
			<div class="p-igContent c-sidebarContent">
				<div class="p-igAccount">
					<img class="a-igAccountImg" src="<?= $sidebarImgPath . 'ig-icon.png' ?>">
					<div class="a-igAccountId">@joemaru_mrtk</div>
				</div>
				<?php get_template_part('modules/instagram'); ?>
				<a class="a-igFollowBtn" href="<?= $igURL ?>" rel="noopener noreferrer">
					<i class="fa-brands fa-instagram"></i>
					<span>Follow on Instagram</span>
				</a>
			</div>
		</div>

		<div class="p-sidebarArchive c-sidebarElement">
			<div class="p-archiveHeader c-sidebarHeader"><i class="fa-solid fa-box-archive"></i>アーカイブ</div>
			<div class="p-archiveContent c-sidebarContent">
				<ul class="a-archiveList">
					<?php
					$string = wp_get_archives(
						array(
							'show_post_count' => 1,
							'echo' => 0
						)
					);
					echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
					?>
				</ul>
			</div>
		</div>

		</div><!-- .normal-sidebar -->
	</div><!-- #secondary -->