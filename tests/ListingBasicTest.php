<?php

/**
 * User: Melinda Serven
 * Date: 2019-05-04
 * Time: 15:00
 */

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function listingBasicMustRecieveData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
        $listing->__construct();
    }
    
    /** @test */
    public function listingBasicMustContainId()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $data = [
            'id' => NULL,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $listing->setValues('',$this->getId());
    }

    /** @test */
    public function listingBasicMustContainTitle()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $data = [
            'id' => 1,
            'title' => NULL,
        ];
        $listing = new ListingBasic($data);
        $listing->setValues('',$this->getTitle());
    }

    /** @test */
    public function listingBasicCreateWithMinimum()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }

    /** @test */
    public function listingBasicCheckStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('basic', $listing->getStatus());
    }

    /** @test */
    public function listingBasicCheckId()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(1, $listing->getId());
    }
    
    /** @test */
    public function listingBasicCheckTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('Test Title', $listing->getTitle());
    }

    /** @test */
    public function listingBasicCheckWebsite()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'www.treehouse.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('http://www.treehouse.com', $listing->getWebsite());
    }

    /** @test */
    public function listingBasicCheckEmail()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'email' => 'me@me.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('me@me.com', $listing->getEmail());
    }

    /** @test */
    public function listingBasicCheckTwitter()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'twitter' => 'twitterhandle',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('twitterhandle', $listing->getTwitter());
    }

    /** @test */
    public function listingBasicToArrayContainsIdTitleWebsiteEmailAndTwitter()
    {
        $data  = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'www.treehouse.com',
            'email' => 'me@me.com',
            'twitter' => 'twitterhandle',
        ];
        $listing = new ListingBasic($data);
        $this->assertIsArray($listing->toArray());
        $this->assertArrayHasKey('id', $listing->toArray());
        $this->assertArrayHasKey('title', $listing->toArray());
        $this->assertArrayHasKey('website', $listing->toArray());
        $this->assertArrayHasKey('email', $listing->toArray());
        $this->assertArrayHasKey('twitter', $listing->toArray());
    }
}