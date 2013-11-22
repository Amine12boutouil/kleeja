<?php if(!defined('IN_KLEEJA')) { exit; } ?>

<!-- uploading template -->
<div id="content" class="border_radius">

<!-- Erros -->
<?php if($ERRORS):?>
<dl id="system-message">
	<dd class="error">
		<ul>
		<?php foreach($ERRORS as $error):?>
			<li><?=$error?></li>
		<?php endforeach;?>
		</ul>
	</dd>
</dl>
<?php endif;?>


<!-- line top -->
<div class="line"></div>
<!-- @end-line -->

<!-- Results -->
<?php foreach($RESULTS as $result):?>

	<?php if(isset($result['thumb'])):?>
	
		<div class="thumb_img"><a onclick="window.open(this.href,'_blank');return false;" href="{b_url_link}"><img src="{b_img_link}" alt="" /></a></div>
	
		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_title}</td>
				<td class="all_box_link"><textarea rows="2" cols="40" class="up_input" tabindex="1" onclick="this.select();">[url={b_url_link}][img]<?=$result['thumb']?>[/img][/url]</textarea></td>
			</tr>
		</table>
	<?php endif?>

	<?php if(isset($result['image'])):?>

		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_title}</td>
				<td class="all_box_link"><textarea rows="1" cols="40" class="up_input" tabindex="2" onclick="this.select();">{b_url_link}</textarea></td>
			</tr>
		</table>

		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_bbc_title}</td>
				<td class="all_box_link"><textarea rows="2" cols="40" class="up_input" tabindex="3" onclick="this.select();">[url={siteurl}][img]{b_url_link}[/img][/url]</textarea></td>
			</tr>
		</table>

		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">HTML</td>
				<td class="all_box_link"><textarea rows="4" cols="40" class="up_input" tabindex="4" onclick="this.select();">&lt;a href=&quot;{siteurl}&quot; target=&quot;_blank&quot; title=&quot;{siteurl}&quot;&gt;&lt;img src=&quot;{b_url_link}&quot; border=&quot;0&quot; alt=&quot;{b_url_link}&quot; /&gt;&lt;/a&gt;</textarea></td>
			</tr>
		</table>
	<?php endif?>

	<?php if(isset($result['file'])):?>

		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_title}</td>
				<td class="all_box_link"><textarea rows="2" cols="40" class="up_input" tabindex="5" onclick="this.select();">{b_url_link}</textarea></td>
			</tr>
		</table>
	
		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_bbc_title}</td>
				<td class="all_box_link"><textarea rows="2" cols="40" class="up_input" tabindex="6" onclick="this.select();">[url={b_url_link}]{b_url_link}[/url]</textarea></td>
			</tr>
		</table>
	<?php endif?>

	<?php if(isset($result['delete_code'])):?>

		<table border="0" width="100%" cellspacing="0" cellpadding="0" class="up_box_input">
			<tr>
				<td class="btitle">{b_title}</td>
				<td class="all_box_link"><textarea rows="2" cols="40" class="up_input" tabindex="7" onclick="this.select();">{b_code_link}</textarea></td>
			</tr>
		</table>

	<?php endif?>

<?php endforeach?>

</div>
<!-- @end-uploading-template -->