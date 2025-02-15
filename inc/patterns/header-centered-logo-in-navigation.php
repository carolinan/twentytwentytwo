<?php
/**
 * Header with centered Logo in Navigation block pattern
 */
return array(
	'title'      => __( 'Header with centered Logo in Navigation', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:site-logo {"width":90} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->',
);
