<?php

namespace App\Model;

use Nette;
use App\Model\Unit;
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../app/model/Unit.php";

class UnitTest extends TestCase
{
    public function testXyz()
    {
        $dbMock = $this->createMock(Nette\Database\Context::class);
        $unit = new Unit($dbMock);
        // do stuff
    }
}
