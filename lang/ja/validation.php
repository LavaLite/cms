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

    'accepted' => ' :attribute は許可されました。',
    'accepted_if' => ' :other が :value の時、 :attribute は許可されます。 ',
    'active_url' => ' :attribute は間違ったURLです。',
    'after' => ' :attribute は :date より後の日程を指定してください。',
    'after_or_equal' => ' :attribute は :date 以降の日程で指定してください。',
    'alpha' => ' :attribute は文字だけ利用できます。',
    'alpha_dash' => ' :attribute は文字、数字、-、_を利用できます。',
    'alpha_num' => ' :attribute は文字と数字のみ利用できます。',
    'array' => ' :attribute は配列のみ利用できます。',
    'before' => ' :attribute は :date より前の日程を指定してください。',
    'before_or_equal' => ' :attribute は :date 以前の日程を指定してください。',
    'between' => [
        'array' => ' :attribute は :min から :max の間で指定してください。',
        'file' => ' :attribute は :min から :max キロバイトの間で指定してください。',
        'numeric' => ' :attribute は :min から :max で指定してください。',
        'string' => ' :attribute は :min から :max 文字の間で指定してください。',
    ],
    'boolean' => ' :attribute はtrueまたはfalseで指定してください。',
    'confirmed' => ' :attribute が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date' => ' :attribute は有効な日付ではありません。',
    'date_equals' => ' :attribute は :date と同じ日付にしてください。',
    'date_format' => ' :attribute は :format 書式と一致しません。',
    'declined' => ' :attribute は拒否されます。',
    'declined_if' => ' :other が :value の時 :attribute は拒否されます。',
    'different' => ' :attribute と:otherは異なる値にしてください。',
    'digits' => ' :attribute は :digits にしてください。',
    'digits_between' => ' :attribute は:min と :max の間の値にしてください。',
    'dimensions' => ' :attribute 画像サイズは無効です。',
    'distinct' => ' :attribute の値が重複しています。',
    'email' => ' :attribute を有効なメールアドレスを指定してください。',
    'ends_with' => ' :attribute の末尾は :values のいずれかで指定してください。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ' :attribute はファイルを指定してください。',
    'filled' => ' :attribute フィールドに値を指定してください。',
    'gt' => [
        'array' => ':attribute は :value 以上で指定してください。',
        'file' => ' :attribute は :value キロバイト以上で指定してください。',
        'numeric' => ' :attribute は :value より大きい値で指定してください。',
        'string' => ' :attribute は :value より大きい値で指定してください。',
    ],    'gte' => [
        'array' => ':attributeは:value個以上のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeは:value以上である必要があります。',
        'string' => ':attributeは:value文字以上である必要があります。',
    ],
    'image' => ':attributeは画像である必要があります。',
    'in' => '選択した:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在しません。',
    'integer' => ':attributeは整数である必要があります。',
    'ip' => ':attributeは有効なIPアドレスである必要があります。',
    'ipv4' => ':attributeは有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attributeは有効なIPv6アドレスである必要があります。',
    'json' => ':attributeは有効なJSON文字列である必要があります。',
    'lt' => [
        'array' => ':attributeは:value個未満のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト未満である必要があります。',
        'numeric' => ':attributeは:value未満である必要があります。',
        'string' => ':attributeは:value文字未満である必要があります。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以上のアイテムを持ってはいけません。',
        'file' => ':attributeは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeは:value以下である必要があります。',
        'string' => ':attributeは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attributeは:max個を超えてはいけません。',
        'file' => ':attributeは:maxキロバイトを超えてはいけません。',
        'numeric' => ':attributeは:maxを超えてはいけません。',
        'string' => ':attributeは:max文字を超えてはいけません。',
    ],
    'mimes' => ':attributeは:typeのファイルである必要があります。',
    'mimetypes' => ':attributeは:typeのファイルである必要があります。',
    'min' => [
        'array' => ':attributeは少なくとも:min個のアイテムを持つ必要があります。',
        'file' => ':attributeは少なくとも:minキロバイトである必要があります。',
        'numeric' => ':attributeは少なくとも:minである必要があります。',
        'string' => ':attributeは少なくとも:min文字である必要があります。',
    ],
    'multiple_of' => ':attributeは:valueの倍数である必要があります。',
    'not_in' => '選択した:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値である必要があります。',
    'password' => 'パスワードが間違っています。',
    'present' => ':attributeフィールドは存在する必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止します。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには以下のエントリが含まれている必要があります: :values。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに含まれていない場合、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesのいずれも存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeと:otherは一致する必要があります。',
    'size' => [
        'array' => ':attributeは:size個のアイテムを含む必要があります。',
        'file' => ':attributeは:sizeキロバイトである必要があります。',
        'numeric' => ':attributeは:sizeである必要があります。',
        'string' => ':attributeは:size文字である必要があります。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeは文字列である必要があります。',
    'timezone' => ':attributeは有効なタイムゾーンである必要があります。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは有効なURLである必要があります。',
    'uuid' => ':attributeは有効なUUIDである必要があります',


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
            'rule-name' => 'カスタムメッセージ',
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
