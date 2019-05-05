<?php

/**
 * User: Melinda Serven
 * Date: 2019-05-04
 * Time: 20:30
 */

use PHPUnit\Framework\TestCase;

class ListingInactiveTest extends TestCase
{
    /** @test */
    public function listingInactiveRetrieveTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingInactive($data);
        $this->assertEquals('<strike>Test Title</strike>',$listing->getTitle());
    }

    /** @test */
    public function listingInactiveRetrieveWebsite()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingInactive($data);
        $this->assertEquals(NULL,$listing->getWebsite());
    }

    /** @test */
    public function listingInactiveRetrieveEmail()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingInactive($data);
        $this->assertEquals(NULL,$listing->getEmail());
    }
    
    /** @test */
    public function listingInactiveRetrieveTwitter()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
        ];
        $listing = new ListingInactive($data);
        $this->assertEquals(NULL,$listing->getTwitter());
    }
}