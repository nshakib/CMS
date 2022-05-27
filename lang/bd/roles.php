<?php
/*
language : Bangla
*/
return [
    'title' => [
        'index' => 'ভুমিকা',
         'create' => 'ভুমিকা যোগ করুন',
         'edit' => 'ভুমিকা সম্পাদনা করুন',
        'detail' => 'বিশদ ভূমিকা',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'নাম',
                 'placeholder' => 'নাম লিখুন',
                 'attribute' => 'নাম'
            ],
            'permission' => [
                'label' => 'অনুমতি',
                 'placeholder' => 'অনুমতি চয়ন করুন',
                 'attribute' => 'অনুমতি'
            ],
            'search' => [
                'label' => 'অনুসন্ধান',
                 'placeholder' => 'ভূমিকা অনুসন্ধান করুন',
                 'attribute' => 'অনুসন্ধান'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "ভূমিকাগুলি এখনও উপলব্ধ নয়!",
             'search' => ":কীওয়ার্ডের ভূমিকা পাওয়া যায়নি",
            ]
    ],
    'button' => [
        'create' => [
            'value' => 'যোগ করুন'
        ],
        'save' => [
            'value' => 'সংরক্ষণ করুন'
        ],
        'edit' => [
            'value' => 'সম্পাদনা করুন'
        ],
        'delete' => [
            'value' => 'মুছুন'
        ],
        'cancel' => [
            'value' => 'বাতিল'
        ],

        'back' => [
            'value' => 'পিছনে'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => 'Add role',
            'message' => [
                'success' => "বিভাগ সফলভাবে সংরক্ষিত হয়েছে।",
                 'error' => "ভুমিকাটি সংরক্ষণ করার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
        'update' => [
            'title' => 'ভুমিকা সম্পাদনা করুন',
            'message' => [
                'success' => "বিভাগ সফলভাবে আপডেট হয়েছে।",
                 'error' => "ভুমিকা আপডেট করার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
        'delete' => [
            'title' => 'ভুমিকা মুছুন',
            'message' => [
                'confirm' => "আপনি কি নিশ্চিত যে আপনি :নাম ভূমিকাটি মুছে ফেলতে চান?",
                 'success' => "বিভাগ সফলভাবে মুছে ফেলা হয়েছে।",
                 'error' => "ভুমিকাটি মুছে ফেলার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
    ]
];