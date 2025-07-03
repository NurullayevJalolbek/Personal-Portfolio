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

    'accepted' => ':attribute майдонини қабул қилиш керак.',
    'accepted_if' => ':other :value бўлганида :attribute майдони қабул қилиниши керак.',
    'active_url' => ':attribute майдони ёқимли URL бўлиши керак.',
    'after' => ':attribute майдони :date санасидан кейин бўлиши керак.',
    'after_or_equal' => ':attribute майдони :date санасидан кейин ёки унга тенг бўлиши керак.',
    'alpha' => ':attribute майдони фақат ҳарфлардан иборат бўлиши керак.',
    'alpha_dash' => ':attribute майдони фақат ҳарфлар, рақамлар, чизиқлар ва пастки чизиқлардан иборат бўлиши керак.',
    'alpha_num' => ':attribute майдони фақат ҳарфлар ва рақамлардан иборат бўлиши керак.',
    'array' => ':attribute майдони массив бўлиши керак.',
    'ascii' => ':attribute майдони фақат битта байтли ҳарфлар, рақамлар ва белгилардан иборат бўлиши керак.',
    'before' => ':attribute майдони :date санасидан олдин бўлиши керак.',
    'before_or_equal' => ':attribute майдони :date санасидан олдин ёки унга тенг бўлиши керак.',
    'between' => [
        'array' => ':attribute майдонида :min ва :max орасида элементлар бўлиши керак.',
        'file' => ':attribute майдони :min ва :max килобайт орасида бўлиши керак.',
        'numeric' => ':attribute майдони :min ва :max орасида бўлиши керак.',
        'string' => ':attribute майдони :min ва :max белгилар орасида бўлиши керак.',
    ],
    'boolean' => ':attribute майдони фақат true ёки false бўлиши керак.',
    'can' => ':attribute майдони рухсат этилмаган қийматни ўз ичига олади.',
    'confirmed' => ':attribute майдони тасдиқлаш билан мос келмайди.',
    'contains' => ':attribute майдонида талаб қилинган қиймат йўқ.',
    'current_password' => 'Парол нотўғри.',
    'date' => ':attribute майдони ҳақиқий сана бўлиши керак.',
    'date_equals' => ':attribute майдони :date санасига тенг бўлиши керак.',
    'date_format' => ':attribute майдони :format форматига мос бўлиши керак.',
    'decimal' => ':attribute майдони :decimal онлик хонасларига эга бўлиши керак.',
    'declined' => ':attribute майдони рад этилиши керак.',
    'declined_if' => ':other :value бўлганида :attribute майдони рад этилиши керак.',
    'different' => ':attribute ва :other майдонлари ҳар хил бўлиши керак.',
    'digits' => ':attribute майдони :digits рақам бўлиши керак.',
    'digits_between' => ':attribute майдони :min ва :max рақамлар орасида бўлиши керак.',
    'dimensions' => ':attribute майдони нотўғри тасвир ўлчамларига эга.',
    'distinct' => ':attribute майдонида дубликат қиймат мавжуд.',
    'doesnt_end_with' => ':attribute майдони қуйидагилар билан тугамаслиги керак: :values.',
    'doesnt_start_with' => ':attribute майдони қуйидагилар билан бошланмаслиги керак: :values.',
    'email' => ':attribute майдони ёқимли электрон почта манзили бўлиши керак.',
    'ends_with' => ':attribute майдони қуйидагилар билан тугамоқда: :values.',
    'enum' => 'Танланган :attribute нотўғри.',
    'exists' => 'Танланган :attribute нотўғри.',
    'extensions' => ':attribute майдони қуйидаги кенгайтмаларга эга бўлиши керак: :values.',
    'file' => ':attribute майдони файл бўлиши керак.',
    'filled' => ':attribute майдони қийматга эга бўлиши керак.',
    'gt' => [
        'array' => ':attribute майдонида :value дан кўп элементлар бўлиши керак.',
        'file' => ':attribute майдони :value килобайтдан катта бўлиши керак.',
        'numeric' => ':attribute майдони :value дан катта бўлиши керак.',
        'string' => ':attribute майдони :value белгидан катта бўлиши керак.',
    ],
    'gte' => [
        'array' => ':attribute майдонида :value ёки ундан кўп элементлар бўлиши керак.',
        'file' => ':attribute майдони :value килобайт ёки ундан катта бўлиши керак.',
        'numeric' => ':attribute майдони :value ёки ундан катта бўлиши керак.',
        'string' => ':attribute майдони :value белгисидан ёки ундан катта бўлиши керак.',
    ],
    'hex_color' => ':attribute майдони ёқимли ўн олтилик ранг бўлиши керак.',
    'image' => ':attribute майдони тасвир бўлиши керак.',
    'in' => 'Танланган :attribute нотўғри.',
    'in_array' => ':attribute майдони :other майдонида мавжуд бўлиши керак.',
    'integer' => ':attribute майдони бутун сон бўлиши керак.',
    'ip' => ':attribute майдони ёқимли IP манзил бўлиши керак.',
    'ipv4' => ':attribute майдони ёқимли IPv4 манзил бўлиши керак.',
    'ipv6' => ':attribute майдони ёқимли IPv6 манзил бўлиши керак.',
    'json' => ':attribute майдони ёқимли JSON сатри бўлиши керак.',
    'list' => ':attribute майдони рўйхат бўлиши керак.',
    'lowercase' => ':attribute майдони кичик ҳарфлардан иборат бўлиши керак.',
    'lt' => [
        'array' => ':attribute майдонида :value дан кам элементлар бўлишии керак.',
        'file' => ':attribute майдони :value килобайтдан кичик бўлишии керак.',
        'numeric' => ':attribute майдони :value дан кичик бўлишии керак.',
        'string' => ':attribute майдони :value белгидан кичик бўлишии керак.',
    ],
    'lte' => [
        'array' => ':attribute майдонида :value дан кўп бўлмаган элементлар бўлишии керак.',
        'file' => ':attribute майдони :value килобайт ёки ундан кичик бўлишии керак.',
        'numeric' => ':attribute майдони :value ёки ундан кичик бўлишии керак.',
        'string' => ':attribute майдони :value белгиси ёки ундан кичик бўлишии керак.',
    ],
    'mac_address' => ':attribute майдони ёроқли MAC манзил бўлишии керак.',
    'max' => [
        'array' => ':attribute майдонида :max дан кўп элементлар бўлмаслиги керак.',
        'file' => ':attribute майдони :max килобайтдан катта бўлмаслиги керак.',
        'numeric' => ':attribute майдони :max дан катта бўлмаслиги керак.',
        'string' => ':attribute майдони :max белгидан катта бўлмаслиги керак.',
    ],
    'max_digits' => ':attribute майдони :max рақамлардан кўп бўлмаслиги керак.',
    'mimes' => ':attribute майдони қуйидаги турдаги файл бўлишии керак: :values.',
    'mimetypes' => ':attribute майдони қуйидаги турдаги файл бўлишии керак: :values.',
    'min' => [
        'array' => ':attribute майдонида камида :min элементлар бўлишии керак.',
        'file' => ':attribute майдони камида :min килобайт бўлишии керак.',
        'numeric' => ':attribute майдони камида :min бўлишии керак.',
        'string' => ':attribute майдони камида :min белгидан иборат бўлишии керак.',
    ],
    'min_digits' => ':attribute майдони камида :min рақамга эга бўлишии керак.',
    'missing' => ':attribute майдони йўқ бўлишии керак.',
    'missing_if' => ':attribute майдони :other :value бўлганда бўш бўлишии керак.',
    'missing_unless' => ':attribute майдони :other :value бўлмаса бўш бўлишии керак.',
    'missing_with' => ':attribute майдони :values мавжуд бўлганда бўш бўлишии керак.',
    'missing_with_all' => ':attribute майдони :values мавжуд бўлганда бўш бўлишии керак.',
    'multiple_of' => ':attribute майдони :value нинг кўпайтмаси бўлишии керак.',
    'not_in' => 'Танланган :attribute нотўғри.',
    'not_regex' => ':attribute майдони формати нотўғри.',
    'numeric' => ':attribute майдон фақат сон бўлишии керак.',
    'password' => [
        'letters' => ':attribute майдонида камида бирта ҳарф бўлишии керак.',
        'mixed' => ':attribute майдонида камида бирта катта ва кичик ҳарф бўлишии керак.',
        'numbers' => ':attribute майдонида камида бирта рақам бўлишии керак.',
        'symbols' => ':attribute майдонида камида бирта махсус белгиси бўлишии керак.',
        'uncompromised' => 'Танланган :attribute бузилган маълумотларда топилган. Илтимос, бошқа :attribute танланг.',
    ],
    'present' => ':attribute майдони мавжуд бўлишии керак.',
    'present_if' => ':attribute майдони :other :value бўлганда мавжуд бўлишии керак.',
    'present_unless' => ':attribute майдони :other :value бўлмаса мавжуд бўлишии керак.',
    'present_with' => ':attribute майдони :values мавжуд бўлганда мавжуд бўлишии керак.',
    'present_with_all' => ':attribute майдони :values мавжуд бўлганда мавжуд бўлишии керак.',
    'prohibited' => ':attribute майдони тақиқланган.',
    'prohibited_if' => ':other :value бўлса, :attribute майдони тақиқланган.',
    'prohibited_unless' => ':other :values ичида бўлмаса, :attribute майдони тақиқланган.',
    'prohibits' => ':attribute майдони :other мавжуд бўлишини йўл қўймайди.',
    'regex' => ':attribute майдони формати нотўғри.',
    'required' => ':attribute майдони мажбурий.',
    'required_array_keys' => ':attribute майдонида қуйидаги қийматлар бўлишии керак: :values.',
    'required_if' => ':other :value бўлса, :attribute майдони мажбурий.',
    'required_if_accepted' => ':attribute майдони :other қабул қилинганда мажбурий.',
    'required_if_declined' => ':attribute майдони :other рад этилганда мажбурий.',
    'required_unless' => ':other :values ичида бўлмаса, :attribute майдони мажбурий.',
    'required_with' => ':values мавжуд бўлса, :attribute майдони мажбурий.',
    'required_with_all' => ':values мавжуд бўлса, :attribute майдони мажбурий.',
    'required_without' => ':values мавжуд бўлмаса, :attribute майдони мажбурий.',
    'required_without_all' => ':values мавжуд бўлмаса, :attribute майдони мажбурий.',
    'same' => ':attribute ва :other мос келиши керак.',
    'size' => [
        'array' => ':attribute майдони :size элементдан иборат бўлишии керак.',
        'file' => ':attribute майдони ҳажми :size килобайт бўлишии керак.',
        'numeric' => ':attribute қиймати :size бўлишии керак.',
        'string' => ':attribute узунлиги :size та белгидан иборат бўлишии керак.',
    ],
    'starts_with' => ':attribute майдони қуйидагилардан бири билан бошланиши керак: :values.',
    'string' => ':attribute майдони матн бўлишии керак.',
    'timezone' => ':attribute майдони тўғри вақт зоналари бўлишии керак.',
    'unique' => ':attribute аллақачон олинган.',
    'uploaded' => ':attribute юклашда хатолик юз берди.',
    'uppercase' => ':attribute майдони фақат катта ҳарфлардан иборат бўлишии керак.',
    'url' => ':attribute тўғри URL бўлишии керак.',
    'ulid' => ':attribute тўғри ULID бўлишии керак.',
    'uuid' => ':attribute тўғри UUID бўлишии керак.',


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
            'legal' => 'Юридик шахс',
            'physical' => 'Жисмоний шахс',
        ],
        'contacts.*.type' => [
            'phone' => 'Телефон рақам',
            'telegram' => 'Telegram',
            'telegram_bot' => 'Telegram бот',
            'email' => 'Э-почта',
            'web_site' => 'Веб сайт',
            'facebook' => 'Facebook',
            'you_tube' => 'YouTube',
        ],
        'status' => [
            'active' => 'Фаол',
            'inactive' => 'Фаол эмас',
        ],
        'group' => [
            'admin' => 'Админ',
            'user' => 'Фойдаланувчи',
        ],
        'table_name' => [
            'services' => 'Хизматлар',
            'general-datas' => 'Умумий маълумотлар',
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
        'name' => 'Номи',
        'name.uz' => 'Номи(uz)',
        'name.oz' => 'Номи(oz)',
        'name.ru' => 'Номи(ru)',
        'name.en' => 'Номи(en)',
        'title' => 'Сарлавҳа',
        'title.uz' => 'Сарлавҳа(uz)',
        'title.oz' => 'Сарлавҳа(oz)',
        'title.ru' => 'Сарлавҳа(ru)',
        'title.en' => 'Сарлавҳа(en)',
        'code' => 'Код',
        'status' => 'Ҳолати',
        'logo' => 'Логотип',
        'image' => 'Расм',
        'type_id' => 'Тури',
        'table_name' => 'Жадвал номи',
        'file' => 'Файл',
        'url' => 'Урл',
        'password' => 'Парол',
        'password_confirmation' => 'Парол тасдиғи',
        'email' => 'Э-почта',
        'firstname' => 'Исми',
        'surname' => 'Фамилияси',
        'patronymic' => 'Шарифи',
        'fullname' => 'Ф.И.О.',
        'phone' => 'Телефон рақами',
        'username' => 'Фойдаланувчи номи',
        'position' => 'Позиция',
        'type' => 'Тури',
        'site_url' => 'Сайт URL',
        'pinfl' => 'ЖШШШИР',
        'entity' => 'Шахс',
        'slider_image' => 'Слайдер расми',
        'parent_id' => 'Бош хизмат',
        'uri' => 'URL',
        'method' => 'Метод',
        'service or data' => 'Хизмат ёки маълумот',
        'role_id' => 'Роли',
        'group' => 'Гуруҳ',
        'inn' => 'ИНН',
        'application content' => 'Мурожаат мазмуни',
        'application title' => 'Мурожаат мавзуси',
        'Org name' => 'Ташкилот номи',
        'contacts' => 'Алоқалар',
        'contacts.*' => [
            'name_uz' => 'Номи(uz)',
            'name_oz' => 'Номи(oz)',
            'name_ru' => 'Номи(ru)',
            'name_en' => 'Номи(en)',
            'type' => 'Тури',
            'value' => 'Қиймати',
        ],
        'device_token' => 'Қурилма токени',
        'old_device_token' => 'Эски қурилма токени',
        'privacy_policy.uz' => 'Фойдаланиш шартлари(uz)',
        'privacy_policy.oz' => 'Фойдаланиш шартлари(oz)',
        'privacy_policy.ru' => 'Фойдаланиш шартлари(ru)',
        'privacy_policy.en' => 'Фойдаланиш шартлари(en)',
        'public_offer.uz' => 'Оммавий офферта(uz)',
        'public_offer.oz' => 'Оммавий офферта(oz)',
        'public_offer.ru' => 'Оммавий офферта(ru)',
        'public_offer.en' => 'Оммавий офферта(en)',
        'search' => 'Қидириш',
        'response_url' => 'Жавоб URLи',
        'body' => 'Хабар матни',
        'region_id' => 'Ҳудуд',
        'region' => 'Ҳудуд',
        'id' => 'ID',
        'period' => 'Давр',
        'num' => 'Сони',
        'org_id' => 'Корхона',
        'org_inn' => 'Корхона ИННи',
        'text' => 'Эълон матни',
        'sudcontrol_id' => 'Суд бошқарувчиси',
        'tin' => 'ИНН',
        'verify_code' => 'Тасдиқлаш коди',
        'field' => 'Устун',
        'meeting_type.id' => 'Йиғилиш тури',
        'meeting_type.name' => 'Йиғилиш тури номи',
        'meeting_date' => 'Сана',
        'meeting_time' => 'Йиғилиш вақти',
        'meeting_form.id' => 'Йиғилиш ўтказиш шакли',
        'meeting_form.name' => 'Йиғилиш ўтказиш шакли номи',
        'meeting_place' => 'Йиғилиш ўтказиш жойи',
        'phone_number' => 'Давлат вакилининг телефони',
        'agendas' => 'Кун тартибидаги масалалар',
        'agendas.*.task.id' => 'Кун тартибидаги масала',
        'agendas.*.task.name' => 'Кун тартибидаги масала номи',
        'agendas.*.offer' => 'Масала бўйича таклиф',
    ],

];
