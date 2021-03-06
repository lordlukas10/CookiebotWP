<?php

namespace cookiebot_addons\tests\integration\addons;

class Test_Google_Analytics_Async extends Addons_Base {
	
	public function setUp() {
	
	}
	
	/**
	 * This will validate if the hook for "google_analytics_async" still exists
	 *
	 * @since 2.1.0
	 */
	public function test_hooks() {
		$file = WP_PLUGIN_DIR . '/google-analytics-async/google-analytics-async.php';
		
		if( file_exists( $file ) ) {
			$content = $this->curl_get_content( $file );
			
			$this->assertNotFalse( strpos( $content, 'add_action( \'wp_head\', array( &$this, \'tracking_code_output\' ) );') );
		}
	}
}