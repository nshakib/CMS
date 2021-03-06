<?php
/*
language : Bangla
*/
return [
    'title' => [
        'index' => 'ক্যাটাগরি',
        'create' => 'নতুন ক্যাটাগরি',
        'edit' => 'সম্পাদনা ক্যাটাগরি',
        'detail' => 'বিস্তারিত ক্যাটাগরি',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "No category data yet",
            'search' => ":keyword category not found",
        ]
        ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'শিরোনাম',
                'placeholder' => 'শিরোনাম লিখুন',
                'attribute' => 'শিরোনাম'
            ],
            'slug' => [
                'label' => 'স্লাগ',
                'placeholder' => 'স্বয়ংক্রিয়ভাবে তৈরি',
                'attribute' => 'স্লাগ'
            ],
            'thumbnail' => [
                'label' => 'থাম্বনেইল',
                'placeholder' => 'থাম্বনেইল ব্রাউজ করুন',
                'attribute' => 'থাম্বনেইল'
            ],
            'search' => [
                'label' => 'অনুসন্ধান',
                'placeholder' => 'ক্যাটাগরির জন্য অনুসন্ধান',
                'attribute' => 'অনুসন্ধান'
            ]
        ],
        'select' => [
            'parent_category' => [
                'label' => 'মূল ক্যাটাগরি',
                'placeholder' => 'মূল ক্যাটাগরি নির্বাচন করুন',
                'attribute' => 'মূল ক্যাটাগরি'
            ]
        ],
        'textarea' => [
            'description' => [
                'label' => 'বর্ণনা',
                'placeholder' => 'বর্ণনা লিখুন',
                'attribute' => 'বর্ণনা'
            ],
        ]
    ],
    'button' => [
        'create' => [
            'value' => 'নতুন'
        ],
        'save' => [
            'value' => 'সংরক্ষণ'
        ],
        'edit' => [
            'value' => 'সম্পাদনা'
        ],
        'delete' => [
            'value' => 'মুছে ফেলুন'
        ],
        'cancel' => [
            'value' => 'বাতিল করুন'
        ],
        'browse' => [
            'value' => 'ব্রাউজ করুন'
        ],
        'back' => [
            'value' => 'পেছনে'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'নতুন ক্যাটাগরি',
            'message' => [
                'success' => "ক্যাটাগরি সফলভাবে সংরক্ষিত হয়েছে.",
                'error' => "ক্যাটাগরি সংরক্ষণ করার সময় একটি ত্রুটি ঘটেছে৷ : ত্রুটি"
            ]
        ],
        'update' => [
            'title' => 'সম্পাদনা ক্যাটাগরি',
            'message' => [
                'success' => "ক্যাটাগরি সফলভাবে আপডেট করা হয়েছে।",
                'error' => "ক্যাটাগরি আপডেট করার সময় একটি ত্রুটি ঘটেছে৷ :ত্রুটি"
            ]
        ],
        'delete' => [
            'title' => 'ক্যাটাগরি মুছুন',
            'message' => [
                'confirm' => "আপনি কি নিশ্চিত যে আপনি :title বিভাগটি মুছে ফেলতে চান?",
                'success' => "ক্যাটাগরি সফলভাবে মুছে ফেলা হয়েছে.",
                'error' => "ক্যাটাগরি মুছে ফেলার সময় একটি ত্রুটি ঘটেছে৷ : ত্রুটি"
            ]
        ],
    ]
];