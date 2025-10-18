<?php

namespace Miraheze\CreateWiki\Exceptions;

class WikiAlreadyExistsError extends ErrorBase {

	public function __construct( string $dbname ) {
		parent::__construct( 'createwiki-error-alreadyexists', [ $dbname ] );
	}
}
