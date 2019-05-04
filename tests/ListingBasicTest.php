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
    //Ensure that getStatus method returns 'basic'.
    public function returnBasicStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('basic', $listing->getStatus());
    }
}