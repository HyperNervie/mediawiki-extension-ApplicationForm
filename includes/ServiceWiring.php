<?php
use MediaWiki\MediaWikiServices;

return [
	'ApplicationForm.Config' => static function ( MediaWikiServices $services ) {
		return $services->getService( 'ConfigFactory' )
				->makeConfig( applicationform );
	},
];
