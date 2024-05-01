<?php

return [
    'settings' => 'Ajustes',
    'name' => 'Tienda',
    'setting' => [
        'email' => [
            'title' => 'Comercio electrónico',
            'description' => 'Configuración de correo',
            'order_confirm_subject' => 'Asunto del correo electrónico de confirmación del pedido',
            'order_confirm_subject_placeholder' => 'El asunto del correo electrónico de confirmación enviado al cliente.',
            'order_confirm_content' => 'Contenido del correo electrónico de confirmación del pedido',
            'order_status_change_subject' => 'Asunto del correo electrónico al cambiar el estado del pedido',
            'order_status_change_subject_placeholder' => 'Asunto del correo electrónico al cambiar el estado del pedido enviado al cliente',
            'order_status_change_content' => 'Contenido del correo electrónico al cambiar el estado del pedido',
            'from_email' => 'Email de',
            'from_email_placeholder' => 'Correo electrónico para mostrar, ejemplo: contacto@nombredelatienda.com',
        ],
        'title' => 'Información básica',
        'state' => 'Estado',
        'city' => 'Ciudad',
        'country' => 'País',
        'select country' => 'Seleccione país...',
        'weight_unit_gram' => 'Gramos (g)',
        'weight_unit_kilogram' => 'Kilogramos (kg)',
        'height_unit_cm' => 'Centímetros (cm)',
        'height_unit_m' => 'Metros (m)',
        'store_locator_title' => 'Localización de tiendas',
        'store_locator_description' => 'Todas las listas de sus cadenas, tiendas principales, sucursales, etc. Las ubicaciones se pueden utilizar para realizar un seguimiento de las ventas y ayudarnos a configurar las tasas de impuestos a cobrar al vender productos.',
        'phone' => 'Teléfono',
        'address' => 'Dirección',
        'is_primary' => 'Primario?',
        'add_new' => 'Agregar',
        'or' => 'O',
        'change_primary_store' => 'Localiza la tienda',
        'other_settings' => 'Otros ajustes',
        'other_settings_description' => 'Configuración para carrito, revisión ...',
        'enable_cart' => '¿Habilitar carrito de compras?',
        'enable_tax' => '¿Habilitar impuestos?',
        'display_product_price_including_taxes' => '¿Mostrar el precio del producto con impuestos incluidos?',
        'enable_review' => '¿Habilitar respuestas de compra?',
        'enable_quick_buy_button' => '¿Habilitar el botón de compra rápida?',
        'quick_buy_target' => 'Activar compra rápida',
        'checkout_page' => 'Pagina de pago',
        'cart_page' => 'Página del carrito',
        'add_location' => 'Añadir lugar',
        'edit_location' => 'Editar ubicación',
        'delete_location' => 'Eliminar ubicación',
        'change_primary_location' => 'Cambiar la ubicación principal',
        'delete_location_confirmation' => '¿Está seguro de que desea eliminar esta ubicación? Esta acción no se puede deshacer.',
        'save_location' => 'Guardar dirección',
        'accept' => 'Aceptar',
        'select_country' => 'Seleccione un país...',
        'zip_code_enabled' => '¿Habilitar código postal?',
        'thousands_separator' => 'Separadora de miles',
        'decimal_separator' => 'Separador decimal',
        'separator_period' => 'Periodo (.)',
        'separator_comma' => 'Coma (,)',
        'separator_space' => 'Espacio ( )',
        'available_countries' => 'Países disponibles',
        'all' => 'Todo',
        'verify_customer_email' => '¿Verificar el correo electrónico del cliente?',
        'enable_guest_checkout' => '¿Habilitar el pago de invitado?',
        'height_unit_inch' => 'Pulgada',
        'minimum_order_amount' => 'Cantidad mínima para realizar un pedido :currency',
        'weight_unit_lb' => 'Libra (lb)',
        'weight_unit_oz' => 'Onza (oz)',
    ],
    'store_address' => 'Dirección de la tienda',
    'store_phone' => 'Teléfono de la tienda',
    'order_id' => 'ID Orden',
    'order_token' => 'Token de pedido',
    'customer_name' => 'Nombre',
    'customer_email' => 'Correo electrónico',
    'customer_phone' => 'Teléfono del cliente',
    'customer_address' => 'Dirección',
    'product_list' => 'Productos de la orden',
    'payment_detail' => 'Detalles de pago',
    'shipping_method' => 'Método de envío',
    'payment_method' => 'Método de pago',
    'standard_and_format' => 'Formato estandar',
    'standard_and_format_description' => 'Los estándares y formatos se utilizan para calcular cosas como precios de productos, pesos de envío y tiempos de pedido.',
    'change_order_format' => 'Editar formato del código de pedido (opcional)',
    'change_order_format_description' => 'El código de pedido predeterminado comienza en :number. Puede cambiar la cadena inicial o final para crear el código de pedido que desee, por ejemplo: "DH-: numero" o ": numero-A"',
    'start_with' => 'Empezar con',
    'end_with' => 'Terminar con',
    'order_will_be_shown' => 'Se mostrará su código de pedido',
    'weight_unit' => 'Unidad de peso',
    'height_unit' => 'Unidad de longitud / altura',
    'theme_options' => [
        'name' => 'Comercio',
        'description' => 'Opciones de diseño para comercio electrónico',
        'number_products_per_page' => 'Número de productos por página',
        'max_price_filter' => 'Precio máximo para filtrar',
        'logo_in_invoices' => 'Logotipo en facturas (el predeterminado es el logotipo principal)',
        'logo_in_the_checkout_page' => 'Logotipo en la página de pago (el predeterminado es el logotipo principal)',
        'number_of_cross_sale_product' => 'Número de productos de venta cruzada en la página de detalles del producto',
    ],
];
