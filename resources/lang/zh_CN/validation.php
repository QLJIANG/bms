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
    */

    'accepted'             => ':attribute must be accepted.',
    'active_url'           => ':attribute不是一个有效地URL地址.',
    'after'                => ':attribute必须是一个在 :date 之后的日期.',
    'alpha'                => ':attribute只允许字母.',
    'alpha_dash'           => ':attribute只允许字母、数值、-.',
    'alpha_num'            => ':attribute只允许字母、数值.',
    'array'                => ':attribute必须是一个数组.',
    'before'               => ':attribute必须是一个在 :date 之前的日期.',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间.',
        'file'    => ':attribute must be between :min and :max kilobytes.',
        'string'  => ':attribute must be between :min and :max characters.',
        'array'   => ':attribute must have between :min and :max items.',
    ],
    'boolean'              => ':attribute必须为true或者false.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute不是一个有效日期.',
    'date_format'          => ':attribute日期格式必须为 :format.',
    'different'            => ':attribute和:other不能相同.',
    'digits'               => ':attribute must be :digits digits.',
    'digits_between'       => ':attribute must be between :min and :max digits.',
    'email'                => ':attribute邮箱地址无效.',
    'exists'               => ':attribute不存在.',
    'filled'               => ':attribute field is required.',
    'image'                => ':attribute图片格式错误.',
    'in'                   => ':attribute无效.',
    'integer'              => ':attribute必须为整数.',
    'ip'                   => ':attribute必须为一个有效的IP地址.',
    'json'                 => ':attribute必须为一个有效的JSON数据.',
    'max'                  => [
        'numeric' => ':attribute必须大于:max.',
        'file'    => ':attribute不能大于 :max K.',
        'string'  => ':attribute最多:max个字符.',
        'array'   => ':attribute最多只能有:max个单元.',
    ],
    'mimes'                => ':attribute的类型必须为: :values.',
    'min'                  => [
        'numeric' => ':attribute不得小于:min.',
        'file'    => ':attribute至少 :min K大小',
        'string'  => ':attribute至少:min个字符.',
        'array'   => ':attribute最少应有:min个单元.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'numeric'              => ':attribute必须为数字.',
    'regex'                => ':attribute格式无效.',
    'required'             => '缺少:attribute.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute长度必须为 :size.',
        'file'    => ':attribute文件大小必须为 :size .',
        'string'  => ':attribute必须为 :size 个字符.',
        'array'   => ':attribute必须包含 :size 个值.',
    ],
    'string'               => ':attribute必须是一个字符串.',
    'timezone'             => ':attribute必须是一个有效的时区.',
    'unique'               => ':attribute已存在.',
    'url'                  => ':attribute格式无效.',

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
