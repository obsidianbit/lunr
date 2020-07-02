<?php

/**
 * Get Bing search results
 *
 * @package : Bing;
 * @version : 1.0;
 * @license : MIT License (MIT);
 * @author  : Kenan Ajkunic;
 * @link    : https://github.com/obsidianbit;
 * @param     query;
 * @return    Mixed;
 */

function Bing($query) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://www.bing.com/search?q=' . $query);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);

	$domResult = new simple_html_dom();
	$domResult->load($result);

	foreach($domResult->find('li[class=b_algo]') as $link) {
		echo '<div class="card"><div class="card-body">' . $link . '<p class="float-right">Bing</p></div></div><br>';
	}
}

?>
