<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Exception\ShipmentDeleteRequestException;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Psr\Log\LoggerInterface;

/**
 * Shipment Service.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "SoapShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentService implements ShipmentServiceInterface
{
    /**
     * @var ShipmentServiceAdapterInterface
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ShipmentService constructor.
     * @param ShipmentServiceAdapterInterface $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        ShipmentServiceAdapterInterface $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    /**
     * Performs the "createShipment" request.
     *
     * @param ShipmentRequestInterface $request The API request
     *
     * @return ShipmentResponseInterface
     *
     * @throws ShipmentRequestException
     * @throws SoapException
     */
    public function createShipment(ShipmentRequestInterface $request): ShipmentResponseInterface
    {
        try {
            $response = $this->adapter->createShipment($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (ShipmentRequestException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        }

        if ($this->adapter instanceof TraceableInterface) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->debug($this->adapter->getLastResponse());
        }

        return $response;
    }

    /**
     * Performs the "deleteShipment" request.
     *
     * @param ShipmentDeleteRequestInterface $request The API request
     *
     * @return ShipmentDeleteResponseInterface
     *
     * @throws ShipmentDeleteRequestException
     * @throws SoapException
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request): ShipmentDeleteResponseInterface
    {
        try {
            $response = $this->adapter->deleteShipment($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (ShipmentDeleteRequestException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        }

        if ($this->adapter instanceof TraceableInterface) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->debug($this->adapter->getLastResponse());
        }

        return $response;
    }
}
