<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?= $arResult["DETAIL_TEXT"]; ?>
		</div>
		<div class="review-autor">
			<?= $arResult["NAME"]; ?>,
			<?= $arResult["ACTIVE_FROM"]; ?>,
			<?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>,
			<?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<? if ($arResult["DETAIL_PICTURE"]) : ?>
			<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"]; ?>">
		<? else : ?>
			<img src="<?= SITE_TEMPLATE_PATH; ?>/img/rew/no_photo.jpg">
		<? endif; ?>
	</div>
</div>
<div class="exam-review-doc">
    <? if ($arResult["DISPLAY_PROPERTIES"]["FILE"]) : 
         if (count($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["ID"]) == 1) : ?>
            <p><?= GetMessage("TITLE_FILE"); ?></p>
            <div class="exam-review-item-doc">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
                <a href="<?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"]; ?>">
                    <?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["ORIGINAL_NAME"]; ?>
                </a>
            </div>
        <? else : ?>
            <p><?= GetMessage("TITLE_FILES"); ?></p>
            <? foreach ($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"] as $document) : ?>
                <div class="exam-review-item-doc">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
                    <a href="<?= $document["SRC"]; ?>"><?= $document["ORIGINAL_NAME"]; ?></a>
                </div>
            <? endforeach; ?>
        <? endif; ?>    
    <? endif; ?>
</div>
<hr>