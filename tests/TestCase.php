<?php

namespace Tests;

use Tests\Traits\HasAssetFactory;

class TestCase extends \PHPUnit\Framework\TestCase
{
    use HasAssetFactory;

    public function tearDown(): void
    {
        parent::setUp(); //

        $this->destroyFakeDirectory();
    }

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->destroyFakeDirectory();
    }
}