<?php

    /**
     * Plugin administration
     */

    namespace IdnoPlugins\Homepro\Pages {

        /**
         * Default class to serve the homepage
         */
        class Admin extends \Idno\Common\Page
        {

            function getContent()
            {
                $this->adminGatekeeper(); // Admins only
                $t = \Idno\Core\site()->template();
                $body = $t->draw('admin/homepro');
                $t->__(['title' => 'Homepro', 'body' => $body])->drawPage();
            }

            function postContent() {
                $this->adminGatekeeper(); // Admins only
                $homepro_username = $this->getInput('homepro_username');
                \Idno\Core\site()->config->config['homepro'] = [
                    'homepro_username' => $homepro_username,
                ];
                \Idno\Core\site()->config()->save();
                \Idno\Core\site()->session()->addMessage('Your Homepro username was saved.');
                $this->forward('/admin/homepro/');
            }

        }

    }
