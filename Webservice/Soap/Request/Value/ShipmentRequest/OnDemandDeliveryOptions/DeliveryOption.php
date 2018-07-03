<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The delivery option is to define which on demand delivery option you wish to choose optionally when your
 * shipment is to be delivered.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class DeliveryOption implements ValueInterface
{
    /**
     * The pickup location is already served by a regular courier and an additional pickup does
     * not need to be considered for this service.
     *
     * @var string
     */
    const TV = 'TV';
    const SW = 'SW';
    const SX = 'SX';

    /**
     * The delivery option.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     */
    public function __construct($value = self::TV)
    {
        if (!in_array($value, [self::TV, self::SW, self::SX])) {
            throw new \InvalidArgumentException('Argument must be either "TV", "SW" or "SX"');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }
}
