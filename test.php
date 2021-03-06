<?php
header("Content-Type: application/json;chartset=uft-8");
// header("HTTP/1.1 500 Internal Server Error");
echo json_encode([
    'code' => 0,
    'data' => [
        'user' => [
            'name' => 'Hamm',
            'sex' => 1,
            'age' => 18,
            'addr' => [
                'China', 'ChongQing'
            ],
            'money' => 1.5,
            'code' => [
                [
                    'language' => 'php',
                    'level' => 'A+'
                ],
                [
                    'language' => 'javascript',
                    'level' => 'A+'
                ],
                [
                    'language' => 'java',
                    'level' => 'A'
                ],
                [
                    'language' => 'python',
                    'level' => 'A'
                ],
                [
                    'language' => 'swift',
                    'level' => 'B'
                ],
            ]
        ],
        'checked' => false,
        'message' => [
            'message a', 'message b'
        ],
        'time' => time()
    ],
]);
