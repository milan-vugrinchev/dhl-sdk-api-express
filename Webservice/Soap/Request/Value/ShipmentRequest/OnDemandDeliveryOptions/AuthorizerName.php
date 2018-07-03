<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * The authorizer name.
 *
 * Mandatory if delivery option is SX or SW– this is the person that this authorised to sign and receive
 * the DHL Express shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class AuthorizerName extends AlphaNumeric
{
    protected const MAX_LENGTH = 20;
}

