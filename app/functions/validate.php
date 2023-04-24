<?php

function validate(array $fields) {
    
    $request = request();

    $validate = [];

    foreach ($fields as $field => $type){
        
        switch ($type) {
            
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_SPECIAL_CHARS);
            break;
            
            case 'n':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            break;
            
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
            break;

            default:
            break;
        }
    }

    return (object) $validate;
}



function isEmpty() {

	$request = request();

	$empty = false;
	foreach ($request as $key => $value) {
		if (empty($request[$key])) {
			$empty = true;
		}
	}

	return $empty;
}