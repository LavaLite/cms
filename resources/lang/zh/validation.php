<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    | Simplified Chinese Translated by @佛壁灯 
    |
    */

    'accepted'             => ':attribute 必须被接受。',
    'active_url'           => ':attribute 非有效URL。',
    'after'                => ':attribute 必须为 :date 后的日期。',
    'after_or_equal'       => ':attribute 必须为 :date 后或与其相同的日期。',
    'alpha'                => ':attribute 仅能包含字母。',
    'alpha_dash'           => ':attribute 仅能包含字母、数字和半角连接符。',
    'alpha_num'            => ':attribute 仅能包含字母和数字。',
    'array'                => ':attribute 必须为数列。',
    'before'               => ':attribute 必须为 :date 前的日期。',
    'before_or_equal'      => ':attribute 必须为 :date 前或与其相同的日期。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间。',
        'file'    => ':attribute 必须在 :min 和 :max 千字节之间。',
        'string'  => ':attribute 必须在 :min 和 :max 字符之间。',
        'array'   => ':attribute 必须在 :min 和 :max 项之间。',
    ],
    'boolean'              => ':attribute 必须为 True 或 False。',
    'confirmed'            => ':attribute 验证不匹配。',
    'date'                 => ':attribute 非有效日期。',
    'date_format'          => ':attribute 不匹配格式 :format。',
    'different'            => ':attribute 和 :other 必须不同。',
    'digits'               => ':attribute 必须为 :digits 位。',
    'digits_between'       => ':attribute 必须为 :min 位和 :max 位之间。',
    'dimensions'           => ':attribute 图片大小无效。',
    'distinct'             => ':attribute 域存在重复值。',
    'email'                => ':attribute 必须为有效电子邮件地址。',
    'exists'               => '选中的 :attribute 无效。',
    'file'                 => ':attribute 必须为文件。',
    'filled'               => ':attribute 域必须存在值。',
    'image'                => ':attribute 必须为图片。',
    'in'                   => '选中的 :attribute 无效。',
    'in_array'             => ':attribute 域不在 :other 中存在。',
    'integer'              => ':attribute 必须为整数。',
    'ip'                   => ':attribute 必须为有效的 IP 地址。',
    'ipv4'                 => ':attribute 必须为有效的 IPv4 地址。',
    'ipv6'                 => ':attribute 必须为有效的 IPv6 地址。',
    'json'                 => ':attribute 必须为有效的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max。',
        'file'    => ':attribute 不能大于 :max 千字节。',
        'string'  => ':attribute 不能超过 :max 个字符。',
        'array'   => ':attribute 不能有超过 :max 个项。',
    ],
    'mimes'                => ':attribute 必须为文件类型： :values。',
    'mimetypes'            => ':attribute 必须为文件类型： :values。',
    'min'                  => [
        'numeric' => ':attribute 必须至少为 :min。',
        'file'    => ':attribute 必须至少为 :min 千字节。',
        'string'  => ':attribute 必须至少有 :min 个字符。',
        'array'   => ':attribute 必须至少有 :min 个项。',
    ],
    'not_in'               => '选中的 :attribute 无效。',
    'numeric'              => ':attribute 必须为数字。',
    'present'              => ':attribute 域必须存在。',
    'regex'                => ':attribute 格式无效。',
    'required'             => '需要 :attribute 域。',
    'required_if'          => '当 :other 为 :value 时需要 :attribute 域。',
    'required_unless'      => '当 :other 在 :value 内时需要 :attribute 域。',
    'required_with'        => '当 :values 存在时需要 :attribute 域。',
    'required_with_all'    => '当 :values 存在时需要 :attribute 域。',
    'required_without'     => '当 :values 不存在时需要 :attribute 域。',
    'required_without_all' => '当没有 :values 存在时需要 :attribute 域。:',
    'same'                 => ':attribute 和 :other 必须匹配。',
    'size'                 => [
        'numeric' => ':attribute 必须为 :size.',
        'file'    => ':attribute 必须为 :size kilobytes.',
        'string'  => ':attribute 必须为 :size characters.',
        'array'   => ':attribute must contain :size items.',
    ],
    'string'               => ':attribute 必须为字符串。',
    'timezone'             => ':attribute 必须为有效区。',
    'unique'               => ':attribute 已被使用。',
    'uploaded'             => '无法上传 :attribute。',
    'url'                  => ':attribute 格式无效。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
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
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
