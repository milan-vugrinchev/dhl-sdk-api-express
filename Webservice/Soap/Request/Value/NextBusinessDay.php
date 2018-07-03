<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

/**
 * The NextBusinessDay field is used to indicate that the Rate Request process should query the next business
 * day for available services if the current request is beyond cutoff, or occurs on a weekend or holiday. There
 * are three possible use cases for this field.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class NextBusinessDay extends YesNo
{
}