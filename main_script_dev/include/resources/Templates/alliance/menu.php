<a type="button" title="<?=T("inGame", "Select this tab as fav");?>" id="tabFavorButton" class="icon contentTitleButton  buttonFramed green withIcon rectangle" 
onclick="Travian.api('favourite-tab', {data: {name: 'alliance',number: '<?=$vars['selectedTabId'];?>'},success: function(data) {if (data.success) { jQuery('.favor').removeClass('favorActive');jQuery('.favor.favorKey<?=$vars['selectedTabId'];?>').addClass('favorActive');}}});return false;" useicon="">
<img src="/img/x.gif" class="&nbsp;" alt="" data-cmp-info="9"></a>

<div class="contentNavi subNavi tabFavorWrapper">
	<button type="button" class="scrollFrom" disabled="disabled"></button>
    <div class="scrollingContainer">
		<div class="content favor <?=$vars['favorTabId']==7 ? "favorActive" : ''; ?> favorKey7" > 
			<a id="<?=$button_id = get_button_id();?>" href="allianz.php?s=7<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>" class="tabItem <?=$vars['selectedTabId'] == 7  ? 'active' : 'normal'; ?>"> 
				<?=T("Alliance", "Overview");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("inGame", "This tab is selected as your fav tab");?>"/> 
			</a> 
		</div>
		<script type="text/javascript">
		if (jQuery('#<?=$button_id;?>')){
			jQuery('#<?=$button_id;?>').click(
				function (event){
					jQuery(window).trigger('tabClicked', [this,{
						"class": "<?=$vars['selectedTabId'] == 7 ? 'active' : 'normal';?>", 
						"title": false, 
						"target": false, 
						"id": "<?=$button_id;?>", 
						"href": "allianz.php?s=7<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>", 
						"onclick": false, 
						"enabled": true, 
						"text": "<?=T("Alliance", "Overview");?>", 
						"dialog": false, 
						"plusDialog": false, 
						"goldclubDialog": false, 
						"containerId": "", 
						"buttonIdentifier": "<?=$button_id;?>"
						}]);
					});
				}
		</script>
		<div class="content favor <?=$vars['favorTabId']==1 ? "favorActive" : ''; ?> favorKey1" > 
			<a id="<?=$button_id = get_button_id();?>" href="allianz.php?s=1<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>" class="tabItem <?=$vars['selectedTabId'] == 1 ? 'active' : 'normal'; ?>" > 
				<?=T("Alliance", "Profile");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("Global", "This tab is set as favourite"); ?>"/> 
			</a> 
		</div>
		<script type="text/javascript">if (jQuery('#<?=$button_id;?>')){jQuery('#<?=$button_id;?>').click(function (event){jQuery(window).trigger('tabClicked', [this,{"class": "<?=$vars['selectedTabId'] == 1 ? 'active' : 'normal';?>", "title": false, "target": false, "id": "<?=$button_id;?>", "href": "allianz.php?s=1<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>", "onclick": false, "enabled": true, "text": "<?=T("Alliance", "Profile");?>", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "<?=$button_id;?>"}]);});}</script> 
		
		<div class="content favor <?=$vars['favorTabId']==3 ? "favorActive" : ''; ?> favorKey3" > 
			<a id="<?=$button_id = get_button_id();?>" href="allianz.php?s=3<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>" class="tabItem <?=$vars['selectedTabId'] == 3 ? 'active' : 'normal'; ?>" > 
				<?=T("Alliance", "Attacks");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("Global", "This tab is set as favourite"); ?>"/> 
			</a> 
		</div>
		<script type="text/javascript">if (jQuery('#<?=$button_id;?>')){jQuery('#<?=$button_id;?>').click(function (event){jQuery(window).trigger('tabClicked', [this,{"class": "<?=$vars['selectedTabId'] == 3 ? 'active' : 'normal';?>", "title": false, "target": false, "id": "<?=$button_id;?>", "href": "allianz.php?s=3<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>", "onclick": false, "enabled": true, "text": "<?=T("Alliance", "Attacks");?>", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "<?=$button_id;?>"}]);});}</script> 
		
		<div class="content favor <?=$vars['favorTabId']==8 ? "favorActive" : ''; ?> favorKey8" > 
			<a id="<?=$button_id = get_button_id();?>" href="allianz.php?s=8<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>" class="tabItem <?=$vars['selectedTabId'] == 8 ? 'active' : 'normal'; ?>" > 
				<?=T("Alliance", "Bonuses");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("Global", "This tab is set as favourite"); ?>"/> 
			</a> 
		</div>
		<script type="text/javascript">if (jQuery('#<?=$button_id;?>')){jQuery('#<?=$button_id;?>').click(function (event){jQuery(window).trigger('tabClicked', [this,{"class": "<?=$vars['selectedTabId'] == 8 ? 'active' : 'normal';?>", "title": false, "target": false, "id": "<?=$button_id;?>", "href": "allianz.php?s=8<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>", "onclick": false, "enabled": true, "text": "<?=T("Alliance", "Bonuses");?>", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "<?=$button_id;?>"}]);});}</script> 
		
		<div class="content favor <?=$vars['favorTabId']==2 ? "favorActive" : ''; ?> favorKey2" > 
			<a id="<?=$button_id = get_button_id();?>" href="<?=$vars['ForumLink'];?>" class="tabItem <?=$vars['selectedTabId'] == 2 ? 'active' : 'normal'; ?>" > 
				<?=T("Alliance", "Forum");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("Global", "This tab is set as favourite"); ?>"/> 
			</a> 
		</div>
		<script type="text/javascript">if (jQuery('#<?=$button_id;?>')){jQuery('#<?=$button_id;?>').click(function (event){jQuery(window).trigger('tabClicked', [this,{"class": "<?=$vars['selectedTabId'] == 2 ? 'active' : 'normal';?>", "title": false, "target": false, "id": "<?=$button_id;?>", "href": "<?=$vars['ForumLink'];?>", "onclick": false, "enabled": true, "text": "<?=T("Alliance", "Forum");?>", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "<?=$button_id;?>"}]);});}</script> 
		
		<div class="content favor <?=$vars['favorTabId']==4 ? "favorActive" : ''; ?> favorKey5" > 
			<a id="<?=$button_id = get_button_id();?>" href="allianz.php?s=5<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>" class="tabItem <?=$vars['selectedTabId'] == 5 ? 'active' : 'normal'; ?>" > 
				<?=T("Alliance", "Options");?>
				<img src="img/x.gif" class="favorIcon" alt="<?=T("Global", "This tab is set as favourite"); ?>"/> 
			</a> 
		</div>
		<script type="text/javascript">if (jQuery('#<?=$button_id;?>')){jQuery('#<?=$button_id;?>').click(function (event){jQuery(window).trigger('tabClicked', [this,{"class": "<?=$vars['selectedTabId'] == 5 ? 'active' : 'normal';?>", "title": false, "target": false, "id": "<?=$button_id;?>", "href": "allianz.php?s=5<?=$vars['isMyAlliance'] ? '' : ('&aid=' . $vars['aid']);?>", "onclick": false, "enabled": true, "text": "<?=T("Alliance", "Options");?>", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "<?=$button_id;?>"}]);});}</script> 
		
	</div>
	<button type="button" class="scrollTo" disabled="disabled"></button>
</div>

<script type="text/javascript" data-cmp-info="6">
	jQuery(function() {
		Travian.Game.TabScrollNavigation();
	});
</script>