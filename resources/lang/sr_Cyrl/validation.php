<?php

return [
    'accepted'             => 'Ово поље мора бити прихваћено.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Ово није валидан УРЛ.',
    'after'                => 'Ово мора бити датум после :date.',
    'after_or_equal'       => 'Ово поље мора да буде :date или каснији датум.',
    'alpha'                => 'Ово поље може садржати само слова.',
    'alpha_dash'           => 'Ово поље може садржати само слова, бројеве и повлаке.',
    'alpha_num'            => 'Ово поље може садржати само слова и бројеве.',
    'array'                => 'Ово поље мора садржати неких низ ставки.',
    'attached'             => 'Ово поље је већ причвршћено.',
    'before'               => 'Ово мора бити датум пре :date.',
    'before_or_equal'      => 'Ово мора бити :date или ранији датум.',
    'between'              => [
        'array'   => 'Низ мора имати најмање :min, а највише :max ставки.',
        'file'    => 'Фајл мора да буде између :min - :max килобајта.',
        'numeric' => 'Вредност мора бити између :min - :max.',
        'string'  => 'Реченица мора има имати најмање :min а највише :max слова.',
    ],
    'boolean'              => 'Ово поље мора бити тачно или нетачно.',
    'confirmed'            => 'Потврда се не поклапа.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Није одговарајући датум.',
    'date_equals'          => 'Мора да буде датум: :date.',
    'date_format'          => 'Ово не одговора формату: :format.',
    'different'            => 'Ова вредност и :other морају бити различите.',
    'digits'               => 'Ово мора садржати :digits цифри.',
    'digits_between'       => 'Број цифара мора бити између :min и :max.',
    'dimensions'           => 'Слика је изван дозвољених димензија.',
    'distinct'             => 'Ово поље има дуплирану вредност.',
    'email'                => 'Емаил мора да буде валидан.',
    'ends_with'            => 'Поље мора да се заврши са нечим од следећег: :values.',
    'exists'               => 'Селектована вредност није валидна.',
    'file'                 => 'Датотека мора да буде фајл.',
    'filled'               => 'Поље је обавезно.',
    'gt'                   => [
        'array'   => 'Низ мора садржати више од :value ставки.',
        'file'    => 'Величина фајла мора да буде већа од :value килобајта.',
        'numeric' => 'Вредност мора да буде већа од :value.',
        'string'  => 'Реченица мора садрати више од :value слова.',
    ],
    'gte'                  => [
        'array'   => 'Низ мора садржати више од :value ставки или једнако.',
        'file'    => 'Величина фајла мора да буде већа или једнака од :value килобајта.',
        'numeric' => 'Вредност мора да буде већа или једнака од :value.',
        'string'  => 'Реченица мора садрати више или једнако броју :value слова.',
    ],
    'image'                => 'Ово мора бити слика.',
    'in'                   => 'Изабрана вредност није валидна.',
    'in_array'             => 'Ова вредност не постоји у :other.',
    'integer'              => 'Ово мора бити број.',
    'ip'                   => 'Ово мора бити валидна ИП адреса.',
    'ipv4'                 => 'Ово мора да буде важећа ИПв4 адреса.',
    'ipv6'                 => 'Ово мора да буде важећа ИПв6 адреса.',
    'json'                 => 'Ово мора да буде важећа ЈСОН формат.',
    'lt'                   => [
        'array'   => 'Низ мора садржати мање од :value ставки.',
        'file'    => 'Величина фајла мора да буде мања од :value килобајта.',
        'numeric' => 'Вредност мора бити мања од :value.',
        'string'  => 'Реченица мора садрати мање од :value слова.',
    ],
    'lte'                  => [
        'array'   => 'Низ мора садржати једнако као :value или мање ставки.',
        'file'    => 'Величина фајла мора да буде мања или једнака од :value килобајта.',
        'numeric' => 'Вредност мора бити мања или једнака од :value.',
        'string'  => 'Реченица мора садрати мање од једнак :value слова.',
    ],
    'max'                  => [
        'array'   => 'Низ не сме имати више од :max ставки.',
        'file'    => 'Величина фајла не сме бити већа од :max килобајта.',
        'numeric' => 'Вредност не сме бити већа од :max.',
        'string'  => 'Реченица ме сме садржати више од :max слова.',
    ],
    'mimes'                => 'Ово мора бити фајл типа: :values.',
    'mimetypes'            => 'Ово мора бити фајл типа: :values.',
    'min'                  => [
        'array'   => 'Низ мора да има најмање :min ставки.',
        'file'    => 'Величина фајла мора да буде најмање :min килобајта.',
        'numeric' => 'Вредност мора бити најмање :min.',
        'string'  => 'Реченица мора да садржи најмање :min слова.',
    ],
    'multiple_of'          => 'Ова вредност мора бити вишеструка од :value',
    'not_in'               => 'Селектована вредност није валидна.',
    'not_regex'            => 'Формат није валидан.',
    'numeric'              => 'Ово мора бити број.',
    'password'             => 'Погрешна лозинка.',
    'present'              => 'Ово поље мора да буде присутно.',
    'prohibited'           => 'Ово поље је забрањено.',
    'prohibited_if'        => 'Ово поље је забрањено када је :other једнако :value.',
    'prohibited_unless'    => 'Ово поље је забрањено ако само :other није у :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Формат није валидан.',
    'relatable'            => 'Ово поље можда није повезано са датим ресурсом.',
    'required'             => 'Ово поље је обавезно.',
    'required_if'          => 'Ово поље је обавезно кадакада поље :other садржи :value.',
    'required_unless'      => 'Ово поље је обавезно, осим ако је :other у :values.',
    'required_with'        => 'Ово поље је обавезно када :values постоји.',
    'required_with_all'    => 'Ово поље је обавезно када :values постоји.',
    'required_without'     => 'Ово поље је обавезно када :values не постоји.',
    'required_without_all' => 'Ово поље је обавезно када ниједно од :values не постоји.',
    'same'                 => 'Вредност овог поља се мора поклопити са једним од следећег: :other.',
    'size'                 => [
        'array'   => 'Низ мора да има :size ставки.',
        'file'    => 'Величина фајла мора бити :size килобајта.',
        'numeric' => 'Вредност мора бити :size.',
        'string'  => 'Реченица мора да садржи :size слова.',
    ],
    'starts_with'          => 'Ово поље мора почети са једним од понуђених: :values.',
    'string'               => 'Мора бити реченица.',
    'timezone'             => 'Мора бити валидна временска зона.',
    'unique'               => 'Унета вредност већ постоји.',
    'uploaded'             => 'Грешка при отпремању.',
    'url'                  => 'Формат урла није валидан.',
    'uuid'                 => 'Ово мора бити важећи УУИД.',
    'attributes'           => [
        'address'               => 'адреса',
        'age'                   => 'године',
        'body'                  => 'тело поруке',
        'city'                  => 'град',
        'country'               => 'држава',
        'date'                  => 'датум',
        'day'                   => 'дан',
        'description'           => 'опис',
        'email'                 => 'емаил',
        'excerpt'               => 'извод',
        'first_name'            => 'име',
        'gender'                => 'пол',
        'hour'                  => 'сат',
        'last_name'             => 'презиме',
        'message'               => 'порука',
        'minute'                => 'минут',
        'mobile'                => 'мобилни',
        'month'                 => 'месец',
        'name'                  => 'име',
        'password'              => 'лозинка',
        'password_confirmation' => 'понови лозинку',
        'phone'                 => 'телефон',
        'second'                => 'секунда',
        'sex'                   => 'пол',
        'subject'               => 'наслов',
        'time'                  => 'време',
        'title'                 => 'наслов',
        'username'              => 'корисничко име',
        'year'                  => 'година',
    ],
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
