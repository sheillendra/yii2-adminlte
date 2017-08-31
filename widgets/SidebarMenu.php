<?php

namespace sheillendra\adminlte\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class SidebarMenu extends \yii\widgets\Menu {

    public $activateParents = true;
    public $submenuTemplate = "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n";
    public $defaultIcon = 'fa fa-circle-o';

    /**
     * 
     * @param type $item
     * @return type
     */
    protected function renderItem($item) {
        if (!$item['isHeader']) {
            $item['label'] = strtr('<i class="{icon} {iconColor}"></i> <span>{label}</span>', [
                '{icon}' => $item['icon'],
                '{label}' => $item['label'],
                '{iconColor}' => $item['iconColor'],
            ]);

            if (isset($item['smallLabel'])) {
                $item['label'] .= strtr('<span class="pull-right-container"><small class="label pull-right bg-{smallLabelColor}">{smallLabel}</small></span>', [
                    '{smallLabel}' => $item['smallLabel'],
                    '{smallLabelColor}' => $item['smallLabelColor']
                ]);
            }

            if ($item['items']) {
                $item['label'] .= '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';
            }

            if (isset($item['url'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

                return strtr($template, [
                    '{url}' => Html::encode(Url::to($item['url'])),
                    '{label}' => $item['label'],
                ]);
            }
        }
        $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);
        return strtr($template, [
            '{label}' => $item['label'],
        ]);
    }

    /**
     * Normalizes the [[items]] property to remove invisible items and activate certain items.
     * @param array $items the items to be normalized.
     * @param bool $active whether there is an active child menu item.
     * @return array the normalized menu items
     */
    protected function normalizeItems($items, &$active) {
        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                unset($items[$i]);
                continue;
            }
            if (!isset($item['label'])) {
                $item['label'] = '';
            }

            if (!isset($item['options']) || !isset($item['options']['class']) || strpos('header', $item['options']['class']) === FALSE) {
                $items[$i]['isHeader'] = false;
                if (!isset($item['icon'])) {
                    $items[$i]['icon'] = $this->defaultIcon;
                }

                if (!isset($item['iconColor'])) {
                    $items[$i]['iconColor'] = '';
                }
            } else {
                $items[$i]['isHeader'] = true;
                $items[$i]['active'] = false;
                continue;
            }

            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $items[$i]['label'] = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $hasActiveChild = false;
            if (isset($item['items'])) {
                $items[$i]['items'] = $this->normalizeItems($item['items'], $hasActiveChild);
                if (empty($items[$i]['items']) && $this->hideEmptyItems) {
                    unset($items[$i]['items']);
                    if (!isset($item['url'])) {
                        unset($items[$i]);
                        continue;
                    }
                }
            } else {
                $items[$i]['items'] = null;
            }

            if (!isset($item['active'])) {
                if ($this->activateParents && $hasActiveChild || $this->activateItems && $this->isItemActive($item)) {
                    $active = $items[$i]['active'] = true;
                } else {
                    $items[$i]['active'] = false;
                }
            } elseif ($item['active'] instanceof Closure) {
                $active = $items[$i]['active'] = call_user_func($item['active'], $item, $hasActiveChild, $this->isItemActive($item), $this);
            } elseif ($item['active']) {
                $active = true;
            }

            if (!isset($item['url'])) {
                $items[$i]['url'] = '#';
            }
        }
        return array_values($items);
    }

}
