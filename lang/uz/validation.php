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

    'accepted' => ':attribute maydonini qabul qilish kerak.',
    'accepted_if' => ':other :value bo‘lganda :attribute maydoni qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni yaroqli URL bo‘lishi kerak.',
    'after' => ':attribute maydoni :date sanasidan keyin bo‘lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date sanasidan keyin yoki unga teng bo‘lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflardan iborat bo‘lishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, chiziqlar va pastki chiziqlardan iborat bo‘lishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo‘lishi kerak.',
    'array' => ':attribute maydoni massiv bo‘lishi kerak.',
    'ascii' => ':attribute maydoni faqat bir baytli harflar, raqamlar va belgilardan iborat bo‘lishi kerak.',
    'before' => ':attribute maydoni :date sanasidan oldin bo‘lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date sanasidan oldin yoki unga teng bo‘lishi kerak.',
    'between' => [
        'array' => ':attribute maydonida :min va :max orasida elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni :min va :max kilobayt orasida bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :min va :max orasida bo‘lishi kerak.',
        'string' => ':attribute maydoni :min va :max belgilar orasida bo‘lishi kerak.',
    ],
    'boolean' => ':attribute maydoni faqat true yoki false bo‘lishi kerak.',
    'can' => ':attribute maydoni ruxsat etilmagan qiymatni o‘z ichiga oladi.',
    'confirmed' => ':attribute maydoni tasdiqlash bilan mos kelmaydi.',
    'contains' => ':attribute maydonida talab qilinadigan qiymat yo‘q.',
    'current_password' => 'Parol noto‘g‘ri.',
    'date' => ':attribute maydoni haqiqiy sana bo‘lishi kerak.',
    'date_equals' => ':attribute maydoni :date sanasiga teng bo‘lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos bo‘lishi kerak.',
    'decimal' => ':attribute maydoni :decimal o‘nlik xonalariga ega bo‘lishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':other :value bo‘lganda :attribute maydoni rad etilishi kerak.',
    'different' => ':attribute va :other maydonlari har xil bo‘lishi kerak.',
    'digits' => ':attribute maydoni :digits raqam bo‘lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqamlar orasida bo‘lishi kerak.',
    'dimensions' => ':attribute maydoni noto‘g‘ri tasvir o‘lchamlariga ega.',
    'distinct' => ':attribute maydonida dublikat qiymat mavjud.',
    'doesnt_end_with' => ':attribute maydoni quyidagilar bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilar bilan boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni yaroqli elektron pochta manzili bo‘lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagilar bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute noto‘g‘ri.',
    'exists' => 'Tanlangan :attribute noto‘g‘ri.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalariga ega bo‘lishi kerak: :values.',
    'file' => ':attribute maydoni fayl bo‘lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo‘lishi kerak.',
    'gt' => [
        'array' => ':attribute maydonida :value dan ko‘p elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgidan katta bo‘lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydonida :value yoki undan ko‘p elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobayt yoki undan katta bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value yoki undan katta bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgi yoki undan katta bo‘lishi kerak.',
    ],
    'hex_color' => ':attribute maydoni yaroqli o‘n oltilik rang bo‘lishi kerak.',
    'image' => ':attribute maydoni tasvir bo‘lishi kerak.',
    'in' => 'Tanlangan :attribute noto‘g‘ri.',
    'in_array' => ':attribute maydoni :other maydonida mavjud bo‘lishi kerak.',
    'integer' => ':attribute maydoni butun son bo‘lishi kerak.',
    'ip' => ':attribute maydoni yaroqli IP manzil bo‘lishi kerak.',
    'ipv4' => ':attribute maydoni yaroqli IPv4 manzil bo‘lishi kerak.',
    'ipv6' => ':attribute maydoni yaroqli IPv6 manzil bo‘lishi kerak.',
    'json' => ':attribute maydoni yaroqli JSON satri bo‘lishi kerak.',
    'list' => ':attribute maydoni ro‘yxat bo‘lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflardan iborat bo‘lishi kerak.',
    'lt' => [
        'array' => ':attribute maydonida :value dan kam elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgidan kichik bo‘lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydonida :value dan ko‘p bo‘lmagan elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni :value kilobayt yoki undan kichik bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value yoki undan kichik bo‘lishi kerak.',
        'string' => ':attribute maydoni :value belgi yoki undan kichik bo‘lishi kerak.',
    ],
    'mac_address' => ':attribute maydoni yaroqli MAC manzil bo‘lishi kerak.',
    'max' => [
        'array' => ':attribute maydonida :max dan ko‘p elementlar bo‘lmasligi kerak.',
        'file' => ':attribute maydoni :max kilobaytdan katta bo‘lmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta bo‘lmasligi kerak.',
        'string' => ':attribute maydoni :max belgidan katta bo‘lmasligi kerak.',
    ],
    'max_digits' => ':attribute maydoni :max raqamlardan ko‘p bo‘lmasligi kerak.',
    'mimes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'mimetypes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'min' => [
        'array' => ':attribute maydonida kamida :min elementlar bo‘lishi kerak.',
        'file' => ':attribute maydoni kamida :min kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo‘lishi kerak.',
        'string' => ':attribute maydoni kamida :min belgidan iborat bo‘lishi kerak.',
    ],
    'min_digits' => ':attribute maydoni kamida :min raqamlarga ega bo‘lishi kerak.',
    'missing' => ':attribute maydoni yo‘q bo‘lishi kerak.',
    'missing_if' => ':attribute maydoni :other :value bo‘lganda bo‘sh bo‘lishi kerak.',
    'missing_unless' => ':attribute maydoni :other :value bo‘lmasa bo‘sh bo‘lishi kerak.',
    'missing_with' => ':attribute maydoni :values mavjud bo‘lganda bo‘sh bo‘lishi kerak.',
    'missing_with_all' => ':attribute maydoni :values mavjud bo‘lganda bo‘sh bo‘lishi kerak.',
    'multiple_of' => ':attribute maydoni :value ning ko‘paytmasi bo‘lishi kerak.',
    'not_in' => 'Tanlangan :attribute noto‘g‘ri.',
    'not_regex' => ':attribute maydoni formati noto‘g‘ri.',
    'numeric' => ':attribute maydon faqat son bo‘lishi kerak.',
    'password' => [
        'letters' => ':attribute maydonida kamida bitta harf bo‘lishi kerak.',
        'mixed' => ':attribute maydonida kamida bitta katta va kichik harf bo‘lishi kerak.',
        'numbers' => ':attribute maydonida kamida bitta raqam bo‘lishi kerak.',
        'symbols' => ':attribute maydonida kamida bitta maxsus belgi bo‘lishi kerak.',
        'uncompromised' => 'Tanlangan :attribute buzilgan maʼlumotlarda topilgan. Iltimos, boshqa :attribute tanlang.',
    ],
    'present' => ':attribute maydon mavjud bo‘lishi kerak.',
    'present_if' => ':attribute maydoni :other :value bo‘lganda mavjud bo‘lishi kerak.',
    'present_unless' => ':attribute maydoni :other :value bo‘lmasa mavjud bo‘lishi kerak.',
    'present_with' => ':attribute maydoni :values mavjud bo‘lganda mavjud bo‘lishi kerak.',
    'present_with_all' => ':attribute maydoni :values mavjud bo‘lganda mavjud bo‘lishi kerak.',
    'prohibited' => ':attribute maydon taqiqlangan.',
    'prohibited_if' => ':other :value bo‘lsa, :attribute maydon taqiqlangan.',
    'prohibited_unless' => ':other :values ichida bo‘lmasa, :attribute maydon taqiqlangan.',
    'prohibits' => ':attribute maydon :other mavjud bo‘lishiga yo‘l qo‘ymaydi.',
    'regex' => ':attribute maydon formati noto‘g‘ri.',
    'required' => ':attribute maydoni majburiy.',
    'required_array_keys' => ':attribute maydonida quyidagi qiymatlar bo‘lishi kerak: :values.',
    'required_if' => ':other :value bo‘lsa, :attribute maydon majburiy.',
    'required_if_accepted' => ':attribute maydoni :other qabul qilinganida majburiy.',
    'required_if_declined' => ':attribute maydoni :other rad etilganida majburiy.',
    'required_unless' => ':other :values ichida bo‘lmasa, :attribute maydon majburiy.',
    'required_with' => ':Values mavjud bo‘lsa, :attribute maydon majburiy.',
    'required_with_all' => ':Values mavjud bo‘lsa, :attribute maydon majburiy.',
    'required_without' => ':Values mavjud bo‘lmasa, :attribute maydon majburiy.',
    'required_without_all' => ':Values mavjud bo‘lmasa, :attribute maydon majburiy.',
    'same' => ':attribute va :other mos kelishi kerak.',
    'size' => [
        'array' => ':attribute maydoni :size elementlardan iborat bo‘lishi kerak.',
        'file' => ':attribute maydon hajmi :size kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute qiymati :size bo‘lishi kerak.',
        'string' => ':attribute uzunligi :size ta belgidan iborat bo‘lishi kerak.',
    ],
    'starts_with' => ':attribute maydon quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydon matn bo‘lishi kerak.',
    'timezone' => ':attribute maydon to‘g‘ri vaqt zonasi bo‘lishi kerak.',
    'unique' => ':attribute allaqachon olingan.',
    'uploaded' => ':attribute yuklashda xatolik yuz berdi.',
    'uppercase' => ':attribute maydon faqat katta harflardan iborat bo‘lishi kerak.',
    'url' => ':attribute to‘g‘ri URL bo‘lishi kerak.',
    'ulid' => ':attribute to‘g‘ri ULID bo‘lishi kerak.',
    'uuid' => ':attribute to‘g‘ri UUID bo‘lishi kerak.',

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
            'legal' => 'Yuridik shaxs',
            'physical' => 'Jismoniy shaxs',
        ],
        'contacts.*.type' => [
            'phone' => 'Telefon raqam',
            'telegram' => 'Telegram',
            'telegram_bot' => 'Telegram bot',
            'email' => 'E-pochta',
            'web_site' => 'Web sayt',
            'facebook' => 'Facebook',
            'you_tube' => 'YouTube',
        ],
        'status' => [
            'active' => 'Faol',
            'inactive' => 'Faol emas',
        ],
        'group' => [
            'admin' => 'Admin',
            'user' => 'Foydalanuvchi',
        ],
        'table_name' => [
            'services' => 'Xizmatlar',
            'general-datas' => 'Umumiy ma\'lumotlar',
        ]
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
        'name' => 'Nomi',
        'name.uz' => 'Nomi(uz)',
        'name.oz' => 'Nomi(oz)',
        'name.ru' => 'Nomi(ru)',
        'name.en' => 'Nomi(en)',
        'title' => 'Sarlavha',
        'title.uz' => 'Sarlavha(uz)',
        'title.oz' => 'Sarlavha(oz)',
        'title.ru' => 'Sarlavha(ru)',
        'title.en' => 'Sarlavha(en)',
        'code' => 'Kod',
        'status' => 'Holati',
        'logo' => 'Logotip',
        'image' => 'Rasm',
        'type_id' => 'Turi',
        'table_name' => 'Jadval nomi',
        'file' => 'Fayl',
        'url' => 'URL',
        'password' => 'Parol',
        'password_confirmation' => 'Parol tasdig\'i',
        'email' => 'Email',
        'firstname' => 'Ismi',
        'surname' => 'Familyasi',
        'patronymic' => 'Sharifi',
        'fullname' => 'F.I.O.',
        'phone' => 'Telefon raqami',
        'username' => 'Foydalanuvchi nomi',
        'position' => 'Pozitsiya',
        'type' => 'Turi',
        'site_url' => 'Sayt URL',
        'pinfl' => 'JSHSHIR',
        'entity' => 'Shaxs',
        'slider_image' => 'Slayder rasmi',
        'parent_id' => 'Bosh xizmat',
        'uri' => 'URL',
        'method' => 'Metod',
        'service or data' => 'Xizmat yoki ma\'lumot',
        'role_id' => 'Roli',
        'group' => 'Guruh',
        'inn' => 'INN',
        'application content' => 'Murojaat mazmuni',
        'application title' => 'Murojaat mavzusi',
        'Org name' => 'Tashkilot nomi',
        'contacts' => 'Aloqalar',
        'contacts.*' => [
            'name_uz' => 'Nomi(uz)',
            'name_oz' => 'Nomi(oz)',
            'name_ru' => 'Nomi(ru)',
            'name_en' => 'Nomi(en)',
            'type' => 'Turi',
            'value' => 'Qiymati',
        ],
        'device_token' => 'Qurilma tokeni',
        'old_device_token' => 'Eski qurilma tokeni',
        'privacy_policy.uz' => 'Foydalanish shartlari(uz)',
        'privacy_policy.oz' => 'Foydalanish shartlari(oz)',
        'privacy_policy.ru' => 'Foydalanish shartlari(ru)',
        'privacy_policy.en' => 'Foydalanish shartlari(en)',
        'public_offer.uz' => 'Ommaviy offerta(uz)',
        'public_offer.oz' => 'Ommaviy offerta(oz)',
        'public_offer.ru' => 'Ommaviy offerta(ru)',
        'public_offer.en' => 'Ommaviy offerta(en)',
        'search' => 'Qidirish',
        'response_url' => 'Javob URLi',
        'body' => 'Xabar matni',
        'region_id' => 'Hudud',
        'region' => 'Hudud',
        'id' => 'ID',
        'period' => 'Davr',
        'num' => 'Soni',
        'org_id' => 'Korxona',
        'org_inn' => 'Korxona INNisi',
        'text' => 'E\'lon matni',
        'sudcontrol_id' => 'Sud boshqaruvchisi',
        'tin' => 'INN',
        'verify_code' => 'Tasdiqlash kodi',
        'field' => 'Ustun',
        'meeting_type.id' => 'Yig\'ilish turi',
        'meeting_type.name' => 'Yig\'ilish turi nomi',
        'meeting_date' => 'Sana',
        'meeting_time' => 'Yig\'ilish vaqti',
        'meeting_form.id' => 'Yig\'ilishni o\'tkazish shakli',
        'meeting_form.name' => 'Yig\'ilishni o\'tkazish shakli nomi',
        'meeting_place' => 'Yig\'ilishni o\'tkazish joyi',
        'phone_number' => 'Davlat vakilining telefoni',
        'agendas' => 'Kun tartibidagi masalalar',
        'agendas.*.task.id' => 'Kun tartibidagi masala',
        'agendas.*.task.name' => 'Kun tartibidagi masala nomi',
        'agendas.*.offer' => 'Masala bo\'yicha taklif',
    ],

];
