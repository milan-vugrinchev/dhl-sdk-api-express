<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;

/**
 * The tracking request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapTrackingRequest
{
    /**
     * @var TrackingRequestBase
     */
    protected $trackingRequest;

    /**
     * @return TrackingRequestBase
     */
    public function getTrackingRequest(): TrackingRequestBase
    {
        return $this->trackingRequest;
    }

    /**
     * @param TrackingRequestBase $trackingRequest
     * @return self
     */
    public function setTrackingRequest(TrackingRequestBase $trackingRequest): self
    {
        $this->trackingRequest = $trackingRequest;
        return $this;
    }
}
