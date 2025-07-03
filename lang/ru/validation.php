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

    'accepted' => 'Вы должны принять :attribute поле.',
    'accepted_if' => 'Поле :attribute должно быть принято, если :other является :value.',
    'active_url' => 'Поле :attribute не является допустимым URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой не раньше :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'ascii' => 'Поле :attribute должно содержать только однобайтовые алфавитно-цифровые символы и знаки.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой не позже :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => 'Размер файла в поле :attribute должен быть между :min и :max килобайтами.',
        'string' => 'Длина текста в поле :attribute должна быть между :min и :max символами.',
        'array' => 'Поле :attribute должно содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'can' => 'Поле :attribute содержит несанкционированное значение.',
    'confirmed' => 'Поле :attribute подтверждение не совпадает.',
    'contains' => 'Поле :attribute не содержит необходимое значение.',
    'current_password' => 'Неверный пароль.',
    'date' => 'Поле :attribute не является допустимой датой.',
    'date_equals' => 'Поле :attribute должно быть датой, равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'decimal' => 'Поле :attribute должно содержать :decimal десятичных знаков.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, если :other равно :value.',
    'different' => 'Поле :attribute и :other должны быть разными.',
    'digits' => 'Поле :attribute должно быть :digits цифрами.',
    'digits_between' => 'Поле :attribute должно быть между :min и :max цифрами.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'doesnt_end_with' => 'Поле :attribute не должно заканчиваться одним из следующих: :values.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться с одного из следующих: :values.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих: :values.',
    'enum' => 'Выбранное значение для поля :attribute недопустимо.',
    'exists' => 'Выбранное значение для поля :attribute недопустимо.',
    'extensions' => 'Поле :attribute должно иметь одно из следующих расширений: :values.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть больше :value символов.',
        'array' => 'Поле :attribute должно содержать больше :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше или равен :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть больше или равна :value символам.',
        'array' => 'Поле :attribute должно содержать :value элементов или больше.',
    ],
    'hex_color' => 'Поле :attribute должно быть допустимым шестнадцатеричным цветом.',
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для поля :attribute недопустимо.',
    'in_array' => 'Поле :attribute должно существовать в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть допустимым IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть допустимым IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть допустимым IPv6-адресом.',
    'json' => 'Поле :attribute должно быть допустимой строкой JSON.',
    'list' => 'Поле :attribute должно быть списком.',
    'lowercase' => 'Поле :attribute должно быть в нижнем регистре.',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть меньше :value символов.',
        'array' => 'Поле :attribute должно содержать меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше или равен :value килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть меньше или равна :value символам.',
        'array' => 'Поле :attribute не должно содержать больше :value элементов.',
    ],
    'mac_address' => 'Поле :attribute должно быть действительным MAC-адресом.',
    'max' => [
        'numeric' => 'Поле :attribute не может быть больше чем :max.',
        'file' => 'Размер файла в поле :attribute не может быть больше :max килобайт.',
        'string' => 'Длина текста в поле :attribute не может быть больше :max символов.',
        'array' => 'Поле :attribute не может содержать больше чем :max элементов.',
    ],
    'max_digits' => 'Поле :attribute не должно содержать более :max цифр.',
    'mimes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не меньше :min.',
        'file' => 'Размер файла в поле :attribute должен быть не меньше :min килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть не меньше :min символов.',
        'array' => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'min_digits' => 'Поле :attribute должно содержать как минимум :min цифр.',
    'missing' => 'Поле :attribute должно отсутствовать.',
    'missing_if' => 'Поле :attribute должно отсутствовать, когда :other равно :value.',
    'missing_unless' => 'Поле :attribute должно отсутствовать, если только :other не равно :value.',
    'missing_with' => 'Поле :attribute должно отсутствовать, когда :values присутствует.',
    'missing_with_all' => 'Поле :attribute должно отсутствовать, когда :values присутствуют.',
    'multiple_of' => 'Поле :attribute должно быть кратно :value.',
    'not_in' => 'Выбранное значение для поля :attribute недопустимо.',
    'not_regex' => 'Формат поля :attribute неверен.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
        'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну строчную букву.',
        'numbers' => 'Поле :attribute должно содержать хотя бы одно число.',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ.',
        'uncompromised' => 'Указанное :attribute появилось в утечке данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present' => 'Поле :attribute должно присутствовать.',
    'present_if' => 'Поле :attribute должно быть присутствовать, когда :other равно :value.',
    'present_unless' => 'Поле :attribute должно быть присутствовать, если только :other не равно :value.',
    'present_with' => 'Поле :attribute должно быть присутствовать, когда :values присутствуют.',
    'present_with_all' => 'Поле :attribute должно быть присутствовать, когда все :values присутствуют.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не содержится в :values.',
    'prohibits' => 'Поле :attribute запрещает :other быть присутствующим.',
    'regex' => 'Формат поля :attribute неверен.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_if_accepted' => 'Поле :attribute обязательно, когда :other принято.',
    'required_if_declined' => 'Поле :attribute обязательно, когда :other отклонено.',
    'required_unless' => 'Поле :attribute обязательно для заполнения, если :other не равно :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда :values присутствует.',
    'required_with_all' => 'Поле :attribute обязательно для заполнения, когда :values присутствуют.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values отсутствует.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из полей :values отсутствует.',
    'same' => 'Поле :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file' => 'Размер файла в поле :attribute должен быть :size килобайт.',
        'string' => 'Длина текста в поле :attribute должна быть :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть допустимой временной зоной.',
    'unique' => 'Значение поля :attribute уже занято.',
    'uploaded' => 'Поле :attribute не удалось загрузить.',
    'uppercase' => 'Поле :attribute должно быть в верхнем регистре.',
    'url' => 'Поле :attribute должно быть допустимым URL.',
    'ulid' => 'Поле :attribute должно быть действительным ULID.',
    'uuid' => 'Поле :attribute должно быть допустимым UUID.',


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
    'values' => [
        'entity' => [
            'legal' => 'Юридическое лицо',
            'physical' => 'Физическое лицо',
        ],
        'contacts.*.type' => [
            'phone' => 'Номер телефона',
            'telegram' => 'Telegram',
            'telegram_bot' => 'Telegram бот',
            'email' => 'Эл. почта',
            'web_site' => 'Веб-сайт',
            'facebook' => 'Facebook',
            'you_tube' => 'YouTube',
        ],
        'status' => [
            'active' => 'Активный',
            'inactive' => 'Неактивный',
        ],
        'group' => [
            'admin' => 'Админ',
            'user' => 'Пользователь',
        ],
        'table_name' => [
            'services' => 'Услуги',
            'general-datas' => 'Общие данные',
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

    'attributes' => [
        'name' => 'имя',
        'name.uz' => 'имя(uz)',
        'name.oz' => 'имя(oz)',
        'name.ru' => 'имя(ru)',
        'name.en' => 'имя(en)',
        'title' => 'заголовок',
        'title.uz' => 'заголовок(uz)',
        'title.oz' => 'заголовок(oz)',
        'title.ru' => 'заголовок(ru)',
        'title.en' => 'заголовок(en)',
        'code' => 'код',
        'status' => 'статус',
        'logo' => 'логотип',
        'image' => 'изображение',
        'type_id' => 'тип',
        'table_name' => 'имя таблицы',
        'file' => 'файл',
        'url' => 'URL',
        'password' => 'пароль',
        'password_confirmation' => 'подтверждение пароля',
        'email' => 'Эл. почта',
        'firstname' => 'имя',
        'surname' => 'фамилия',
        'patronymic' => 'отчество',
        'fullname' => 'Ф.И.О.',
        'phone' => 'номер телефона',
        'username' => 'имя пользователя',
        'position' => 'должность',
        'type' => 'тип',
        'site_url' => 'URL сайта',
        'pinfl' => 'ПИНФЛ',
        'entity' => 'личность',
        'slider_image' => 'изображение слайдера',
        'parent_id' => 'родительская услуга',
        'uri' => 'URL',
        'method' => 'метод',
        'service or data' => 'услуга или данные',
        'role_id' => 'роль',
        'group' => 'группа',
        'inn' => 'ИНН',
        'application content' => 'содержание обращения',
        'application title' => 'тема обращения',
        'Org name' => 'имя организации',
        'contacts' => 'контакты',
        'contacts.*' => [
            'name_uz' => 'имя(uz)',
            'name_oz' => 'имя(oz)',
            'name_ru' => 'имя(ru)',
            'name_en' => 'имя(en)',
            'type' => 'тип',
            'value' => 'значение',
        ],
        'device_token' => 'токен устройства',
        'old_device_token' => 'старый токен устройства',
        'privacy_policy.uz' => 'политика конфиденциальности(uz)',
        'privacy_policy.oz' => 'политика конфиденциальности(oz)',
        'privacy_policy.ru' => 'политика конфиденциальности(ru)',
        'privacy_policy.en' => 'политика конфиденциальности(en)',
        'public_offer.uz' => 'публичная оферта(uz)',
        'public_offer.oz' => 'публичная оферта(oz)',
        'public_offer.ru' => 'публичная оферта(ru)',
        'public_offer.en' => 'публичная оферта(en)',
        'search' => 'поиск',
        'response_url' => 'URL ответа',
        'body' => 'текст сообщения',
        'region_id' => 'регион',
        'region' => 'регион',
        'id' => 'ID',
        'period' => 'период',
        'num' => 'количество',
        'org_id' => 'организация',
        'org_inn' => 'ИНН организации',
        'text' => 'текст объявления',
        'sudcontrol_id' => 'судебный контроль',
        'tin' => 'ИНН',
        'verify_code' => 'код подтверждения',
        'field' => 'поле',
        'meeting_type.id' => 'тип собрания',
        'meeting_type.name' => 'имя типа собрания',
        'meeting_date' => 'дата',
        'meeting_time' => 'время собрания',
        'meeting_form.id' => 'форма проведения собрания',
        'meeting_form.name' => 'имя формы проведения собрания',
        'meeting_place' => 'место проведения собрания',
        'phone_number' => 'телефон государственного представителя',
        'agendas' => 'вопросы повестки дня',
        'agendas.*.task.id' => 'вопрос повестки дня',
        'agendas.*.task.name' => 'имя вопроса повестки дня',
        'agendas.*.offer' => 'предложение по вопросу',

    ],

];
