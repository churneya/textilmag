<?php

if (is_file($_SERVER["DOCUMENT_ROOT"] . "/local/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.php")) {
    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/local/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.php");
} else {
    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/myellinks.subelement/admin/myellinks.subelement.element.edit.php");
}