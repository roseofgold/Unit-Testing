<?php

/**
 * User: Melinda Serven
 * Date: 2019-05-04
 * Time: 16:00
 */

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    public function returnPremiumStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'status' => 'premium'
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals('premium', $listing->getStatus());
    }

    /** @test */
    public function returnPremiumDescription()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'description' => 'This is a short description that should be used.',
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals($data['description'],$listing->getDescription());
    }

    /** @test */
    public function displayTagsAllowed()
    {
        $tags = '&lt;p&gt;&lt;br&gt;&lt;b&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;';
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals($tags,$listing->displayAllowedTags());
    }
}