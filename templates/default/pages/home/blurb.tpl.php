<?php

	if ($vars['offset'] == 0) {
		$user = $this->getInput('homepro_username');
//    $user = \Idno\Entities\User::getByHandle('demisflanagan');
    $t = $this;
    echo $t->__(['user' => $user])->draw('entity/User');
	}
