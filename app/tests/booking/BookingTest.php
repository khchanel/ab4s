<?php

class BookingTest extends TestCase {

	public function testShowBookingDetailTest() {
		$uuid = 'SBX10241';

		//$response = $this->call('GET', 'booking/SBX10241');
		$crawler = $this->client->request('GET', "booking/$uuid");

		$this->assertTrue($this->client->getResponse()->isOk());

		$this->assertCount(1, $crawler->filter("#listing-id:contains('$uuid')"));
		$this->assertCount(1, $crawler->filter('body:contains("Location: Sydney")'));
		$this->assertCount(5, $crawler->filter('.slides > li'));
	}
}
