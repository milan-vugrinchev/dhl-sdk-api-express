<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;

/**
 * Tracking Request Mapper.
 *
 * Transform the tracking request object into SOAP types suitable for API communication.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequestMapper
{
    /**
     * @param TrackingRequestInterface $trackingRequest
     *
     * @return SoapTrackingRequest
     * @throws \InvalidArgumentException
     */
    public function map(TrackingRequestInterface $trackingRequest): SoapTrackingRequest
    {
        $soapTrackingRequest = new SoapTrackingRequest;

        $soapTrackingRequest->setTrackingRequest(
            new TrackingRequestBase(
                new TrackingRequest(
                    new Request(
                        new ServiceHeader(
                            /** @Todo: Map to this format 2018-08-08T11:17:08 */
                            (new \DateTime)->setTimestamp($trackingRequest->getMessage()->getTime())->format(\DateTime::ATOM),
                            $trackingRequest->getMessage()->getReference()
                        )
                    ),
                    $trackingRequest->getLevelOfDetails()
                )
            )
        );

        $soapTrackingRequest->getTrackingRequest()->getTrackingRequest()->setAWBNumber(
            new AWBNumberCollection($trackingRequest->getAwbNumber())
        );

        $soapTrackingRequest->getTrackingRequest()->getTrackingRequest()->setPiecesEnabled(
            $trackingRequest->getPiecesEnabled()
        );

        return $soapTrackingRequest;
    }
}
