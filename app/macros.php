<?php
//To keep the basic syntax of blade forms , i have just created this one macro to wrap all form fields for twitter bootstrap
Form::macro('bootstrap', function($type, $field=null, $label = null,$attributes = array('class'=>"form-control"), $helper = null,$source=null,$selected=null)
{
    $html = '<div class="form-group">';
    if($label){
        $html .= Form::label($field, $label,['class' => 'col-md-4']);
    }

    if($field)
    {
        $html .= '<div class="col-md-8">';
        if($type=='select')
            $html .= Form::$type($field, (is_array($source) ? $source : null),$selected,empty($attributes) ? array('class'=>"form-control") : $attributes);
        elseif($type=='password')
            $html .= Form::$type($field,$attributes);
        else
            $html .= Form::$type($field, $source,$attributes);

        if($helper)
            $html .= '<span class="help-block">'.$helper.'</span>';
        $html .= '</div>';
    }

    $html .= '</div>';

    return $html;
});
