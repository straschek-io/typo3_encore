<?php

namespace Ssch\Typo3Encore\Integration;

/**
 * This file is part of the "typo3_encore" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Ssch\Typo3Encore\Asset\EntrypointLookupInterface;

interface EntryLookupFactoryInterface
{
    /**
     * @return array|EntrypointLookupInterface[]
     */
    public function getCollection(): array;
}
