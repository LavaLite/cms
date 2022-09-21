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

    'accepted' => ':attribute を許可しました。',
    'accepted_if' => ':other が :value の時、 :attribute は許可されます。',
    'active_url' => ':attribute は無効なURLです。',
    'after' => ':attribute は :date より後の日付にしてください。',
    'after_or_equal' => ':attribute  :date 以降の日付にしてください。',
    'alpha' => ':attribute には文字のみ利用できます。',
    'alpha_dash' => ':attribute には文字、数字、ダッシュ、アンダースコアのみ利用できます。',
    'alpha_num' => ':attribute には文字、数字のみ利用できます。',
    'array' => ':attribute には配列のみ利用できます。',
    'before' => ':attribute は :date より前の日付にしてください。',
    'before_or_equal' => ':attribute  :date 以前の日付にしてください。',
    'between' => [
        'array' => ':attribute は :min から :max の値にしてください。',
        'file' => ':attribute は :min から :max キロバイトのサイズにしてください。',
        'numeric' => ':attribute は :min から :max の数値にしてください。',
        'string' => ':attribute は :min から :max の文字にしてください。',
    ],
    'boolean' => ':attribute は true か false で指定してください。',
    'confirmed' => ':attribute の内容が一致しません。',
    'current_password' => 'パスワードが違います。',
    'date' => ':attribute は間違った日付です。',
    'date_equals' => ':attribute は :date と同じ日付にしてください。',
    'date_format' => ':attribute は :format と一致しません。',
    'declined' => ':attribute は拒否されました。',
    'declined_if' => ':other が :value の時、 :attribute は拒否されます。',
    'different' => ':attribute と :other は異なります。',
    'digits' => ':attribute は :digits 数にしてください。',
    'digits_between' => ':attribute は :min から :max の数にしてください。',
    'dimensions' => ':attribute の画像サイズは無効です。',
    'distinct' => ':attribute は重複しています。',
    'email' => ':attribute というメールアドレスは無効です。',
    'ends_with' => ':attribute の最後の値は :values のいずれかの値にしてください。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルを指定してください。',
    'filled' => ':attribute には値を指定してください。',
    'gt' => [
        'array' => ':attribute は :value より多いデータを用意してください。.',
        'file' => ':attribute は :value キロバイトより大きくしてください。',
        'numeric' => ':attribute は :value より大きい数値にしてください。',
        'string' => ':attribute は :value 文字より多くしてください。',
    ],
    'gte' => [
        'array' => ':attribute は :value 以上のデータにしてください。',
        'file' => ':attribute は :value キロバイト以上にしてください。',
        'numeric' => ':attribute は :value 以上の数値にしてください。',
        'string' => ':attribute は :value 文字以上にしてください。',
    ],
    'image' => ':attribute は画像データにしてください。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute は :other に存在しません。',
    'integer' => ':attribute は整数にしてください。',
    'ip' => ':attribute は無効なIPアドレスです。',
    'ipv4' => ':attribute は無効な IPv4 アドレスです。',
    'ipv6' => ':attribute は無効な IPv6 アドレスです。',
    'json' => ':attribute は無効な JSON 文字です。',
    'lt' => [
        'array' => ':attribute は :value より少なくしてください。',
        'file' => ':attribute は :value キロバイトより少なくしてください。',
        'numeric' => ':attribute は :value より小さな数にしてください。',
        'string' => ':attribute は :value 文字より少なくしてください。',
    ],
    'lte' => [
        'array' => ':attribute は :value 以下にしてください。',
        'file' => ':attribute は :value キロバイト以下にしてください。',
        'numeric' => ':attribute は :value 以下の数にしてください。',
        'string' => ':attribute は :value 以下の文字数にしてください。',
    ],
    'mac_address' => ':attribute は無効な MAC アドレスです。',
    'max' => [
        'array' => ':attribute は :value より大きくしてください。',
        'file' => ':attribute は :value キロバイトより大きくしてください。',
        'numeric' => ':attribute は :value より大きな数にしてください。',
        'string' => ':attribute は :value 文字より大きくしてください。',
    ],
    'mimes' => ':attribute は :values ファイルにしてください。',
    'mimetypes' => ':attribute は :values ファイルにしてください。',
    'min' => [
        'array' => ':attribute は :value 以上にしてください。',
        'file' => ':attribute は :value キロバイト以上にしてください。',
        'numeric' => ':attribute は :value 以上の数にしてください。',
        'string' => ':attribute は :value 文字以上にしてください。',
    ],
    'multiple_of' => ':attribute は :value の倍数にしてください。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute 形式は無効です。',
    'numeric' => ':attribute は数値にしてください。',
    'password' => 'パスワードが違います。',
    'present' => ':attribute が必要です。',
    'prohibited' => ':attribute は禁止です。',
    'prohibited_if' => ':other が :value の時、:attribute は禁止です。',
    'prohibited_unless' => ':other が :values にない限り、 :attribute は禁止です。',
    'prohibits' => ':attribute は :other の存在を禁止します。',
    'regex' => ':attribute 形式が無効です。',
    'required' => ':attribute は必須です。',
    'required_array_keys' => ':attribute は :values エントリを含む必要があります。',
    'required_if' => ':other が :value の時、 :attribute は必須です。',
    'required_unless' => ':other に :values が無い限り、 :attribute は必須です。',
    'required_with' => ':values がある時、 :attribute は必須です。',
    'required_with_all' => ':values がある時、 :attribute は必須です。',
    'required_without' => ':values がない時、 :attribute は必須です。',
    'required_without_all' => ':values が1つもない時、 :attribute は必須です。',
    'same' => ':attribute と :other を一致させる必要があります。',
    'size' => [
        'array' => ':attribute は :size 個のデータを含めてください。',
        'file' => ':attribute :size キロバイト以下にしてください。',
        'numeric' => ':attribute は :size 個の数値にしてください。',
        'string' => ':attribute は :size 文字にしてください。',
    ],
    'starts_with' => ':attribute は :values という値で開始してください。',
    'string' => ':attribute は文字にしてください。',
    'timezone' => ':attribute は有効なタイムゾーンを指定してください。',
    'unique' => ':attribute は既に存在します。',
    'uploaded' => ':attribute はアップロードできませんでした。',
    'url' => ':attribute は有効なURLを指定してください。',
    'uuid' => ':attribute は有効なUUIDを指定してください。',

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
