<?php

return [
    'tools' => [
        'export_import_data' => 'تصدير/استيراد البيانات',
    ],

    'import' => [
        'name' => 'استيراد',
        'heading' => 'استيراد :label',
        'failed_to_read_file' => 'الملف غير صالح أو تالف أو كبير جدًا للقراءة.',

        'form' => [
            'quick_export_message' => 'إذا كنت ترغب في تصدير بيانات :label، يمكنك القيام بذلك بسرعة عن طريق النقر فوق :export_csv_link أو :export_excel_link.',
            'quick_export_button' => 'تصدير إلى :format',
            'dropzone_message' => 'اسحب وأسقط الملف هنا أو انقر للتحميل',
            'allowed_extensions' => 'اختر ملفًا باستخدام الامتدادات التالية: :extensions.',
            'import_button' => 'استيراد',
        ],

        'example' => [
            'title' => 'مثال',
            'download' => 'تحميل ملف الـ :type المثالي',
        ],

        'rules' => [
            'title' => 'القواعد',
            'column' => 'العمود',
        ],

        'uploading_message' => 'بدء تحميل الملف...',
        'uploaded_message' => 'تم تحميل الملف :file بنجاح. بدء التحقق من صحة البيانات...',
        'validating_message' => 'التحقق من البيانات من :from إلى :to...',
        'importing_message' => 'استيراد البيانات من :from إلى :to...',
        'done_message' => 'تم استيراد :count :label بنجاح.',
        'validating_failed_message' => 'فشل التحقق من البيانات. يرجى التحقق من الأخطاء أدناه.',
        'no_data_message' => 'البيانات الخاصة بك محدثة بالفعل أو لا توجد بيانات لاستيرادها.',
    ],

    'export' => [
        'name' => 'تصدير',
        'heading' => 'تصدير :label',

        'form' => [
            'all_columns_disabled' => 'سيتم تصدير الأعمدة التالية: :columns.',
            'columns' => 'الأعمدة',
            'format' => 'التنسيق',
            'export_button' => 'تصدير',
        ],

        'success_message' => 'تم التصدير بنجاح.',
        'error_message' => 'فشل التصدير.',

        'empty_state' => [
            'title' => 'لا توجد بيانات لتصديرها',
            'description' => 'يبدو أنه لا توجد بيانات لتصديرها.',
            'back' => 'العودة إلى :page',
        ],
    ],
];
