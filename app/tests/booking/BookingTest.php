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
        $this->assertCount(1, $crawler->filter('.slides > li'));
        $imgsrc = $crawler->filter('#img-slider > li > img')->attr('src');
        $this->assertContains('no-booking-img.jpg', $imgsrc, 'Fail to show no-booking-img.jpg');
    }

    public function testBookingGetImages() {
        $id = 'SBX10241';
        $booking = Booking::where('uuid', '=', $id)->first();
        $this->assertNotEmpty($booking, "Booking $id cant be found");
        $imgs = $booking->images();
        $this->assertCount(5, $imgs, "Booking $id img count is wrong");


        $id = 'ZTEST01';
        $booking = Booking::where('uuid', '=', $id)->first();
        $this->assertNotEmpty($booking, "Booking $id cant be found");
        $imgs = $booking->images();
        $this->assertCount(1, $imgs, "Booking $id img count is wrong");
    }
}
