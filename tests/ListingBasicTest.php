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
    public function listingMustRecieveData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
        $listing->__construct();
    }
    
    /** @test */
    public function listingMustContainId()
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
    public function listingMustContainTitle()
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
    public function createObjectWithOnlyIdAndTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }

    /** @test */
    public function returnBasicStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('basic', $listing->getStatus());
    }

    /** @test */
    public function returnId()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['id'], $listing->getId());
    }
    
    /** @test */
    public function returnTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['title'], $listing->getTitle());
    }

    /** @test */
    public function returnWebsite()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'www.treehouse.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('http://'.$data['website'], $listing->getWebsite());
    }

    /** @test */
    public function returnEmail()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'email' => 'me@me.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['email'], $listing->getEmail());
    }

    /** @test */
    public function returnTwitter()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'twitter' => 'twitterhandle',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['twitter'], $listing->getTwitter());
    }

    /** @test */
    public function arrayMethodContainsIdTitleWebsiteEmailAndTwitter()
    {
        $data  = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'www.treehouse.com',
            'email' => 'me@me.com',
            'twitter' => 'twitterhandle'
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