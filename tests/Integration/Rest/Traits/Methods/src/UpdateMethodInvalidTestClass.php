<?php
declare(strict_types=1);
/**
 * /tests/Integration/Rest/Traits/Methods/UpdateMethodInvalidTestClass.php
 *
 * @author  TLe, Tarmo Leppänen <tarmo.leppanen@protacon.com>
 */
namespace App\Tests\Integration\Rest\Traits\Methods\src;

use App\Rest\Traits\RestMethodHelper;
use App\Rest\Traits\Methods\UpdateMethod;

/**
 * Class UpdateMethodInvalidTestClass - just a dummy class so that we can actually test that trait.
 *
 * @package App\Tests\Integration\Rest\Traits\Methods\src
 * @author  TLe, Tarmo Leppänen <tarmo.leppanen@protacon.com>
 */
abstract class UpdateMethodInvalidTestClass
{
    use UpdateMethod;
    use RestMethodHelper;
}
