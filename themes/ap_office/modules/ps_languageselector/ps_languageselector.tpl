{**
 *  PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright  PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="language-selector-wrapper dropdown js-dropdown popup-over ">
  <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="{l s='Language' d='Shop.Theme.Global'}">
    <span class="hidden-xs-down">{l s='Language:' d='Shop.Theme.Global'}</span>
    {foreach from=$languages item=language}
      {if $language.id_lang == $current_language.id_lang}
        <span class="text-uppercase">
          <span><img src="{$urls.img_lang_url|escape:'html':'UTF-8'}{$language.id_lang|escape:'html':'UTF-8'}.jpg" alt="{$language.iso_code|escape:'html':'UTF-8'}" width="16" height="11" /></span>
        </span>
      {/if}
    {/foreach}
    <i class="material-icons">&#xE5C5;</i>
  </a>
  <ul class="dropdown-menu popup-content link language-selector">
      {foreach from=$languages item=language}
        <li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
          <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item" data-iso-code="{$language.iso_code}">
	  <img src="{$urls.img_lang_url|escape:'html':'UTF-8'}{$language.id_lang|escape:'html':'UTF-8'}.jpg" alt="{$language.iso_code|escape:'html':'UTF-8'}" width="16" height="11" />
	  {$language.name_simple}
	  </a>
        </li>
      {/foreach}
  </ul>
</div>

