<?php

/**
 * Get Google search results
 *
 * @package : Google;
 * @version : 1.0;
 * @license : MIT License (MIT);
 * @author  : Kenan Ajkunic;
 * @link    : https://github.com/obsidianbit;
 * @param     query;
 * @return    Mixed;
 */

function Google($query) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=' . urlencode($query));
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);
	
	$domResult = new simple_html_dom();
	$domResult->load($result);
	
	$count = count($domResult->find('a[href^=/url?]'));
	foreach($domResult->find('div.kCrYT[1] a') as $link) {
		if (--$count <= 0)
			break;
		$link = preg_replace('/(\/url\?q=)|(Ag|BA|Bq|Bg|Bw|BQ|CA|CQ|Aw|%3Fhl%3Det|&amp;sa=U|&amp;ved=.{45}|&amp;usg=.{28})/m', '', $link);
		echo '<div class="card"><div class="card-body">' . $link . '<p class="float-right">Google</p></div></div><br>';
	}
}

?>
