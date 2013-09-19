<?php

//Register a macro for a button link
Form::macro('inputnumber', function($inputName, $minValue, $maxValue, $label) {

    $output = '<input type="number" name="'. $inputName .'" min="'. $minValue .'" max="'. $maxValue .'" value="' . $label . '" class="form-control">';
    
    return $output;
});

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


Form::macro('city', function($cities, $field_name, $value='', $label, $class='', $required=false)
{
        $output = '<div class="form-group">'
            . Form::label($field_name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-xs-7 col-sm-10 col-md-8">'
            . Form::select($field_name, $cities , NULL, array('class'=>'form-control selectplus city ' . $class, 'data-placeholder'=>$label))
            . '</div>'
            . '<div class="col-xs-5 col-sm-2 col-md-1">'
            . '<div class="glyph add_city" aria-hidden="true" data-icon="&#xe04f;"></div>'
            . '</div>'
                    . '<div class="col-md-9 col-md-offset-3 city-form">'
                        . '<div class="row well well-sm">'
                          . '<div class="col-md-9">' . Form::text('add_city_text', '', array('type'=>'text',  'class'=>'form-control add_city_text', 'placeholder'=>Lang::get('application.new-city'))) . '</div>'
                          . '<div class="col-md-3">'
                            . '<span class="glyph add_city_submit" id="" aria-hidden="true" data-icon="&#xe0e2;"></span>'
                            . '<span class="glyph add_city_cancel" id="" aria-hidden="true" data-icon="&#xe0cf;"></span>'
                          . '</div>'
                        . '</div>'
                    . '</div>'
          . '</div>';

	return $output;
});
Form::macro('country', function($countries, $field_name, $value='', $label, $class='', $required=false)
{
        $output =  '<div class="form-group">'
            . Form::label($field_name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-xs-7 col-sm-10 col-md-8">'
            .	Form::select($field_name, $countries , NULL, array('class'=>'form-control selectplus state ' . $class, 'data-placeholder'=>$label))
            . '</div>'
            . '<div class="col-xs-5 col-sm-2 col-md-1">'
              . '<div class="glyph add_state" aria-hidden="true" data-icon="&#xe04f;"></div>'
            . '</div>'
                    . '<div class="col-md-9 col-md-offset-3 state-form">'
                        . '<div class="row well well-sm">'
                          . '<div class="col-md-9">'
                          	. Form::text('add_state_text', '', array('type'=>'text',  'class'=>'form-control add_state_text', 'placeholder'=>Lang::get('application.new-state')))
                          	. '</div>'
                          . '<div class="col-md-3">'
                            . '<span class="glyph add_state_submit" id="" aria-hidden="true" data-icon="&#xe0e2;"></span>'
                            . '<span class="glyph add_state_cancel" id="" aria-hidden="true" data-icon="&#xe0cf;"></span>'
                          . '</div>'
                        . '</div>'
                    . '</div>'
          . '</div>';

	return $output;
});

Form::macro('nationality', function($nationalities, $field_name,$label, $class='', $required=false)
{
         $output =  '<div class="form-group">'
            . Form::label($field_name, $label,array('class'=>'col-md-3 control-label')) 
            . ' <div class="col-xs-7 col-sm-10 col-md-8">'
            .     Form::select($field_name, $nationalities , NULL, array('class'=>'form-control selectplus nationality ' . $class, 'data-placeholder'=>$label))
            . ' </div>'
            . ' <div class="col-xs-5 col-sm-2 col-md-1">'
              . ' <div class="glyph add_nationality" aria-hidden="true" data-icon="&#xe04f;"></div>'
            . ' </div>'
                    . ' <div class="col-md-9 col-md-offset-3 nationality-form">'
                        . ' <div class="row well well-sm">'
                          . ' <div class="col-md-9">'
                          . Form::text('add_nationality_text', '', array('type'=>'text',  'class'=>'form-control add_nationality_text', 'placeholder'=>Lang::get('application.new-nationality')))
                          . '</div>'
                          . ' <div class="col-md-3">'
                            . ' <span class="glyph add_nationality_submit" id="" aria-hidden="true" data-icon="&#xe0e2;"></span>'
                            . ' <span class="glyph add_nationality_cancel" id="" aria-hidden="true" data-icon="&#xe0cf;"></span>'
                          . ' </div>'
                        . ' </div>'
                    . ' </div>'
          . ' </div>';

	return $output;
});

Form::macro('industry', function($industries, $field_name,$value='',$label, $class='', $required=false)
{
        $output = ' <div class="form-group">'
            . Form::label($field_name, $label, array('class'=>'col-xs-12 col-sm-12 col-md-3 control-label'))
            . ' <div class="col-xs-7 col-sm-10 col-md-8">'
                . Form::select($field_name, $industries , $value, array('class'=>'form-control selectplus concerned_industry', 'data-placeholder'=>$label))
            . ' </div>'
            . ' <div class="col-xs-5 col-sm-2 col-md-1">'
              . ' <div class="glyph add_concerned_industry" aria-hidden="true" data-icon="&#xe04f;"></div>'
            . ' </div>'
                    . ' <div class="col-md-9 col-md-offset-3 concerned-industry-form">'
                        . ' <div class="row well well-sm">'
                          . ' <div class="col-md-9">'
                          . Form::text('add_concerned_industry_text', '', array('type'=>'text',  'class'=>'form-control add_concerned_industry_text', 'placeholder'=>Lang::get('application.new-industry')))
                          . '</div>'
                          . ' <div class="col-md-3">'
                            . ' <span class="glyph add_concerned_industry_submit" id="" aria-hidden="true" data-icon="&#xe0e2;"></span>'
                            . ' <span class="glyph add_concerned_industry_cancel" id="" aria-hidden="true" data-icon="&#xe0cf;"></span>'
                          . ' </div>'
                        . ' </div>'
                    . ' </div>'
          . ' </div>';

	return $output;
});
?>