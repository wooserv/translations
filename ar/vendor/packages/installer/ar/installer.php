<?php

return [
    'title' => 'التثبيت',
    'next' => 'الخطوة التالية',
    'back' => 'السابق',
    'finish' => 'تثبيت',
    'installation' => 'التثبيت',
    'forms' => [
        'errorTitle' => 'حدثت الأخطاء التالية:',
    ],
    'welcome' => [
        'title' => 'مرحباً',
        'message' => 'قبل البدء، نحتاج إلى بعض المعلومات حول قاعدة البيانات. ستحتاج إلى معرفة العناصر التالية قبل المتابعة.',
        'language' => 'اللغة',
        'next' => 'لنبدأ',
    ],
    'requirements' => [
        'title' => 'متطلبات الخادم',
        'next' => 'التحقق من الصلاحيات',
    ],
    'permissions' => [
        'next' => 'ضبط البيئة',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'إعدادات البيئة',
            'form' => [
                'name_required' => 'اسم البيئة مطلوب.',
                'app_name_label' => 'عنوان الموقع',
                'app_name_placeholder' => 'عنوان الموقع',
                'app_url_label' => 'عنوان URL',
                'app_url_placeholder' => 'عنوان URL',
                'db_connection_label' => 'اتصال قاعدة البيانات',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'مضيف قاعدة البيانات',
                'db_host_placeholder' => 'مضيف قاعدة البيانات',
                'db_port_label' => 'منفذ قاعدة البيانات',
                'db_port_placeholder' => 'منفذ قاعدة البيانات',
                'db_name_label' => 'اسم قاعدة البيانات',
                'db_name_placeholder' => 'اسم قاعدة البيانات',
                'db_username_label' => 'اسم مستخدم قاعدة البيانات',
                'db_username_placeholder' => 'اسم مستخدم قاعدة البيانات',
                'db_password_label' => 'كلمة مرور قاعدة البيانات',
                'db_password_placeholder' => 'كلمة مرور قاعدة البيانات',
                'buttons' => [
                    'install' => 'تثبيت',
                ],
                'db_host_helper' => 'إذا كنت تستخدم Laravel Sail، فقط قم بتغيير DB_HOST إلى DB_HOST=mysql. في بعض خدمات الاستضافة يمكن أن يكون DB_HOST هو localhost بدلاً من 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'تم حفظ إعدادات ملف .env الخاص بك.',
        'errors' => 'غير قادر على حفظ ملف .env، يرجى إنشاؤه يدويًا.',
    ],
    'theme' => [
        'title' => 'اختيار القالب',
        'message' => 'اختر قالب لتخصيص مظهر موقع الويب الخاص بك. ستقوم هذه الاختيارات أيضًا بتحميل بيانات عينية مصممة للقالب التي تم اختيارها.',
    ],
    'createAccount' => [
        'title' => 'إنشاء حساب',
        'form' => [
            'first_name' => 'الاسم الأول',
            'last_name' => 'الاسم الأخير',
            'username' => 'اسم المستخدم',
            'email' => 'البريد الإلكتروني',
            'password' => 'كلمة المرور',
            'password_confirmation' => 'تأكيد كلمة المرور',
            'create' => 'إنشاء',
        ],
    ],
    'license' => [
        'title' => 'تفعيل الترخيص',
        'skip' => 'تخطي الآن',
    ],
    'install' => 'تثبيت',
    'final' => [
        'pageTitle' => 'انتهاء التثبيت',
        'title' => 'تم',
        'message' => 'تم تثبيت التطبيق بنجاح.',
        'exit' => 'الانتقال إلى لوحة التحكم الإدارية',
    ],
    'install_success' => 'تم التثبيت بنجاح!',
    'install_step_title' => 'التثبيت - الخطوة :step: :title',
];
