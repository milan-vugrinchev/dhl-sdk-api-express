<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;

/**
 * Shipping event class.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentEvent implements ShipmentEventInterface
{
    /**
     * Event date
     *
     * @var int
     */
    private $date;

    /**
     * Event code
     *
     * @var $code
     */
    private $code;

    /**
     * Event description
     *
     * @var $description
     */
    private $description;

    /**
     * ShipmentEvent constructor.
     * @param int $date
     * @param $code
     * @param $description
     */
    public function __construct(int $date, $code, $description)
    {
        $this->date = $date;
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * Returns the event's date
     *
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Returns the event's code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
