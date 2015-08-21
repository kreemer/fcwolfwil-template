<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg. To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */


/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_no($module, &$params, &$attribs)
{
    $headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
    $headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));
	if ($module->content)
	{
        if ($module->showtitle)
        {
            echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
        }

		echo $module->content;
	}
}

function modChrome_well($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', ''));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="' . htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass . '">';

        if ($params->get('access-edit') ||  $params->get('show_print_icon') || $params->get('show_email_icon')) {  ?>
            <ul class="actions">
                <?php if (!$this->print) : ?>
                    <?php if ($params->get('show_print_icon')) : ?>
                        <li class="print-icon">
                            <?php echo JHtml::_('icon.print_popup', $this->item, $params, array(), true); ?>
                        </li>
                    <?php endif; ?>

                    <?php if ($params->get('show_email_icon')) : ?>
                        <li class="email-icon">
                            <?php echo JHtml::_('icon.email', $this->item, $params, array(), true); ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->user->authorise('core.edit', 'com_content.article.'.$this->item->id)) : ?>
                        <li class="edit-icon">
                            <?php echo JHtml::_('icon.edit', $this->item, $params, array(), true); ?>
                        </li>
                    <?php endif; ?>
                <?php else : ?>
                    <li>
                        <?php echo JHtml::_('icon.print_screen', $this->item, $params, array(), true); ?>
                    </li>
                <?php endif; ?>
            </ul>
        <? }

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
		echo '</' . $moduleTag . '>';
	}
}

/*            <?php
                <ul class="actions">
                    <?php if (!$this->print) : ?>
                        <?php if ($params->get('show_print_icon')) : ?>
                            <li class="print-icon">
                                <?php echo JHtml::_('icon.print_popup', $this->item, $params, array(), true); ?>
                            </li>
                        <?php endif; ?>

                        <?php if ($params->get('show_email_icon')) : ?>
                            <li class="email-icon">
                                <?php echo JHtml::_('icon.email', $this->item, $params, array(), true); ?>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->user->authorise('core.edit', 'com_content.article.'.$this->item->id)) : ?>
                            <li class="edit-icon">
                                <?php echo JHtml::_('icon.edit', $this->item, $params, array(), true); ?>
                            </li>
                        <?php endif; ?>
                    <?php else : ?>
                        <li>
                            <?php echo JHtml::_('icon.print_screen', $this->item, $params, array(), true); ?>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>