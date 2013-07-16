<?php

    namespace IdnoPlugins\Homepro {

        class Main extends \Idno\Common\Plugin {
		function registerPages() {
                // Register admin settings
                    \Idno\Core\site()->addPageHandler('admin/homepro','\IdnoPlugins\Homepro\Pages\Admin');
 
                /** Template extensions */
                // Add menu items to administration screen
                    \Idno\Core\site()->template()->extendTemplate('admin/menu/items','admin/homepro/menu');
            }

        }

    }
