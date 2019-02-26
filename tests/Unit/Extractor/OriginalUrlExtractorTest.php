<?php

declare(strict_types=1);

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\SeoBundle\Tests\Unit\Extractor;

use Symfony\Cmf\Bundle\SeoBundle\Extractor\OriginalUrlExtractor;
use Symfony\Cmf\Bundle\SeoBundle\Extractor\OriginalUrlReadInterface;
use Symfony\Cmf\Bundle\SeoBundle\SeoAwareInterface;

class OriginalUrlExtractorTest extends BaseTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->extractor = new OriginalUrlExtractor();
        $this->extractMethod = 'getSeoOriginalUrl';
        $this->metadataMethod = 'setOriginalUrl';
    }

    public function getSupportsData()
    {
        return [
            [$this->createMock(OriginalUrlReadInterface::class)],
            [$this->createMock(SeoAwareInterface::class), false],
        ];
    }
}
