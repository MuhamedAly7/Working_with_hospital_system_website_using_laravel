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

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other :value.',
    'active_url' => 'يجب أن يكون الحقل :attribute رابط URL صالحاً.',
    'after' => 'يجب أن يكون الحقل :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً بعد أو مساوياً لـ :date.',
    'alpha' => 'يجب أن يحتوي الحقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي الحقل :attribute على أحرف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي الحقل :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون الحقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي الحقل :attribute على رموز وأحرف أبجدية رقمية من بايت واحد فقط.',
    'before' => 'يجب أن يكون الحقل :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً قبل أو مساوياً لـ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على عدد عناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute إما true أو false.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد الحقل :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون الحقل :attribute تاريخاً صالحاً.',
    'date_equals' => 'يجب أن يكون الحقل :attribute تاريخاً مساوياً لـ :date.',
    'date_format' => 'يجب أن يتطابق الحقل :attribute مع الشكل :format.',
    'decimal' => 'يجب أن يحتوي الحقل :attribute على :decimal منازل عشرية.',
    'declined' => 'يجب رفض الحقل :attribute.',
    'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other :value.',
    'different' => 'يجب أن يكون الحقل :attribute مختلفاً عن :other.',
    'digits' => 'يجب أن يحتوي الحقل :attribute على :digits أرقام.',
    'digits_between' => 'يجب أن يكون الحقل :attribute بين :min و :max أرقام.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن لا ينتهي الحقل :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن لا يبدأ الحقل :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون الحقل :attribute بريداً إلكترونياً صالحاً.',
    'ends_with' => 'يجب أن ينتهي الحقل :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة للحقل :attribute غير صالحة.',
    'exists' => 'القيمة المحددة للحقل :attribute غير صالحة.',
    'extensions' => 'يجب أن يكون الحقل :attribute ملفاً من نوع: :values.',
    'file' => 'يجب أن يكون الحقل :attribute ملفاً.',
    'filled' => 'يجب أن يحتوي الحقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute أكبر من :value.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :value عنصر أو أكثر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من أو مساوياً لـ :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من أو مساوياً لـ :value.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute أكبر من أو مساوياً لـ :value.',
    ],
    'hex_color' => 'يجب أن يكون الحقل :attribute لوناً سداسياً صالحاً.',
    'image' => 'يجب أن يكون الحقل :attribute صورة.',
    'in' => 'القيمة المحددة للحقل :attribute غير صالحة.',
    'in_array' => 'يجب أن يكون الحقل :attribute موجوداً في :other.',
    'integer' => 'يجب أن يكون الحقل :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون الحقل :attribute عنوان IP صالحاً.',
    'ipv4' => 'يجب أن يكون الحقل :attribute عنوان IPv4 صالحاً.',
    'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 صالحاً.',
    'json' => 'يجب أن يكون الحقل :attribute نص JSON صالحاً.',
    'lowercase' => 'يجب أن يكون الحقل :attribute بأحرف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أقل من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute أقل من :value.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من أو مساوياً لـ :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من أو مساوياً لـ :value.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute أقل من أو مساوياً لـ :value.',
    ],
    'mac_address' => 'يجب أن يكون الحقل :attribute عنوان MAC صالحاً.',
    'max' => [
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'numeric' => 'يجب أن لا تتجاوز قيمة الحقل :attribute :max.',
        'string' => 'يجب أن لا يتجاوز عدد الأحرف في الحقل :attribute :max.',
    ],
    'max_digits' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max رقم.',
    'mimes' => 'يجب أن يكون الحقل :attribute ملفاً من نوع: :values.',
    'mimetypes' => 'يجب أن يكون الحقل :attribute ملفاً من نوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل :min عنصر.',
        'file' => 'يجب أن لا يقل حجم الملف :attribute عن :min كيلوبايت.',
        'numeric' => 'يجب أن لا تقل قيمة الحقل :attribute عن :min.',
        'string' => 'يجب أن لا يقل عدد الأحرف في الحقل :attribute عن :min.',
    ],
    'min_digits' => 'يجب أن يحتوي الحقل :attribute على الأقل :min رقم.',
    'missing' => 'يجب أن يكون الحقل :attribute مفقوداً.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقوداً عندما يكون :other :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقوداً ما لم يكن :other :value.',
    'missing_with' => 'يجب أن يكون الحقل :attribute مفقوداً عند وجود :values.',
    'missing_with_all' => 'يجب أن يكون الحقل :attribute مفقوداً عند وجود :values.',
    'multiple_of' => 'يجب أن تكون قيمة الحقل :attribute مضاعفاً لـ :value.',
    'not_in' => 'القيمة المحددة للحقل :attribute غير صالحة.',
    'not_regex' => 'شكل الحقل :attribute غير صالح.',
    'numeric' => 'يجب أن يكون الحقل :attribute رقماً.',
    'password' => [
        'letters' => 'يجب أن يحتوي الحقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي الحقل :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'يجب أن يحتوي الحقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي الحقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'الحقل :attribute المختار ظهر في تسريب بيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present' => 'يجب أن يكون الحقل :attribute موجوداً.',
    'present_if' => 'يجب أن يكون الحقل :attribute موجوداً عندما يكون :other :value.',
    'present_unless' => 'يجب أن يكون الحقل :attribute موجوداً ما لم يكن :other :value.',
    'present_with' => 'يجب أن يكون الحقل :attribute موجوداً عند وجود :values.',
    'present_with_all' => 'يجب أن يكون الحقل :attribute موجوداً عند وجود :values.',
    'prohibited' => 'الحقل :attribute محظور.',
    'prohibited_if' => 'الحقل :attribute محظور عندما يكون :other :value.',
    'prohibited_unless' => 'الحقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits' => 'الحقل :attribute يحظر وجود الحقل :other.',
    'regex' => 'شكل الحقل :attribute غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي الحقل :attribute على إدخالات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يتم قبول :other.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'الحقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'الحقل :attribute مطلوب عند وجود :values.',
    'required_without' => 'الحقل :attribute مطلوب عند عدم وجود :values.',
    'required_without_all' => 'الحقل :attribute مطلوب عند عدم وجود أي من :values.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute :size.',
        'string' => 'يجب أن يكون عدد الأحرف في الحقل :attribute :size.',
    ],
    'starts_with' => 'يجب أن يبدأ الحقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصاً.',
    'timezone' => 'يجب أن يكون الحقل :attribute نطاقاً زمنياً صالحاً.',
    'unique' => 'تم أخذ الحقل :attribute بالفعل.',
    'uploaded' => 'فشل في تحميل الحقل :attribute.',
    'uppercase' => 'يجب أن يكون الحقل :attribute بأحرف كبيرة.',
    'url' => 'يجب أن يكون الحقل :attribute رابط URL صالحاً.',
    'ulid' => 'يجب أن يكون الحقل :attribute ULID صالحاً.',
    'uuid' => 'يجب أن يكون الحقل :attribute UUID صالحاً.',

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
            'rule-name' => 'رسالة مخصصة',
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
