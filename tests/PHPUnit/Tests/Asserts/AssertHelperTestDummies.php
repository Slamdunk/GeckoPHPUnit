<?php

declare(strict_types=1);

/*
 * This file is part of the GeckoPackages.
 *
 * (c) GeckoPackages https://github.com/GeckoPackages
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use GeckoPackages\PHPUnit\Asserts\AliasAssertTrait;
use GeckoPackages\PHPUnit\Asserts\FileExistsAssertTrait;
use GeckoPackages\PHPUnit\Asserts\FileSystemAssertTrait;
use GeckoPackages\PHPUnit\Asserts\XMLAssertTrait;

/**
 * @internal
 *
 * @author SpacePossum
 */
final class TestDummy
{
    use AliasAssertTrait;
    use FileExistsAssertTrait;
    use FileSystemAssertTrait;
    use XMLAssertTrait;
}
