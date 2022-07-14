<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true); ?>

<? if ($arResult["FILE"] <> '' && strlen(file_get_contents($arResult["FILE"])) > 0) : ?>
	<div class="side-block side-anonse">
		<div class="title-block">
			<span class="i i-title01"></span>Полезная информация!
		</div>
		<div class="item">
			<? include($arResult["FILE"]); ?>
		</div>
	</div>
<? endif; ?>