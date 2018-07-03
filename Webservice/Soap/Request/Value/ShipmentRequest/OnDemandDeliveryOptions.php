<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\AuthorizerName;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\DeliveryOption;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\GateCode;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\Instructions;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\Location;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\LWNTypeCode;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\NeighbourHouseNumber;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\NeighbourName;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\RequestedDeliveryDate;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions\SelectedServicePointId;

/**
 * The OnDemandDeliveryOptions section conveys data elements for On Demand Delivery (ODD) service.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class OnDemandDeliveryOptions
{
    /**
     * The delivery option.
     *
     * @var DeliveryOption
     */
    private $DeliveryOption;

    /**
     * The location.
     *
     * @var null|Location
     */
    private $Location;

    /**
     * Additional information that is useful for the DHL Express courier.
     *
     * @var null|Instructions
     */
    private $Instructions;

    /**
     * The entry code to gain access to an apartment complex or gate.
     *
     * @var null|GateCode
     */
    private $GateCode;

    /**
     * @var null|LWNTypeCode
     */
    private $LWNTypeCode;

    /**
     * @var null|NeighbourName
     */
    private $NeighbourName;

    /**
     * @var null|NeighbourHouseNumber
     */
    private $NeighbourHouseNumber;

    /**
     * @var null|AuthorizerName
     */
    private $AuthorizerName;

    /**
     * @var null|SelectedServicePointId
     */
    private $SelectedServicePointID;

    /**
     * The requested delivery date. Reserved for future use.
     * 
     * @var null|RequestedDeliveryDate
     */
    private $RequestedDeliveryDate;

    /**
     * Constructor.
     *
     * @param string $deliveryOption The delivery option
     */
    public function __construct(string $deliveryOption)
    {
        $this->setDeliveryOption($deliveryOption);
    }

    /**
     * Returns the delivery option.
     * 
     * @return DeliveryOption
     */
    public function getDeliveryOption(): DeliveryOption
    {
        return $this->DeliveryOption;
    }

    /**
     * Sets the delivery option.
     * 
     * @param string $deliveryOption The delivery option
     *
     * @return self
     */
    public function setDeliveryOption(string $deliveryOption): OnDemandDeliveryOptions
    {
        $this->DeliveryOption = new DeliveryOption($deliveryOption);
        return $this;
    }

    /**
     * Returns the location.
     *
     * @return null|Location
     */
    public function getLocation(): ?Location
    {
        return $this->Location;
    }

    /**
     * Sets the location.
     *
     * @param string $location The location
     *
     * @return self
     */
    public function setLocation(string $location): OnDemandDeliveryOptions
    {
        $this->Location = new Location($location);
        return $this;
    }

    /**
     * Returns the instructions.
     *
     * @return null|Instructions
     */
    public function getInstructions(): ?Instructions
    {
        return $this->Instructions;
    }

    /**
     * Sets the instructions.
     *
     * @param string $instructions The instructions
     *
     * @return self
     */
    public function setInstructions(string $instructions): OnDemandDeliveryOptions
    {
        $this->Instructions = new Instructions($instructions);
        return $this;
    }

    /**
     * Returns the gate code.
     *
     * @return null|GateCode
     */
    public function getGateCode(): ?GateCode
    {
        return $this->GateCode;
    }

    /**
     * Sets the gate code.
     *
     * @param GateCode $gateCode The gate code
     *
     * @return self
     */
    public function setGateCode($gateCode): OnDemandDeliveryOptions
    {
        $this->GateCode = new GateCode($gateCode);
        return $this;
    }

    /**
     * Returns the LWN type code.
     *
     * @return null|LWNTypeCode
     */
    public function getLWNTypeCode(): ?LWNTypeCode
    {
        return $this->LWNTypeCode;
    }

    /**
     * Sets the LWN type code.
     *
     * @param string $lwnTypeCode The LWN type code
     *
     * @return self
     */
    public function setLWNTypeCode(string $lwnTypeCode): OnDemandDeliveryOptions
    {
        $this->LWNTypeCode = new LWNTypeCode($lwnTypeCode);
        return $this;
    }

    /**
     * Returns the neighbour name.
     *
     * @return null|NeighbourName
     */
    public function getNeighbourName(): ?NeighbourName
    {
        return $this->NeighbourName;
    }

    /**
     * Sets the neighbour name.
     *
     * @param string $neighbourName The neighbour name
     *
     * @return self
     */
    public function setNeighbourName(string $neighbourName): OnDemandDeliveryOptions
    {
        $this->NeighbourName = new NeighbourName($neighbourName);
        return $this;
    }

    /**
     * Returns the neighbour house number.
     *
     * @return null|NeighbourHouseNumber
     */
    public function getNeighbourHouseNumber(): ?NeighbourHouseNumber
    {
        return $this->NeighbourHouseNumber;
    }

    /**
     * Sets the neighbour house number.
     *
     * @param string $neighbourHouseNumber The neighbour house number
     *
     * @return self
     */
    public function setNeighbourHouseNumber(string $neighbourHouseNumber): OnDemandDeliveryOptions
    {
        $this->NeighbourHouseNumber = new NeighbourHouseNumber($neighbourHouseNumber);
        return $this;
    }

    /**
     * Returns the authorizer name.
     *
     * @return null|AuthorizerName
     */
    public function getAuthorizerName(): ?AuthorizerName
    {
        return $this->AuthorizerName;
    }

    /**
     * Sets the authorizer name.
     *
     * @param string $authorizerName The authorizer name
     *
     * @return self
     */
    public function setAuthorizerName(string $authorizerName): OnDemandDeliveryOptions
    {
        $this->AuthorizerName = new AuthorizerName($authorizerName);
        return $this;
    }

    /**
     * Returns the selected service point id.
     *
     * @return null|SelectedServicePointId
     */
    public function getSelectedServicePointId(): ?SelectedServicePointId
    {
        return $this->SelectedServicePointID;
    }

    /**
     * Set the selected service point id.
     *
     * @param string $selectedServicePointId The selected service point id
     *
     * @return self
     */
    public function setSelectedServicePointId(string $selectedServicePointId): OnDemandDeliveryOptions
    {
        $this->SelectedServicePointID = new SelectedServicePointId($selectedServicePointId);
        return $this;
    }

    /**
     * Returns the requested delivery date.
     *
     * @return null|RequestedDeliveryDate
     */
    public function getRequestedDeliveryDate(): ?RequestedDeliveryDate
    {
        return $this->RequestedDeliveryDate;
    }

    /**
     * Sets the requested delivery date.
     *
     * @param string $requestedDeliveryDate The requested delivery date
     *
     * @return self
     */
    public function setRequestedDeliveryDate(string $requestedDeliveryDate): OnDemandDeliveryOptions
    {
        $this->RequestedDeliveryDate = new RequestedDeliveryDate($requestedDeliveryDate);
        return $this;
    }
}