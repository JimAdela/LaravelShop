<?php

return [
    'alipay'    => [
        'app_id'        => '2016092800615695',
        'ali_public_key'=> 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvsnUpY9h20vLoWzBuP26xeXAQXQv5nXkA2cKpGj8hvavJIkI4JOjIhXlQwHKAw46wVRQpq0y3JZLoRhMUQbzlEHpTTdy/1OCAu50TJAOn9wvuCSdUkAEdpxAlG/c/A64wrhGC8eyS4YMTJam9VST507VxIBbDl1Rk3kLmllkDMWvw4lwzL14iwKkwaNjmWWDYTWVj3wVEfBjf+4XCz08Nd5ED7d4OjJxtSP+c8vdmsb7ADAqiGPozHjrq4B32vS2mkrnJlZoau9Rdd0XpYVfuNOwBK4IJGcYV//tjsNKUpLBvmbfLPpCT42mCYIYyz/f/29NIdiRDUR+H7h4ot2D/QIDAQAB',
        'private_key'   => 'MIIEowIBAAKCAQEAr2QzpVtiyVyfOgWU5XKxQm/CXiW8mqJV9nhb26g9EySLPExslNsKt7+kJ0MUVRqcad2x4uFjQ3crb44l51YQjZ4YNhuZ8VMMPLm9pnLIq7yc8s77vP8ueisL+7+ISr0w3PUGb9YBtRFBwytZ+x1MMu4Pw+srFAj0bnlOp0SI1zTZLkHoiGffJlhNK7zxGC6vEWNOVGwmWf898KywuSToxxe4hIbMZM21eGFVBJdEMsG4e9RwWDPPgIQkn3K2BENAEJE2wt4zvuaC6064xoszWrd06870Hh/K5dAsgi5FfuGJZKZHAVFjZ36jRaptgaBdKeTepDuPkjA1hxQBrn6dkQIDAQABAoIBAGuZn42ciPhb2FtyPSyetly5z5aOtCxx1ycEI+aYSg/KZZkykZKo5uRfr8degcTMNJVGKvGzsIAdRgqEPIC17iXTjar0N/czKdi/YrgQx0eEyQy1Kv+B1fOhIRLrKCQh+S41LCPEOPvqgFvJ5sQF7093eTiKt7zs2XhE95nqk8DiaMC63AUIgxdKsxs1VmgR4LrabGYOMBllg1PeBAksIyU2BOxujCY+6fYicdQLNyQ44I0PGccIEGi8XUkDfy3/bXBHD6CBofrcKsVfL7pJKr/VAeKML2DgPCK3OsBt1R/USI2K/WYHKfeGPz7pMHavjsHHfia2677flTtSz1C5mdkCgYEA4L7uZbZCwPBrb1Ro2+kALi5PZVNCAMse+TLFgGTrzm1gDOQ3c2xBGMh0MCzFWThVQ9TEmRa/fRW6VrPsKfM2aS9110Tq5XG+bhyTflkSukm0yV8vod3esHgybnObEodWI0ymgtk3HjKMjGSfuuBSqsGSW8uRUNWJ8vXgmDbll3sCgYEAx8g6R4Ry7KzNaPcZFi5tswSMmVkEAZLDNDdrSJSbb6MSsfcPZ4IwVk9lmVjdKuVV2N9zvK2Yl9cQaqV+eOeOu+jibODtUU23SDtoOyTkNlTstH3gHU6ozk77MOKmeBdvbnyhHjiAP2H/qMuepnTvyLwzy9AwlxozZRjfgDa8S2MCgYBNOk7BNLgLhJHmV6MQrigZtmAh+VIc469pAkFLtWIyNPNkeqdzSie0VG1YgInv9qOWA27rDB4Q5X56fKkSYTi5PE3KAyyUW1mMjNVB/WmqCdnNuJ+th4gWK7dorOEEpOy8hIJTREDkZ4pUU99vX9YIRyv7zx/IHxigHE1pALQ0MQKBgDTZkhlDP4e+uuQuofNNOvXlmTAj7TxhT8RreLUNowToVdTAb9HJDfJ3NIBZksB7RLeHfT2Hitt4KD6eIxPm5cpt9CArbHxam8a++HbU7o407x1cQ0Jdgah6Glc3TiRsxqyqyZCOD9c0nIZRv1l3i8tFhko/e+stIjV3XAC1+h/TAoGBAMJIlAU7SRQnU1bvtoop0QC/HOScty/Fj8Hy//udUg+pWMDQP6+dFt/2bB3Qf5CfO//qY/2Cv1l6jcMTCLq293lvuSmIAIjpVGVV90R6L/GswqIDhO9FwmglYp7ae4WPgXKQDbW+OuYv5r/JJE/CPSdYarwliIbKqi01/nTQrc/H',
        'log'           => [
            'file'      => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat'    => [
        'app_id'        => '',
        'mch_id'        => '',
        'key'           => '',
        'cert_client'   => '',
        'cert_key'      => '',
        'log'           => [
            'file'      => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
