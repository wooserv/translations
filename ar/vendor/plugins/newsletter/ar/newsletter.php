<?php

return [
    'name' => 'النشرات الإخبارية',
    'newsletter_form' => 'نموذج النشرات الإخبارية',
    'description' => 'عرض وحذف مشتركي النشرة الإخبارية',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'النشرة الإخبارية',
                'description' => 'تكوين قوالب البريد الإلكتروني للنشرة الإخبارية',
                'to_admin' => [
                    'title' => 'البريد الإلكتروني المُرسل إلى المشرف',
                    'description' => 'القالب المُرسل إلى المشرف',
                ],
                'to_user' => [
                    'title' => 'البريد الإلكتروني المُرسل إلى المشترك',
                    'description' => 'القالب المُرسل إلى المشترك',
                ],
            ],
        ],
        'title' => 'النشرة الإخبارية',
        'panel_description' => 'عرض وتحديث إعدادات النشرة الإخبارية',
        'description' => 'إعدادات النشرة الإخبارية (إرسال النشرة الإخبارية تلقائيًا إلى SendGrid، Mailchimp... عندما يسجل شخص ما في النشرة الإخبارية على الموقع).',
        'mailchimp_api_key' => 'مفتاح Mailchimp API',
        'mailchimp_list_id' => 'معرّف قائمة Mailchimp',
        'mailchimp_list' => 'قائمة Mailchimp',
        'sendgrid_api_key' => 'مفتاح Sendgrid API',
        'sendgrid_list_id' => 'معرّف قائمة Sendgrid',
        'sendgrid_list' => 'قائمة Sendgrid',
        'enable_newsletter_contacts_list_api' => 'تمكين واجهة برمجة تطبيقات قائمة جهات الاتصال في النشرة الإخبارية؟',
    ],
    'statuses' => [
        'subscribed' => 'مشترك',
        'unsubscribed' => 'غير مشترك',
    ],
];

