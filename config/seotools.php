<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => "Deprem Yardım Bekleyen Çağrılar", // set false to total remove
            'titleBefore' => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => 'Depremde göçük altında kalan insanların ve yakınlarının yardım çağrıları toplanıyor. Deprem illeri: Kahramanmaraş, Hatay, Gaziantep, Şanlıurfa, Malatya, Osmaniye, Adana, Kilis, Adıyaman, Diyarbakır', // set false to total remove
            'separator' => ' - ',
            'keywords' => [],
            'canonical' => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots' => env('APP_ENV') === 'production' ? 'index, follow' : 'noindex, nofollow',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Deprem Yardım Bekleyen Çağrılar', // set false to total remove
            'description' => 'Depremde göçük altında kalan insanların ve yakınlarının yardım çağrıları toplanıyor. Deprem illeri: Kahramanmaraş, Hatay, Gaziantep, Şanlıurfa, Malatya, Osmaniye, Adana, Kilis, Adıyaman, Diyarbakır', // set false to total remove
            'url' => null,
            'type' => false,
            'site_name' => false,
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card' => 'summary_large_image',
            'title' => 'Deprem Yardım Bekleyen Çağrılar',
            'description' => 'Depremde göçük altında kalan insanların ve yakınlarının yardım çağrıları toplanıyor. Deprem illeri: Kahramanmaraş, Hatay, Gaziantep, Şanlıurfa, Malatya, Osmaniye, Adana, Kilis, Adıyaman, Diyarbakır',
            'images' => [],
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title' => 'Deprem Yardım Bekleyen Çağrılar', // set false to total remove
            'description' => 'Depremde göçük altında kalan insanların ve yakınlarının yardım çağrıları toplanıyor. Deprem illeri: Kahramanmaraş, Hatay, Gaziantep, Şanlıurfa, Malatya, Osmaniye, Adana, Kilis, Adıyaman, Diyarbakır', // set false to total remove
            'url' => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type' => 'WebPage',
            'images' => [],
        ],
    ],
];
