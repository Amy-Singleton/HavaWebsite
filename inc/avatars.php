<?php
if (!get_option('show_avatars')){?>
	<style>
		.vcard::before {content: '\f110';}
	</style>
<?php   
}
?>