<?php

/**
 * User: Melinda Serven
 * Date: 2019-05-04
 * Time: 16:00
 */

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    public function returnFeaturedStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'status' => 'featured'
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals('featured', $listing->getStatus());
    }
}