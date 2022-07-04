<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="rew-footer-carousel">
	<? foreach($arResult["ITEMS"] as $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); 
		if (isset($arItem["PREVIEW_PICTURE"]["ID"])) :
			$arFileTmp = CFile::ResizeImageGet(
				$arItem["PREVIEW_PICTURE"]["ID"],
				array(
					"width" => 39,
					"height" => 39
				),
				BX_RESIZE_IMAGE_PROPORTIONAL
			);
			$src = $arFileTmp['src'];
		else :
			$src = SITE_TEMPLATE_PATH . "/img/no_photo_left_block.jpg";
		endif; ?>
		<div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
							<img src="<?= $src; ?>" alt="<?= $arItem["NAME"]; ?>">
						</div>
						<div class="name-block"><a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem["NAME"]; ?></a></div>
						<div class="pos-block">
							<?= $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>,
							"<?= $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>"
						</div>
					</div>
					<div class="text-block"><?= mb_substr($arItem["PREVIEW_TEXT"], 0, 149) . "..."; ?></div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</div>