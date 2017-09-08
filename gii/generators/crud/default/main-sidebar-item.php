<?php
use yii\helpers\Inflector;
?>
[
    'label' => <?= $generator->generateString(Inflector::camel2words(Inflector::id2camel($generator->getControllerID()))) ?>,
        'icon' => '<?php echo $generator->iconClass?>',
        'url' => ['/<?php echo $generator->getControllerID() ?>'],
        'active' => $selectedSidebar == '<?php echo $generator->getControllerID() ?>',
    ],
    //!!!replace here new menu