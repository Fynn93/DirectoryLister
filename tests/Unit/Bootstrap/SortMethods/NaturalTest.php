<?php

namespace Tests\Unit\Bootstrap\SortMethods;

use App\Bootstrap\SortMethods\Natural;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;

class NaturalTest extends TestCase
{
    public function test_it_can_sort_by_natural_file_name(): void
    {
        $finder = $this->createMock(Finder::class);
        $finder->expects($this->once())->method('sortByName')->with(true);

        (new Natural)($finder);
    }
}
