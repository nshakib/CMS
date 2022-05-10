<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'ট্যাগ',
        'create' => 'ট্যাগ যোগ করুন',
        'edit' => 'ট্যাগ সম্পাদনা করুন',
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Title',
                'placeholder' => 'Enter title',
                'attribute' => 'title'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Auto generate',
                'attribute' => 'slug'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for tags',
                'attribute' => 'search'
            ]
        ]
    ],
    'label' => [
        'no_data' => [
            'fetch' => "No tag data yet",
            'search' => ":keyword tag not found",
        ]
    ]
    ,
    'button' => [
        'create' => [
            'value' => 'ট্যাগ যোগ করুন'
        ],
        'save' => [
            'value' => 'ট্যাগ সংরক্ষণ করুন'
        ],
        'edit' => [
            'value' => 'ট্যাগ সম্পাদনা করুন'
        ],
        'delete' => [
            'value' => 'ট্যাগ মুছুন'
        ],
        'cancel' => [
            'value' => 'ট্যাগ বাতিল করুন'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Add tag',
            'message' => [
                'success' => "ট্যাগ সফলভাবে সংরক্ষণ করা হয়েছে.",
                'error' => "An error occurred while saving the tag. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit tag',
            'message' => [
                'success' => "Tag updated successfully.",
                'error' => "An error occurred while updating the tag. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete tag',
            'message' => [
                'confirm' => "Are you sure you want to delete the :title tag?",
                'success' => "Tag deleted successfully.",
                'error' => "An error occurred while deleting the tag. :error"
            ]
        ],
    ]
];