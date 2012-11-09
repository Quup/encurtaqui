<?php

namespace Encurtaqui\Entity;

class PageTeste extends \PHPUnit_Framework_TestCase
{
	public function assertPreConditions()
	{
		$this->assertTrue(
			class_exists($class = 'Encurtaqui\Entity\Page'),
			'Class not found: '. $class
		);
		// Para rolar os testes será necessário passar por essas pré-condições
	}

	public function testInstantiationithoutArgumentsShouldWork()
	{
		$instance = new Page();
		$this->assertInstanceOf(
			'Encurtaqui\Entity\Page',
			$instance
		);
	}

	/**
	 * @depends testInstantiationithoutArgumentsShouldWork
	 */

	public function testSetUrlDestinationWithValidDataShouldWork()
	{
		$instance 	= new Page();
		$url 		= "http://google.com.br";
		$return 	= $instance->setUrlDestination($url);
		$this->assetEquals(
			$instance,
			$return,
			"Returned a value should be the same instance for fluent interface"
		);
		$this->assertAttributeEquals(
			$url,
			'urlDestination',
			$instance,
			'Attribute was not correctly set'
		);
	}


	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Url of destination should be a real URL. Empty url isn't allowed
	 */

	public function testSetUrlDestinationWithinvalidDataShouldThrownAnException()
	{
		$invalidUrl = '';
		$instance = new Page();
		$instance->setUrlDestination($invalidUrl);
	}

}