<?php

namespace jabbon\customselect;

use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Description of CustomSelect
 *
 * @author jabbon
 */
class CustomSelect extends \yii\widgets\InputWidget {

    public $clientOptions = array();
    
    public $data = array();

    /**
     * Runs the widget.
     */
    public function run() {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->data,  $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * Registers the needed JavaScript.
     */
    public function registerClientScript() {

        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);

        $id = $this->options['id'];
        $js = "jQuery(\"#{$id}\").customSelect({$options});";
        $view = $this->getView();
        CustomSelectAsset::register($view);
        $view->registerJs($js);
    }

}
