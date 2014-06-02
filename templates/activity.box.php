<?php
/* Copyright (c) 2014, Joas Schilling nickvergessen@owncloud.com
 * This file is licensed under the Affero General Public License version 3
 * or later. See the COPYING-README file. */

/** @var $l OC_L10N */
/** @var $_ array */
?>

<div class="box">
	<div class="messagecontainer">
		<div class="activity-icon <?php p($_['typeIcon']) ?>"></div>

		<div class="activitysubject">
			<?php if ($_['event']['link']): ?><a href="<?php p($_['event']['link']) ?>"><?php endif ?>
			<?php print_unescaped($_['event']['subject_markup']) ?>
			<?php if ($_['event']['link']): ?></a><?php endif; ?>
		</div>

		<span class="activitytime tooltip" title="<?php p($_['formattedDate']) ?>">
			<?php p($_['formattedTimestamp']) ?>
		</span>

		<?php if ($_['event']['message_long']): ?>
			<div class="activitymessage">
				<?php p($_['event']['message_short']) ?>
			</div>
		<?php endif ?>

		<?php if (!empty($_['previewImageLink'])): ?>
			<?php if ($_['previewLink']): ?><a href="<?php p($_['previewLink']) ?>"><?php endif ?>
			<img class="preview<?php if (!empty($_['previewLinkIsDir'])): ?> preview-dir-icon<?php endif ?>" src="<?php p($_['previewImageLink']) ?>" alt="<?php p($_['event']['message_long']) ?>"/>
			<?php if ($_['previewLink']): ?></a><?php endif; ?>
		<?php endif ?>

	</div>
</div>
