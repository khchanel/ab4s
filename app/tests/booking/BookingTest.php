<?php

class BookingTest extends TestCase {

    public function testShowBookingDetail() {
        $uuid = 'SBX10241';

        //$response = $this->call('GET', 'booking/SBX10241');
        $crawler = $this->client->request('GET', "booking/$uuid");

        $this->assertTrue($this->client->getResponse()->isOk());

        $this->assertCount(1, $crawler->filter("#listing-id:contains('$uuid')"));
        $this->assertCount(1, $crawler->filter('body:contains("Location: Sydney")'));
        $this->assertCount(5, $crawler->filter('.slides > li'));
    }

    public function testShowBookingDetailWithoutImages() {
        $uuid = 'ZTEST01';

        $crawler = $this->client->request('GET', "booking/$uuid");

        $this->assertTrue($this->client->getResponse()->isOk());

        $this->assertCount(1, $crawler->filter("#listing-id:contains('$uuid')"));
        $this->assertCount(0, $crawler->filter('.slides > li'));
        $this->assertCount(0, $crawler->filter('#img-slider'));
    }

    public function testBookingGetImages() {
        $id = 'SBX10241';
        $booking = Booking::where('uuid', '=', $id)->first();

        $this->assertNotEmpty($booking, "Booking $id cant be found");

        $imgs = $booking->getImages();

        $this->assertCount(5, $imgs, "Booking $id img count is wrong");
    }
}
