<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<div class="social-box">
    <? if ($arParams["FB_LINK"]) : ?>
        <a target="_blank" href="<?=$arParams["FB_LINK"]?>" title="" class="social-box__link">
        <span
    class="social-box__link-icon svg-s_face svg-s_face-size icon-face"></span><span
                class="social-box__link-icon-bg svg-s_face_black svg-s_face_black-size icon-face"></span>
        </a>
    <? endif; ?>
    <? if ($arParams["VK_LINK"]) : ?>
        <a target="_blank"
           href="<?=$arParams["VK_LINK"]?>" title="" class="social-box__link"><span
                class="social-box__link-icon svg-s_vk svg-s_vk-size icon-vk"></span><span
                class="social-box__link-icon-bg svg-s_vk_black svg-s_vk_black-size icon-vk"></span></a>
    <? endif; ?>
    <? if ($arParams["INSTAGRAM_LINK"]) : ?>
        <a target="_blank"  href="<?=$arParams["INSTAGRAM_LINK"]?>"
           title=""
           class="social-box__link"><span
                class="social-box__link-icon svg-s_insta svg-s_insta-size icon-insta"></span><span
                class="social-box__link-icon-bg svg-s_insta_black svg-s_insta_black-size icon-insta"></span></a>
    <? endif; ?>
    <? if ($arParams["YOUTUBE_LINK"]) : ?>
        <a target="_blank"
           href="<?=$arParams["YOUTUBE_LINK"]?>" title="" class="social-box__link"><span
                class="social-box__link-icon svg-tube svg-tube-size icon-tube"></span><span
                class="social-box__link-icon-bg svg-tube_black svg-tube_black-size icon-tube"></span></a>
    <? endif; ?>
</div>