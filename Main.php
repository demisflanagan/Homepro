<?php

    namespace IdnoPlugins\Homepro {

        class Main extends \Idno\Common\Plugin {
		function registerPages() {
                // Register the callback URL
                    \Idno\Core\site()->addPageHandler('homepro/callback','\IdnoPlugins\Homepro\Pages\Callback');
                // Register admin settings
                    \Idno\Core\site()->addPageHandler('admin/homepro','\IdnoPlugins\Homepro\Pages\Admin');
 
                /** Template extensions */
                // Add menu items to account & administration screens
                    \Idno\Core\site()->template()->extendTemplate('admin/menu/items','admin/homepro/menu');
                    \Idno\Core\site()->template()->extendTemplate('account/menu/items','account/homepro/menu');
            }

        }

    }
