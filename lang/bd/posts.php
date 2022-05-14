<?php
/*
language : Bangla
*/
return [
    'title' => [
        'index' => 'পোস্ট',
        'create' => 'পোস্ট যোগ করুন',
        'edit' => 'পোস্ট সম্পাদনা করুন',
        'detail' => 'বিস্তারিত পোস্ট',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "এখনও কোনো পোস্ট ডেটা নেই",
            'search' => ":কীওয়ার্ড পোস্ট পাওয়া যায়নি",
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
                 'placeholder' => 'অটো জেনারেট',
                'attribute' => 'স্লাগ'
            ],
            'thumbnail' => [
                'label' => 'থাম্বনেল',
                 'placeholder' => 'থাম্বনেল ব্রাউজ করুন',
                 'attribute' => 'থাম্বনেল'
            ],
            'category' => [
                'label' => 'বিভাগ',
                 'placeholder' => 'বিভাগ চয়ন করুন',
                 'attribute' => 'বিভাগ'
            ],
            'search' => [
                'label' => 'অনুসন্ধান',
                 'placeholder' => 'পোস্টের জন্য অনুসন্ধান করুন',
                 'attribute' => 'অনুসন্ধান'
            ]
        ],
        'select' => [
            'tag' => [
                'label' => 'ট্যাগ',
                'placeholder' => 'ট্যাগ লিখুন',
                'attribute' => 'ট্যাগ',
                'option' => [
                    'publish' => 'প্রকাশ করুন',
                    'draft' => 'খসড়া'
                ],
            ],
            'status' => [
                'label' => 'স্থিতি',
                'placeholder' => 'স্থিতি চয়ন করুন',
                'attribute' => 'স্থিতি',
                'option' => [
                    'draft' => 'খসড়া',
                    'publish' => 'প্রকাশ করুন',
                ]
            ],
        ],
        'textarea' => [
            'description' => [
                'label' => 'বর্ণনা',
                'placeholder' => 'বিবরণ লিখুন',
                'attribute' => 'বর্ণনা'
            ],
            'content' => [
                'label' => 'সামগ্রী',
                'placeholder' => 'সামগ্রী লিখুন',
                'attribute' => 'সামগ্রী'
            ],
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
        'browse' => [
            'value' => 'ব্রাউজ করুন'
        ],
        'back' => [
            'value' => 'পিছনে'
        ],
        'apply' => [
            'value' => 'প্রয়োগ করুন'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => 'পোস্ট যোগ করুন',
            'message' => [
                'success' => "পোস্ট সফলভাবে সংরক্ষিত হয়েছে।",
                 'error' => "পোস্টটি সংরক্ষণ করার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
        'update' => [
            'title' => 'পোস্ট সম্পাদনা করুন',
            'message' => [
                'success' => "পোস্ট সফলভাবে আপডেট হয়েছে।",
                'error' => "পোস্টটি আপডেট করার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
        'delete' => [
            'title' => 'পোস্ট মুছুন',
            'message' => [
                'confirm' => "আপনি কি নিশ্চিত যে আপনি :title পোস্টটি মুছে ফেলতে চান?",
                'success' => "পোস্ট সফলভাবে মুছে ফেলা হয়েছে।",
                'error' => "পোস্টটি মুছে ফেলার সময় একটি ত্রুটি ঘটেছে। :error"
            ]
        ],
    ]
];