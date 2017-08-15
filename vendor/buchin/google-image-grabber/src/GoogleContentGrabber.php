<?php namespace Buchin\GoogleContentGrabber;

use PHPHtmlParser\Dom;
use __;
/**
* 
*/
class GoogleContentGrabber
{
	
	public static function grab($keyword, $options = [])
	{
		$url = "https://www.google.com/search?q=" . urlencode($keyword) . "&source=lnms&tbm=isch&tbs=";
		$url = 'http://www.google.com/search?hl=en&q='.$keyword;

		$ua = \Campo\UserAgent::random([
		    'os_type' => ['Windows', 'OS X'],
		    'device_type' => 'Desktop'
		]);

		$options  = [
			'http' => [
				'method'     =>"GET",
				'user_agent' =>  $ua,
			],
			'ssl' => [
				"verify_peer"      => FALSE,
				"verify_peer_name" => FALSE,
			],
		];

		$context  = stream_context_create($options);

		$response = file_get_contents($url, FALSE, $context);


		$htmldom = new Dom;
		// $htmldom->loadStr($response, []);
		$htmldom->loadStr($response);
		foreach($htmldom->find('div.g') as $g)
			{
				/*
				 * each search results are in a list item with a class name 'g'
				 * we are seperating each of the elements within, into an array
				 * Summaries are stored in a span with a classname of 'st'
				 * Title are stored in a h3 with a classname of 'r'
				 */
				$item['title'] = isset($g->find('h3.r', 0)->innertext) ? $g->find('h3.r', 0)->innertext : '';
				$item['description'] = isset($g->find('span.st', 0)->innertext) ? $g->find('span.st', 0)->innertext : '';
				$result[] =  $item;
			}

		// $results = [];
		
		// foreach ($htmldom->find('.rg_di > .rg_meta') as $n => $dataset) {

			// $jsondata = $dataset->text;
			// $data = json_decode($jsondata);

		    // $results[$n]['keyword'] = $keyword;
		    // $results[$n]['slug'] = __::slug($keyword);

		    // $results[$n]['title'] = ucwords(__::slug($data->pt, ['delimiter' => ' ']));
		    // $results[$n]['alt'] = __::slug($data->s, ['delimiter' => ' ']);
		    
		    // $results[$n]['url'] = $data->ou;
		    // $results[$n]['filetype'] = $data->ity;
		    // $results[$n]['width'] = $data->ow;
		    // $results[$n]['height'] = $data->oh;
		    // $results[$n]['source'] = $data->ru;
		// }

		return $results;
	}
}