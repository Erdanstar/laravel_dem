<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой :after даты',
    'after_or_equal' => ':attribute должен быть датой после или равен дате',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до: даты.',
    'before_or_equal' => ':attribute должен быть датой до или равен: дате.',
    'between' => [

    'between' => [
        'numeric' => ':attribute должен быть :between :min и :max.',
        'file' => ':attribute должен быть :between :min и :max килобайт.',
        'string' => ':attribute должен быть :between :min и :max. Символами.',
        'array' => ':attribute должен иметь :between :min и :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => ':attribute не является допустимой датой.',
    'date_format' => ':attribute не соответствует формату: формат.',
    'different' => ':attribute и: другое должно быть другим.',    
    'digits' => ':attribute должен быть: цифры цифры.',    'digits_between' => ':attribute должен быть между: мин. И: макс. Цифрами.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',    
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'Атрибут selected: недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',    
    'gt' => [
        'numeric' => ':attribute должен быть больше, чем :value.',
        'file' => ':attribute должен быть больше, чем :value в килобайтах.',
        'string' => ':attribute должен быть больше чем :value символов.',
        'array' => ':attribute должен иметь больше чем :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен :value.',
        'file' => ':attribute должен быть больше или равен :value в килобайтах.',
        'string' => ':attribute должен быть больше или равен :value символов.',
        'array' => ':attribute должен иметь :value элементов или более.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Атрибут selected: недействителен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным адресом IPv4.',
    'ipv6' => ':attribute должен быть действительным адресом IPv6.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => ':attribute должен быть меньше чем :value.',
        'file' => ':attribute должен быть меньше чем :value в килобайтах.',
        'string' => ':attribute должен быть меньше чем :value символов.',
        'array' => ':attribute должен иметь меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'file' => ':attribute должен быть меньше или равен :value в килобайтах.',
        'string' => ':attribute должен быть меньше или равен :value символов.',
        'array' => ':attribute не должен содержать больше, чем :value элементов.',    
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше, чем :max.',
        'file' => ':attribute не может быть больше, чем :max. Килобайт.',
        'string' => ':attribute не может быть больше, чем :max символов.',
        'array' => ':attribute может содержать не более :max элементов.',    
    ],
    'mimes' => ':attribute должен быть файлом типа :value.',
    'mimetypes' => ':attribute должен быть файлом типа :value.',
    'min' => [
        'numeric' => ':attribute должен быть не менее: мин.',
        'file' => ':attribute должен быть не менее :min Килобайт.',
        'string' => ':attribute должен содержать не менее :min символов.',
        'array' => ':attribute должен содержать не менее :min элементов.',
    ],
    'not_in' => ':attribute недействителен.',
    'not_regex' => 'Формат :attribute неверен.',
    'numeric' => ':attribute должен быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Формат :attribute неверен.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute является обязательным, если :other является :value.',
    'required_unless' => 'Поле :attribute обязательное, если :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда присутствует: values.',
    'required_with_all' => 'Поле :attribute обязательное, если присутствуют :value.',
    'required_without' => 'Поле :attribute обязательное, если :value отсутствуют.',
    'required_without_all' => 'Поле :attribute обязательное, если нет ни одного из :value:',
    'same' => ':attribute: и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен иметь :size килобайт.',
        'string' => ':attribute должен быть :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть допустимой зоной.',
    'unique' => ':attribute уже был занят.',
    'uploaded' => 'Не удалось загрузить :attribute.',

    'url' => 'Формат :attribute неверен.',
    'uuid' => ':attribute должен быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
