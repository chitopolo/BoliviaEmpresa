<?php 
// app/View/Helper/FormEnumHelper.php
// derived by MD
// from http://bakery.cakephp.org/articles/christian.kilb/2010/09/09/form-helper-enum-fields-to-select-boxes

App::uses('FormHelper','View/Helper'); // added by MD
class FormEnumHelper extends FormHelper
{
    function input($fieldName, $options = array()) {
        $this->setEntity($fieldName);
        
        $modelKey = $this->model();
        $fieldKey = $this->field();

        if (!isset($this->fieldset[$modelKey])) {
            $this->_introspectModel($modelKey,'fields',$fieldKey); // 'fields' argument added by MD
        }

        if ((!isset($options['type']) || $options['type'] == 'select') && !isset($options['options'])) {
            if(isset($this->fieldset[$modelKey]['fields'][$fieldKey]))
            {
                $type = $this->fieldset[$modelKey]['fields'][$fieldKey]['type'];
                if(substr($type, 0, 4) == 'enum')
                {
                    $arr = explode('\'', $type);
                    $enumValues = array();
                    foreach($arr as $value)
                    {
                        if($value != 'enum(' && $value != ',' && $value != ')')
                            $options['options'][$value] = __($value, true);
                    }
                }
            }
        }
        // Diagnostics below added by MD
        //Debugger::dump($fieldName);
        //Debugger::dump($options);
        return parent::input($fieldName, $options);
    }
}
?> 