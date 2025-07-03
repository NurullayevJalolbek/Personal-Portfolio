<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            // 'messaging' => [
            //     'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID', 433142037410),
            //     // Yoki to‘g‘ridan-to‘g‘ri '433142037410' ni kiriting
            // ],

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => env('FIREBASE_CREDENTIALS', env('GOOGLE_APPLICATION_CREDENTIALS')),

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firestore Component
             * ------------------------------------------------------------------------
             */

            'firestore' => [

                /*
                 * If you want to access a Firestore database other than the default database,
                 * enter its name here.
                 *
                 * By default, the Firestore client will connect to the `(default)` database.
                 *
                 * https://firebase.google.com/docs/firestore/manage-databases
                 */

                // 'database' => env('FIREBASE_FIRESTORE_DATABASE'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
            // 'credentials' => [
            //     "type" => "service_account",
            //     "project_id" => "dav-aktiv-mi",
            //     "private_key_id" => "21cc1ab83dd45a1adb3b39f5891b09a6ce9c879c",
            //     "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQCn9+pwho6XIFgZ\nWn3/YiCheuEBzVCyw8cDtucULTBq5Atx2dohL8DRquEC8HqB03WjEqm9glHIOZhh\nN2gDZBqgTw+FMkPrm4lqbd2Szf9A833J60Zy91LQixHW1TOR79v3iuKSOwUu2Nr2\n/ys82PUfGzKnVmQNOLZ6vGkGALn2ISH7AMgPhrKuNf/fw8wSj2+5DlvtsEQ5QlKN\ntW0hdNqW7LIuYFOkFym48D2D62FR7DYjUuwxOTVYJPAZFZsJlSbaxED5LKZ6KdwG\nn99zbTid0ZlmFHZwFBiMSVTc1YJBauS03/OTuV0B6y7Samsf3HPwuuud6NKFJzkl\n9DvkjNGfAgMBAAECggEADaHiZiWVlxBp9gzRIxQMv+5gKqxGO2wGT/fdQ1bzkglW\nIHRk7sKYbKvovTtVRgoqhwSxwA6+oniCNImxqGzMeGxSPyY4OvwRqBCopgyQBe59\nLBErU5NdJk3TMdN17wc/nBSqlOGzZvz0sI0/Lh4RruefMdOiJSyQKt/1yiXu8dnW\nx+DaemzEceSxQMTnM8zgiYl6/ExuzUP30VSLs5DOOmYX7LENu/COvMxSebP+yG/1\nHLONpkWlnSnRbZ6OQYUdpcSZhixaN7AuGDmvLIMHhqxk6vsszduElN7dQwktajkj\nRgKvyebnPSPMdTgEdXMC0NOr7GqKTQpMnByarFSLiQKBgQDhg7muIX14kXGuzevm\nsE/b5+B6p7hdxwgLlQsFbgEVmaF8+zWIEqsieiJbVLMEble2+ZOZH+7neTIQPFk6\nK02OO+C9gXE93+CRnvM6J/fM7HqviW1tgNRKG4p/gnn9AkWGBwfnwHGpz82DVwoP\nR7JAUdA1SRSSQg+AMiyAAFQpWwKBgQC+rLgLMFix3+Bqy/O3VpjjpM2Ym8+ccBKp\nq5fTXGjzR6+vswxCvJR49TYqqoFBYuUJ77gvODZup/bXOd3uOHTIFPAoUlds1gs2\n2E7GNK8HmRYOCYEq3Tu+DsfgFzIn20BAD8oAiOMOA4Ze2/L57UVhyNy39qpws00p\nsxWFddmoDQKBgQDPk5RCOAlqBVaC9ICDYx7e59y0idUmXKGHJ7VxVgQhgbwncoOf\nsK9dmNYvAxOUrIyIm8nEVKRu5Bu03hezd1B37526UX+O2Je48nonucpaEgILuY/E\nD6VYYWlmXQ80V/bum2Ina/gzulcM4f0ce34TvjrMEWyiA7SI56YWXDcbqQKBgQCw\nKBvkYmce9kl8AS8Ji5y2e7RiMFjvG29yh5A9+hsP34PFXDKQmW7GDS1c36eIxBf8\nRRcxsMpBEzZugwyxIEFr9EQnzGLurxUvN0oXveaSq3D/yPInqrqeDUPFmUiCIAJM\n7Qlf0xeKA+GpU6U4F2hJPewEnYO7mTtJsiTI5ycOJQKBgQDLydN1BACdVrRw7ANS\nTCReeAq1kWBtKU/5zreyq7D/Yo7A2MOlfQd5KUhN/pU72acEWP+qx8AKDAW445cV\nLX/nVu9uBeYyJ7/P01ZkVuxuAKBdelFleJGI1mzTMKxfLYIFLGbzaNTOZCW16uso\nNUfNFTdh2hdFkpP31BjImQA2Mg==\n-----END PRIVATE KEY-----\n",
            //     "client_email" => "firebase-adminsdk-idakw@dav-aktiv-mi.iam.gserviceaccount.com",
            //     "client_id" => "106956448746199235214",
            //     "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
            //     "token_uri" => "https://oauth2.googleapis.com/token",
            //     "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
            //     "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-idakw%40dav-aktiv-mi.iam.gserviceaccount.com",
            //     "universe_domain" => "googleapis.com"
            // ]
        ],
    ],
];
