<?php

return [
    'title' => 'Paramètres',
    'email_setting_title' => 'Paramètres de l\'e-mail',
    'general' => [
        'theme' => 'Theme',
        'description' => 'Paramétrage des informations sur le site',
        'title' => 'General',
        'general_block' => 'Informations générales',
        'rich_editor' => 'Rich Editor',
        'site_title' => 'Titre du site',
        'admin_email' => 'Email de l\'administrateur',
        'seo_block' => 'SEO Configuration',
        'seo_title' => 'SEO Title',
        'seo_description' => 'SEO Description',
        'webmaster_tools_block' => 'Google Webmaster Tools',
        'placeholder' => [
            'site_title' => 'Site Title (maximum 120 characters)',
            'admin_email' => 'Admin Email',
            'seo_title' => 'SEO Title (maximum 120 characters)',
            'seo_description' => 'SEO Description (maximum 120 characters)',
            'google_analytics' => 'Google Analytics',
        ],
        'cache_admin_menu' => 'Cache admin menu?',
        'enable_send_error_reporting_via_email' => 'Possibilité d\'envoyer des rapports d\'erreur par courrier électronique ?',
        'time_zone' => 'Timezone',
        'default_admin_theme' => 'Thème d\'administration par défaut',
        'enable_change_admin_theme' => 'Permettre de changer le thème de l\'administration ?',
        'enable' => 'Autoriser',
        'disable' => 'Désactiver',
        'enable_cache' => 'Enable cache?',
        'disable_cache_in_the_admin_panel' => 'Désactiver le cache dans le panneau d\'administration ?',
        'cache_time' => 'Cache time (minutes)',
        'enable_cache_site_map' => 'Enable cache site map?',
        'cache_time_site_map' => 'Cache Time Site map (minutes)',
        'admin_logo' => 'Logo de l\'administration',
        'admin_favicon' => 'Favicon de l\'administrateur',
        'admin_title' => 'Titre de l\'administrateur',
        'admin_title_placeholder' => 'Titre affiché dans l\'onglet du navigateur',
        'cache_block' => 'Cache',
        'admin_appearance_title' => 'Apparence de l\'administrateur',
        'admin_appearance_description' => 'Paramétrage de l\'apparence de l\'administrateur, comme l\'éditeur, la langue...',
        'seo_block_description' => 'Setting site title, site meta description, site keyword for optimize SEO',
        'webmaster_tools_description' => 'Google Webmaster Tools (GWT) is free software that helps you manage the technical side of your website',
        'cache_description' => 'Configurer le cache du système pour optimiser la vitesse',
        'yes' => 'Oui',
        'no' => 'Non',
        'show_on_front' => 'Votre page d\'accueil affiche',
        'select' => '— Select —',
        'show_site_name' => 'Afficher le nom du site après le titre de la page, en le séparant par "-" ?',
        'locale' => 'Langue du site',
        'locale_direction' => 'Front site language direction',
        'admin_locale_direction' => 'Direction de la langue d\'administration',
        'admin_login_screen_backgrounds' => 'Fonds d\'écran de connexion (~1366x768)',
        'minutes' => 'minutes',
    ],
    'email' => [
        'subject' => 'Objet:',
        'content' => 'Contenu',
        'title' => 'Setting for email template',
        'description' => 'Email template using HTML & system variables.',
        'reset_to_default' => 'Rétablissement des valeurs par défaut',
        'back' => 'Retour aux paramètres',
        'reset_success' => 'Réinitialisation par défaut réussie',
        'confirm_reset' => 'Modèle d\'e-mail de confirmation de réinitialisation ?',
        'confirm_message' => 'Souhaitez-vous vraiment réinitialiser ce modèle d\'e-mail par défaut ?',
        'continue' => 'Continuer',
        'sender_name' => 'Nom de l\'expéditeur',
        'sender_name_placeholder' => 'Nom',
        'sender_email' => 'Email de l\'expéditeur',
        'mailer' => 'Mailer',
        'port' => 'Port',
        'port_placeholder' => 'Ex: 587',
        'host' => 'Host',
        'host_placeholder' => 'Ex: smtp.gmail.com',
        'username' => 'Nom d\'utilisateur',
        'username_placeholder' => 'Nom d\'utilisateur pour se connecter au serveur de messagerie',
        'password' => 'Mot de passe',
        'password_placeholder' => 'Mot de passe pour se connecter au serveur de messagerie',
        'encryption' => 'Encryption',
        'mail_gun_domain' => 'Domain',
        'mail_gun_domain_placeholder' => 'Domain',
        'mail_gun_secret' => 'Secret',
        'mail_gun_secret_placeholder' => 'Secret',
        'mail_gun_endpoint' => 'Endpoint',
        'mail_gun_endpoint_placeholder' => 'Endpoint',
        'log_channel' => 'Log channel',
        'sendmail_path' => 'Sendmail Path',
        'encryption_placeholder' => 'Encryption: ssl or tls',
        'ses_key' => 'Key',
        'ses_key_placeholder' => 'Key',
        'ses_secret' => 'Secret',
        'ses_secret_placeholder' => 'Secret',
        'ses_region' => 'Region',
        'ses_region_placeholder' => 'Region',
        'postmark_token' => 'Token',
        'postmark_token_placeholder' => 'Token',
        'template_title' => 'Email templates',
        'template_description' => 'Base templates for all emails',
        'template_header' => 'Email template header',
        'template_header_description' => 'Template for header of emails',
        'template_footer' => 'Email template footer',
        'template_footer_description' => 'Template for footer of emails',
        'default' => 'Default',
        'using_queue_to_send_mail' => 'Utilisation d\'une file d\'attente pour l\'envoi d\'e-mails (il faut d\'abord configurer la file d\'attente) https://laravel.com/docs/queues#supervisor-configuration)',
    ],
    'media' => [
        'title' => 'Media',
        'driver' => 'Chauffeur',
        'description' => 'Settings for media',
        'aws_access_key_id' => 'AWS Access Key ID',
        'aws_secret_key' => 'AWS Secret Key',
        'aws_default_region' => 'AWS Default Region',
        'aws_bucket' => 'AWS Bucket',
        'aws_url' => 'AWS URL',
        'aws_endpoint' => 'AWS Endpoint (Optional)',
        'do_spaces_access_key_id' => 'DO Spaces Access Key ID',
        'do_spaces_secret_key' => 'DO Spaces Secret Key',
        'do_spaces_default_region' => 'DO Spaces Default Region',
        'do_spaces_bucket' => 'DO Spaces Bucket',
        'do_spaces_endpoint' => 'DO Spaces Endpoint',
        'do_spaces_cdn_enabled' => 'Is DO Spaces CDN enabled?',
        'media_do_spaces_cdn_custom_domain' => 'Do Spaces CDN custom domain',
        'media_do_spaces_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'wasabi_access_key_id' => 'Wasabi Access Key ID',
        'wasabi_secret_key' => 'Wasabi Secret Key',
        'wasabi_default_region' => 'Wasabi Default Region',
        'wasabi_bucket' => 'Wasabi Bucket',
        'wasabi_root' => 'Wasabi Root',
        'default_placeholder_image' => 'Default placeholder image',
        'enable_chunk' => 'Activer le téléchargement par morceaux ?',
        'chunk_size' => 'Taille du morceau (octets)',
        'chunk_size_placeholder' => 'Default: 1048576 ~ 1MB',
        'max_file_size' => 'Taille maximale du fichier (MB)',
        'max_file_size_placeholder' => 'Default: 1048576 ~ 1GB',
        'enable_watermark' => 'Activer le filigrane ?',
        'watermark_source' => 'Watermark image',
        'watermark_size' => 'Size of watermark (%)',
        'watermark_size_placeholder' => 'Default: 10 (%)',
        'watermark_opacity' => 'Watermark Opacity (%)',
        'watermark_opacity_placeholder' => 'Default: 70 (%)',
        'watermark_position' => 'Watermark position',
        'watermark_position_x' => 'Watermark position X',
        'watermark_position_y' => 'Watermark position Y',
        'watermark_position_top_left' => 'Top left',
        'watermark_position_top_right' => 'Top right',
        'watermark_position_bottom_left' => 'Bottom left',
        'watermark_position_bottom_right' => 'Bottom right',
        'watermark_position_center' => 'Center',
        'turn_off_automatic_url_translation_into_latin' => 'Turn off automatic URL translation into Latin?',
        'bunnycdn_hostname' => 'Hostname',
        'bunnycdn_zone' => 'Nom de la zone (Le nom de votre zone de stockage)',
        'bunnycdn_key' => 'FTP & API Access Password (The storage zone API Access Password)',
        'bunnycdn_region' => 'Region (La région de la zone de stockage)',
        'optional' => 'En option',
        'sizes' => 'Media thumbnails sizes',
        'media_sizes_helper' => 'Réglez la largeur ou la hauteur à 0 si vous voulez seulement recadrer en largeur ou en hauteur. Il faut cliquer sur "Générer des vignettes" pour appliquer les changements.',
        'width' => 'Largeur',
        'height' => 'Hauteur',
        'default_size_value' => 'Default: :size',
        'all' => 'Tous',
        'media_folders_can_add_watermark' => 'Ajout d\'un filigrane pour les images contenues dans les dossiers :',
        'max_upload_filesize' => 'Taille maximale des fichiers téléchargés (MB)',
        'max_upload_filesize_placeholder' => 'Default: :size, must less than :size.',
        'max_upload_filesize_helper' => 'Votre serveur permet de télécharger des fichiers au maximum :size, vous pouvez modifier cette valeur pour limiter la taille des fichiers téléchargés.',
    ],
    'license' => [
        'license_code' => 'Code d\'achat',
        'email' => 'Acheteur',
    ],
    'field_type_not_exists' => 'Ce type de champ n\'existe pas',
    'save_settings' => 'Sauvegarder les paramètres',
    'template' => 'Template',
    'description' => 'Description',
    'enable' => 'Autoriser',
    'send' => 'Envoyer',
    'test_email_description' => 'Pour envoyer un courriel de test, assurez-vous que vous avez mis à jour votre configuration pour envoyer des courriels !',
    'test_email_input_placeholder' => 'Saisissez l\'adresse électronique à laquelle vous souhaitez envoyer l\'e-mail de test.',
    'test_email_modal_title' => 'Envoyer un e-mail de test',
    'test_send_mail' => 'Envoyer un mail test',
    'test_email_send_success' => 'L\'envoi de l\'e-mail a réussi !',
    'locale_direction_ltr' => 'De gauche à droite',
    'locale_direction_rtl' => 'De droite à gauche',
    'saving' => 'Sauver...',
    'emails_warning' => 'Vous pouvez ajouter jusqu\'à :count emails',
    'email_add_more' => 'Plus d\'informations',
    'generate' => 'Generate',
    'generate_thumbnails' => 'Generate thumbnails',
    'generate_thumbnails_success' => 'La génération des vignettes a réussi. :count les fichiers sont générés !',
    'generate_thumbnails_error' => 'Nous ne sommes pas en mesure de régénérer les vignettes pour ces fichiers :count files !',
    'generate_thumbnails_description' => 'Êtes-vous sûr de vouloir re-générer les vignettes de toutes les images ? Cela prendra du temps, alors ne quittez pas cette page, attendez que ce soit terminé.',
    'enable_chunk_description' => 'Le téléchargement par morceaux est utilisé pour télécharger des fichiers de grande taille.',
    'watermark_description' => 'ATTENTION : Le filigrane est uniquement ajouté aux nouvelles images téléchargées, il ne sera pas ajouté aux images existantes. Désactiver le filigrane ne supprimera pas le filigrane des images existantes.',
];
