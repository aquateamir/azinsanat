<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "شرکت مهندسی  سورین آز تک نام ", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'شرکت مهندسی سورین آز پیشرو در تجهیز مراکز آزمایشگاهی و ارائه دهنده هودهای آزمایشگاهی خاص', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => true, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => true, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'شرکت مهندسی  سورین آز تک نام', // set false to total remove
            'description' => 'شرکت مهندسی سورین آز پیشرو در تجهیز مراکز آزمایشگاهی و ارائه دهنده هودهای آزمایشگاهی خاص', // set false to total remove
            'url'         => true, // Set null for using Url::current(), set false to total remove
            'type'        => true,
            'site_name'   => true,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'شرکت مهندسی  سورین آز تک نام', // set false to total remove
            'description' => 'شرکت مهندسی سورین آز پیشرو در تجهیز مراکز آزمایشگاهی و ارائه دهنده هودهای آزمایشگاهی خاص', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
