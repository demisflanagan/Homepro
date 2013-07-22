<?php

if ($vars['offset'] == 0) {
   
   // Check if username exists in the Admin->Homeplug tab and get it:
   if ($username = htmlspecialchars(\Idno\Core\site()->config()->homepro['homepro_username'])) {
      
      //check if username is valid or not:
      if ($user = \Idno\Entities\User::getByHandle( $username )) {
         $t = $this;
         echo $t->__(['user' => $user])->draw('entity/User');
      }
   }
}
