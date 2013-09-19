<?php

Form::macro('formField',  function($name, $value='', $label, $class='', $required = false) {

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::text($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label))
            . '</div>'
          . '</div>';
    
    return $output;
});
Form::macro('emailField', function($name, $value='', $label, $class='', $required = false) {

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::email($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label))
            . '</div>'
          . '</div>';
    
    return $output;
});
Form::macro('radioField', function($name, $label, $value, $class='', $required = false) {
    $output = '<div class="form-group">'
            . Form::label('married', $label['field'],array('class'=>'col-md-3 control-label'))
            . ' <div class="col-md-9">'
                . ' <div class="radio-inline " . $class>'
                  . ' <label>'
                    . ' <input type="radio" name="' . $name . '" id="' . $name . '1" value="'. $value['one'] .'" checked>'
                    . $label['one']
                  . ' </label>'
                . ' </div>'
                . ' <div class="radio-inline">'
                  . ' <label>'
                    . ' <input type="radio" name="' . $name . '" id="' . $name . '0" value="'. $value['zero'] .'">'
                    . $label['zero']
                  . ' </label>'
                . ' </div>'
            . ' </div>'
          . ' </div>';
    
    return $output;
});


?>
