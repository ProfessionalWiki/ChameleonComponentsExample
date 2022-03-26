<?php

namespace Skins\Chameleon\Components;

class Sidebar extends Component {

	public function getHtml() {
		return $this->getSkinTemplate()->getMsg( 'MyMenu' )->parse();
	}

	public function getResourceLoaderModules() {
		return [ 'ext.SimpleBatchUpload' ];
	}

}
