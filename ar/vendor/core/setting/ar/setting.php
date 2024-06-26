<?php

return [
    'title' => 'الإعدادات',
    'general_setting' => 'الإعدادات العامة',
    'menu' => 'جميع الإعدادات',
    'email_setting_title' => 'إعدادات البريد الإلكتروني',
    'email_setting_description' => 'تكوين إعدادات البريد الإلكتروني',
    'general' => [
        'theme' => 'القالب',
        'title' => 'معلومات عامة',
        'description' => 'عرض وتحديث معلومات الموقع',
        'rich_editor' => 'محرر غني',
        'site_title' => 'عنوان الموقع',
        'admin_email' => 'بريد المسؤول',
        'seo_block' => 'إعدادات تحسين محركات البحث',
        'seo_title' => 'عنوان SEO',
        'seo_description' => 'وصف SEO',
        'webmaster_tools_block' => 'أدوات مشرف الويب من Google',
        'placeholder' => [
            'site_title' => 'عنوان الموقع (حد أقصى 120 حرفًا)',
            'admin_email' => 'بريد المسؤول',
            'seo_title' => 'عنوان SEO (حد أقصى 120 حرفًا)',
            'seo_description' => 'وصف SEO (حد أقصى 120 حرفًا)',
            'google_analytics' => 'تحليلات Google',
        ],
        'enable_send_error_reporting_via_email' => 'تمكين إرسال تقارير الأخطاء عبر البريد الإلكتروني؟',
        'time_zone' => 'المنطقة الزمنية',
        'enable' => 'تمكين',
        'disable' => 'تعطيل',
        'enable_cache' => 'تمكين التخزين المؤقت؟',
        'disable_cache_in_the_admin_panel' => 'تعطيل التخزين المؤقت في لوحة التحكم؟',
        'disabled_helper' => 'لا يمكن تعطيل قالب البريد الإلكتروني هذا!',
        'cache_time' => 'زمن التخزين المؤقت (بالدقائق)',
        'enable_cache_site_map' => 'تمكين تخزين مؤقت لخريطة الموقع؟',
        'cache_time_site_map' => 'زمن تخزين مؤقت لخريطة الموقع (بالدقائق)',
        'admin_logo' => 'شعار المسؤول',
        'admin_favicon' => 'فافيكون المسؤول',
        'admin_title' => 'عنوان المسؤول',
        'admin_title_placeholder' => 'العنوان المعروض في علامة تبويب المتصفح',
        'admin_appearance_title' => 'مظهر المسؤول',
        'admin_appearance_description' => 'ضبط مظهر المسؤول مثل المحرر، اللغة...',
        'seo_block_description' => 'ضبط عنوان الموقع، ووصفه لمحركات البحث، وكلمات مفتاحية لتحسين SEO',
        'webmaster_tools_description' => 'أدوات مشرف الويب من Google (GWT) هي برامج مجانية تساعدك على إدارة الجانب التقني لموقعك على الويب',
        'yes' => 'نعم',
        'no' => 'لا',
        'show_on_front' => 'صفحة البداية تعرض',
        'select' => '— اختر —',
        'show_site_name' => 'عرض اسم الموقع بعد عنوان الصفحة، مفصول بـ "-"؟',
        'locale' => 'لغة الموقع',
        'locale_direction' => 'اتجاه لغة الواجهة الأمامية',
        'minutes' => 'دقائق',
        'redirect_404_to_homepage' => 'إعادة توجيه جميع الطلبات غير الموجودة إلى الصفحة الرئيسية؟',
    ],
    'admin_appearance' => [
        'title' => 'مظهر المسؤول',
        'description' => 'عرض وتحديث الشعار، الفافيكون، التصميم،...',
        'layout' => 'تصميم',
        'horizontal' => 'أفقي',
        'vertical' => 'عمودي',
        'show_menu_item_icon' => 'إظهار رمز العنصر في القائمة؟',
        'language' => 'لغة في لوحة التحكم',
        'theme_mode' => 'وضع القالب',
        'dark' => 'داكن',
        'light' => 'فاتح',
        'container_width' => [
            'title' => 'عرض الحاوية',
            'default' => 'افتراضي',
            'large' => 'كبير',
            'full' => 'كامل',
        ],
        'form' => [
            'admin_logo' => 'شعار المسؤول',
            'admin_favicon' => 'فافيكون المسؤول',
            'admin_title' => 'عنوان المسؤول',
            'admin_title_placeholder' => 'العنوان المعروض في علامة التبويب للمتصفح',
            'admin_login_screen_backgrounds' => 'خلفيات شاشة تسجيل الدخول (~1366x768)',
            'admin_locale_direction' => 'اتجاه لغة المسؤول',
            'rich_editor' => 'محرر غني',
            'show_admin_bar' => 'عرض شريط المسؤول (عند تسجيل دخول المسؤول، لا تزال شريط المسؤول مرئيًا في الموقع)',
            'show_guidelines' => 'عرض الإرشادات؟',
            'primary_font' => 'الخط الأساسي',
            'primary_color' => 'اللون الأساسي',
            'secondary_color' => 'اللون الثانوي',
            'heading_color' => 'لون العنوان',
            'text_color' => 'لون النص',
            'link_color' => 'لون الرابط',
            'link_hover_color' => 'لون الرابط عند التحويم',
            'show_menu_item_icon' => 'إظهار رمز العنصر في القائمة؟',
            'custom_css' => 'CSS مخصص',
            'custom_js' => 'JS مخصص',
            'custom_header_js' => 'JS في الهيدر',
            'custom_header_js_placeholder' => 'JS في الهيدر الصفحة، قم بوضعه داخل &#x3C;script&#x3E;&#x3C;/script&#x3E;',
            'custom_body_js' => 'JS في الجسم',
            'custom_body_js_placeholder' => 'JS في الجسم الصفحة، قم بوضعه داخل &#x3C;script&#x3E;&#x3C;/script&#x3E;',
            'custom_footer_js' => 'JS في التذييل',
            'custom_footer_js_placeholder' => 'JS في التذييل الصفحة، قم بوضعه داخل &#x3C;script&#x3E;&#x3C;/script&#x3E;',
        ],
    ],    
    'datatable' => [
        'title' => 'جداول البيانات',
        'description' => 'إعدادات جداول البيانات',
        'form' => [
            'show_column_visibility' => 'إظهار تبديل عرض الأعمدة افتراضيًا؟',
            'show_export_button' => 'إظهار زر التصدير افتراضيًا؟',
            'pagination_type' => 'نوع الترقيم',
            'default' => 'افتراضي',
            'dropdown' => 'قائمة منسدلة',
        ],
    ],    
    'email' => [
        'subject' => 'الموضوع',
        'content' => 'المحتوى',
        'title' => 'إعدادات قالب البريد الإلكتروني',
        'description' => 'قالب البريد الإلكتروني باستخدام HTML ومتغيرات النظام.',
        'reset_to_default' => 'إعادة تعيين إلى الافتراضي',
        'back' => 'العودة إلى الإعدادات',
        'reset_success' => 'تمت إعادة التعيين بنجاح إلى الافتراضي',
        'confirm_reset' => 'تأكيد إعادة تعيين قالب البريد الإلكتروني؟',
        'confirm_message' => 'هل تريد حقًا إعادة تعيين قالب البريد الإلكتروني هذا إلى القيمة الافتراضية؟',
        'continue' => 'متابعة',
        'sender_name' => 'اسم المرسل',
        'sender_name_placeholder' => 'الاسم',
        'sender_email' => 'بريد المرسل',
        'mailer' => 'البريد الإلكتروني',
        'port' => 'المنفذ',
        'port_placeholder' => 'مثال: 587',
        'host' => 'المضيف',
        'host_placeholder' => 'مثال: smtp.gmail.com',
        'username' => 'اسم المستخدم',
        'username_placeholder' => 'اسم المستخدم لتسجيل الدخول إلى خادم البريد',
        'password' => 'كلمة المرور',
        'password_placeholder' => 'كلمة المرور لتسجيل الدخول إلى خادم البريد',
        'encryption' => 'التشفير',
        'mail_gun_domain' => 'النطاق',
        'mail_gun_domain_placeholder' => 'النطاق',
        'mail_gun_secret' => 'السر',
        'mail_gun_secret_placeholder' => 'السر',
        'mail_gun_endpoint' => 'النقطة النهائية',
        'mail_gun_endpoint_placeholder' => 'النقطة النهائية',
        'log_channel' => 'قناة السجل',
        'sendmail_path' => 'مسار Sendmail',
        'encryption_placeholder' => 'التشفير: ssl أو tls',
        'local_domain' => 'النطاق المحلي',
        'local_domain_placeholder' => 'يمكن أن يكون فارغًا. يجب تعيينه إلى النطاق الخاص بك عند استخدام SMTP Relay. على سبيل المثال، your-domain.com',
        'ses_key' => 'المفتاح',
        'ses_key_placeholder' => 'المفتاح',
        'ses_secret' => 'السر',
        'ses_secret_placeholder' => 'السر',
        'ses_region' => 'المنطقة',
        'ses_region_placeholder' => 'المنطقة',
        'postmark_token' => 'الرمز',
        'postmark_token_placeholder' => 'الرمز',
        'email_templates' => 'قوالب البريد الإلكتروني',
        'email_templates_description' => 'قوالب البريد الإلكتروني باستخدام HTML ومتغيرات النظام.',
        'email_template_settings' => 'إعدادات قوالب البريد الإلكتروني',
        'email_template_settings_description' => 'عرض وتحديث إعدادات قوالب البريد الإلكتروني الخاصة بك',
        'email_rules' => 'قواعد البريد الإلكتروني',
        'email_rules_description' => 'تكوين قواعد البريد الإلكتروني للتحقق من الصحة',
        'base_template' => 'القالب الأساسي',
        'base_template_description' => 'القالب الأساسي لجميع رسائل البريد الإلكتروني',
        'template_header' => 'رأس قالب البريد الإلكتروني',
        'template_header_description' => 'قالب لرأس رسائل البريد الإلكتروني',
        'template_footer' => 'تذييل قالب البريد الإلكتروني',
        'template_footer_description' => 'قالب لتذييل رسائل البريد الإلكتروني',
        'default' => 'افتراضي',
        'template_off_status_helper' => 'تم إيقاف تشغيل قالب البريد الإلكتروني هذا.',
        'blacklist_email_domains' => 'نطاقات البريد الإلكتروني المحظورة',
        'blacklist_email_domains_helper' => 'أدخل قائمة بنطاقات البريد الإلكتروني التي يجب حظرها. مثلاً gmail.com، yahoo.com.',
        'blacklist_specified_emails' => 'عناوين البريد الإلكتروني المحظورة',
        'blacklist_specified_emails_helper' => 'أدخل قائمة بعناوين البريد الإلكتروني المحددة التي يجب حظرها. مثلاً mail@example.com.',
        'exception_emails' => 'عناوين البريد الإلكتروني الاستثنائية',
        'exception_emails_helper' => 'سيتم استثناء هذه الرسائل من قواعد التحقق.',
        'email_rules_strict' => 'التحقق الصارم من البريد الإلكتروني',
        'email_rules_strict_helper' => 'قم بأداء التحقق من البريد الإلكتروني مشابه ل RFC مع قواعد صارمة.',
        'email_rules_dns' => 'التحقق من DNS',
        'email_rules_dns_helper' => 'تحقق مما إذا كانت هناك سجلات DNS تشير إلى أن الخادم يقبل رسائل البريد الإلكتروني.',
        'email_rules_spoof' => 'كشف التزييف',
        'email_rules_spoof_helper' => 'اكتشاف محاولات التزييف البريدية المحتملة.',
        'template_turn_off' => 'انقر لإيقاف تشغيل قالب البريد الإلكتروني هذا',
        'template_turn_on' => 'انقر لتشغيل قالب البريد الإلكتروني هذا',
        'turn_on_success_message' => 'تم تشغيل قالب البريد الإلكتروني بنجاح!',
        'turn_off_success_message' => 'تم إيقاف تشغيل قالب البريد الإلكتروني بنجاح!',
        'email_template_status' => 'حالة قالب البريد الإلكتروني',
        'email_template_status_description' => 'تشغيل/إيقاف تشغيل قالب البريد الإلكتروني',
        'email_template_logo' => 'الشعار',
        'email_template_logo_helper_text' => 'إذا لم يتم تعيينه، سيتم الحصول عليه من شعار المسؤول في الإدارة -> الإعدادات -> مظهر المسؤول -> الشعار.',
        'email_template_copyright_text_helper_text' => 'إذا لم يتم تعيينه، سيتم الحصول عليه من خيارات النسخ الحقوقية للموضوع في الإدارة -> المظهر -> خيارات المظهر -> عام -> حقوق النسخ.',
        'email_template_email_contact' => 'عنوان البريد الإلكتروني للاتصال',
        'email_template_email_contact_helper_text' => 'إذا لم يتم تعيينه، سيتم الحصول عليه من بريد المرسل في الإدارة -> الإعدادات -> البريد الإلكتروني',
        'email_template_social_links' => 'روابط وسائل التواصل الاجتماعي',
        'email_template_custom_css' => 'CSS المخصص لقالب البريد الإلكتروني',
        'image_upload_supported' => 'يدعم فقط تنسيقات PNG، JPG، JPEG، و GIF.',
        'social_links' => [
            'name' => 'الاسم',
            'icon' => 'الأيقونة',
            'icon_image' => 'صورة الأيقونة (يدعم فقط تنسيقات PNG، JPG، JPEG، و GIF.)',
            'url' => 'الرابط',
            'image' => 'الصورة',
        ],
    ],
    'media' => [
        'title' => 'الوسائط',
        'driver' => 'السائق',
        'description' => 'إعدادات الوسائط',
        'aws_access_key_id' => 'معرف مفتاح الوصول لـ AWS',
        'aws_secret_key' => 'مفتاح السر لـ AWS',
        'aws_default_region' => 'المنطقة الافتراضية لـ AWS',
        'aws_bucket' => 'حاوية AWS',
        'aws_url' => 'رابط AWS',
        'aws_endpoint' => 'نقطة نهاية AWS (اختياري)',
        'r2_access_key_id' => 'معرف مفتاح الوصول لـ R2',
        'r2_secret_key' => 'مفتاح السر لـ R2',
        'r2_bucket' => 'حاوية R2',
        'r2_url' => 'رابط R2',
        'r2_endpoint' => 'نقطة نهاية R2',
        'do_spaces_access_key_id' => 'معرف مفتاح الوصول لـ DO Spaces',
        'do_spaces_secret_key' => 'مفتاح السر لـ DO Spaces',
        'do_spaces_default_region' => 'المنطقة الافتراضية لـ DO Spaces',
        'do_spaces_bucket' => 'حاوية DO Spaces',
        'do_spaces_endpoint' => 'نقطة نهاية DO Spaces',
        'do_spaces_cdn_enabled' => 'هل تم تمكين CDN لـ DO Spaces؟',
        'media_do_spaces_cdn_custom_domain' => 'نطاق مخصص لـ Do Spaces CDN',
        'media_do_spaces_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'wasabi_access_key_id' => 'معرف مفتاح الوصول لـ Wasabi',
        'wasabi_secret_key' => 'مفتاح السر لـ Wasabi',
        'wasabi_default_region' => 'المنطقة الافتراضية لـ Wasabi',
        'wasabi_bucket' => 'حاوية Wasabi',
        'wasabi_root' => 'جذر Wasabi',
        'wasabi_root_helper' => 'لإعادة استخدام الصور الحالية، قم بتعيين جذر Wasabi على أنه "/"، ثم قم بتحميل جميع الملفات الحالية من public/storage إلى دليل جذر Wasabi الخاص بك.',
        'default_placeholder_image' => 'صورة البديل الافتراضية',
        'enable_chunk' => 'تمكين حجم تقسيم الرفع؟',
        'chunk_size' => 'حجم التقسيم (بايت)',
        'chunk_size_placeholder' => 'الافتراضي: 1048576 ~ 1 ميجابايت',
        'max_file_size' => 'أقصى حجم ملف للتقسيم (ميجابايت)',
        'max_file_size_placeholder' => 'الافتراضي: 1048576 ~ 1 جيجابايت',
        'enable_watermark' => 'تمكين العلامة المائية؟',
        'watermark_source' => 'صورة العلامة المائية',
        'watermark_size' => 'حجم العلامة المائية (%)',
        'watermark_size_placeholder' => 'الافتراضي: 10 (%)',
        'watermark_opacity' => 'شفافية العلامة المائية (%)',
        'watermark_opacity_placeholder' => 'الافتراضي: 70 (%)',
        'watermark_position' => 'موقع العلامة المائية',
        'watermark_position_x' => 'موقع العلامة المائية X',
        'watermark_position_y' => 'موقع العلامة المائية Y',
        'watermark_position_top_left' => 'أعلى اليسار',
        'watermark_position_top_right' => 'أعلى اليمين',
        'watermark_position_bottom_left' => 'أسفل اليسار',
        'watermark_position_bottom_right' => 'أسفل اليمين',
        'watermark_position_center' => 'الوسط',
        'turn_off_automatic_url_translation_into_latin' => 'إيقاف ترجمة عناوين URL تلقائياً إلى اللاتينية',
        'bunnycdn_hostname' => 'اسم الاستضافة',
        'bunnycdn_zone' => 'اسم المنطقة (اسم منطقة التخزين الخاصة بك)',
        'bunnycdn_key' => 'كلمة مرور FTP والوصول إلى واجهة برمجة التطبيقات (كلمة المرور للوصول إلى واجهة برمجة التطبيقات لمنطقة التخزين)',
        'bunnycdn_region' => 'المنطقة (منطقة التخزين)',
        'optional' => 'اختياري',
        'sizes' => 'أحجام الصور المصغرة',
        'media_sizes_helper' => 'قم بتعيين العرض أو الارتفاع إلى 0 إذا كنت ترغب فقط في القص بواسطة العرض أو الارتفاع.',
        'width' => 'العرض',
        'height' => 'الارتفاع',
        'default_size_value' => 'الافتراضي: :size',
        'all' => 'الكل',
        'all_helper_text' => 'إذا قمت بإلغاء تحديد جميع المجلدات ، فسيتم تطبيقها على جميع المجلدات.',
        'media_folders_can_add_watermark' => 'إضافة علامة مائية للصور في المجلدات:',
        'max_upload_filesize' => 'أقصى حجم للملفات المرفوعة (MB)',
        'max_upload_filesize_placeholder' => 'الافتراضي: :size ، يجب أن يكون أقل من :size.',
        'max_upload_filesize_helper' => 'يسمح خادمك بتحميل الملفات بحد أقصى :size ، يمكنك تغيير هذه القيمة لتحديد حجم تحميل الملفات.',
        'image_processing_library' => 'مكتبة معالجة الصور',
        'use_original_name_for_file_path' => 'استخدام الاسم الأصلي لمسار الملف',
        'update_thumbnail_sizes_warning' => 'بعد ضبط أحجام الصور المصغرة ، يجب عليك النقر على الزر ":button_text" لتحديثها.',
    ],
    'license' => [
        'license_code' => 'رمز الترخيص',
        'email' => 'البريد الإلكتروني',
    ],    
    'field_type_not_exists' => 'هذا النوع من الحقول غير موجود',
    'save_settings' => 'حفظ الإعدادات',
    'template' => 'القالب',
    'description' => 'الوصف',
    'enable' => 'تمكين',
    'send' => 'إرسال',
    'test_email_description' => 'لإرسال بريد إلكتروني تجريبي ، يرجى التأكد من تحديث التكوين لإرسال البريد!',
    'test_email_input_placeholder' => 'أدخل البريد الإلكتروني الذي تريد إرسال بريد إلكتروني تجريبي إليه.',
    'test_email_modal_title' => 'إرسال بريد إلكتروني تجريبي',
    'test_send_mail' => 'إرسال بريد تجريبي',
    'test_email_send_success' => 'تم إرسال البريد الإلكتروني بنجاح!',
    'locale_direction_ltr' => 'من اليسار إلى اليمين',
    'locale_direction_rtl' => 'من اليمين إلى اليسار',
    'emails_warning' => 'يمكنك إضافة الحد الأقصى من :count عناوين بريد إلكتروني',
    'email_add_more' => 'إضافة المزيد',
    'generate' => 'إنشاء',
    'generate_thumbnails' => 'إنشاء الصور المصغرة',
    'generate_thumbnails_success' => 'تم إنشاء الصور المصغرة بنجاح. تم إنشاء :count ملف!',
    'generate_thumbnails_error' => 'لم نتمكن من إعادة إنشاء الصور المصغرة لهذه الملفات :count ملف!',
    'generate_thumbnails_description' => 'هل أنت متأكد أنك تريد إعادة إنشاء الصور المصغرة لجميع الصور؟ سيستغرق الأمر وقتًا لذا يرجى عدم مغادرة هذه الصفحة ، انتظر حتى ينتهي.',
    'enable_chunk_description' => 'حجم الشظية للتحميل يُستخدم لتحميل ملفات كبيرة الحجم.',
    'watermark_description' => 'تحذير: يتم إضافة العلامة المائية فقط إلى الصور المحملة حديثًا ، ولن تتم إضافتها إلى الصور الموجودة بالفعل. تعطيل العلامة المائية لن يزيل العلامة المائية من الصور الموجودة بالفعل.',
    'submit' => 'إرسال',
    'back' => 'رجوع',
    'enter_sample_value' => 'أدخل قيم عينية للاختبار',
    'preview' => 'معاينة',
    'media_size_width' => 'عرض الحجم :size يجب أن يكون أكبر من 0',
    'media_size_height' => 'ارتفاع الحجم :size يجب أن يكون أكبر من 0',
    'cronjob' => [
        'name' => 'Cronjob',
        'description' => 'Cronjob يسمح لك بتشغيل أوامر أو نصوص معينة تلقائيًا على موقعك.',
        'is_not_ready' => 'لتشغيل Cronjob ، اتبع التعليمات أدناه.',
        'is_working' => 'تهانينا! يتم تشغيل Cronjob الخاص بك.',
        'is_not_working' => "Cronjob الخاص بك لا يعمل. يرجى التحقق من Cronjob الخاص بخادمك.",
        'last_checked' => 'تم التحقق آخر مرة في :time.',
        'copy_button' => 'نسخ',
        'setup' => [
            'name' => 'إعداد Cronjob',
            'connect_to_server' => 'قم بالاتصال بخادمك عبر SSH أو أي طريقة مفضلة.',
            'open_crontab' => 'افتح ملف crontab باستخدام محرر نصوص (على سبيل المثال ، `crontab -e`).',
            'add_cronjob' => 'أضف الأمر أعلاه إلى ملف crontab واحفظه.',
            'done' => 'سيتم تشغيل Cronjob الآن في كل دقيقة وتنفيذ الأمر المحدد.',
            'learn_more' => 'يمكنك معرفة المزيد حول Cronjob من خلال :documentation لـ Laravel',
            'documentation' => 'الوثائق',
            'copied' => 'تم النسخ',
        ],
    ],
    'cache' => [
        'title' => 'التخزين المؤقت',
        'description' => 'ضبط التخزين المؤقت للنظام لتحسين السرعة',
        'form' => [
            'enable_cache' => 'تمكين التخزين المؤقت؟',
            'cache_time' => 'زمن التخزين المؤقت (بالدقائق)',
            'disable_cache_in_the_admin_panel' => 'تعطيل التخزين المؤقت في لوحة التحكم؟',
            'cache_admin_menu' => 'تخزين مؤقت لقائمة الإدارة؟',
            'enable_cache_site_map' => 'تمكين تخزين مؤقت لخريطة الموقع؟',
            'cache_time_site_map' => 'زمن تخزين مؤقت لخريطة الموقع (بالدقائق)',
        ],
    ],
    'appearance' => [
        'title' => 'المظهر',
    ],
    'panel' => [
        'common' => 'شائع',
        'general' => 'عام',
        'general_description' => 'عرض وتحديث إعداداتك العامة وتفعيل الترخيص',
        'email' => 'البريد الإلكتروني',
        'email_description' => 'عرض وتحديث إعدادات البريد الإلكتروني الخاصة بك وقوالب البريد الإلكتروني',
        'media' => 'الوسائط',
        'media_description' => 'عرض وتحديث إعدادات الوسائط الخاصة بك',
        'system' => 'النظام',
        'system_updater' => 'محدث النظام',
        'system_updater_description' => 'تحديث نظامك إلى أحدث إصدار',
        'others' => 'أخرى',
    ],
    'saving' => 'جار الحفظ...',
    'generating_media_thumbnails' => 'جار إنشاء صور مصغرة للوسائط...',
    'website_tracking' => [
        'title' => 'تتبع الموقع',
        'description' => 'ضبط تتبع الموقع',
        'google_tag_id' => 'هوية علامة Google',
        'google_tag_id_placeholder' => 'مثال: G-123ABC4567',
        'google_tag_code' => 'كود علامة Google',
    ],    
];
