<?php

class IdealityTest extends WebTestCase
{
	public $fixtures=array(
		'idealities'=>'Ideality',
	);

	public function testShow()
	{
		$this->open('?r=ideality/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=ideality/create');
	}

	public function testUpdate()
	{
		$this->open('?r=ideality/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=ideality/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=ideality/index');
	}

	public function testAdmin()
	{
		$this->open('?r=ideality/admin');
	}
}
