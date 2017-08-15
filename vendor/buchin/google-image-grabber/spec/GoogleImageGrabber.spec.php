<?php
use Buchin\GoogleContentGrabber\GoogleContentGrabber;

describe('GoogleContentGrabber', function ()
{
	describe('::grab($keyword, $options)', function ()
	{
		it('get images data from google images', function()
		{
			$images = GoogleContentGrabber::grab('makan nasi');

			expect(count($images))->toBeGreaterThan(0);
		});
	});
});