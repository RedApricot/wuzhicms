<?php exit();?>
	private function textarea($config, $value) {
		extract($config,EXTR_SKIP);
        extract($setting,EXTR_SKIP);
        if(!$value) $value = $defaultvalue;
    return '<textarea name="form['.$field.']" class="form-control" cols="60" rows="3">'.$value.'</textarea>';
	}
