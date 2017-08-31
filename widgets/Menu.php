<?php

namespace sheillendra\adminlte\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu {

    public $activateParents = true;
    public $submenuTemplate = "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n";

    /**
     * 
     * @param type $items
     * @return type
     */
    protected function renderItems($items) {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            Html::addCssClass($options, $class);

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            $lines[] = Html::tag($tag, $menu, $options);
        }

        return implode("\n", $lines);
    }

    /**
     * 
     * @param type $item
     * @return type
     */
    protected function renderItem($item) {
        if (isset($item['icon'])) {
            $item['label'] = strtr('<i class="{icon}"></i> <span>{label}</span>', [
                '{icon}' => $item['icon'],
                '{label}' => $item['label']
            ]);
        }

        if (isset($item['smallLabel'])) {
            $item['label'] .= strtr('<span class="pull-right-container"><small class="label pull-right bg-{smallLabelColor}">{smallLabel}</small></span>', [
                '{smallLabel}' => $item['smallLabel'],
                '{smallLabelColor}' => $item['smallLabelColor']
            ]);
        }
        
        if (isset($item['items'])) {
            $item['label'] .= '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';
        }

        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
            ]);
        }

        $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

        return strtr($template, [
            '{label}' => $item['label'],
        ]);
    }

}
