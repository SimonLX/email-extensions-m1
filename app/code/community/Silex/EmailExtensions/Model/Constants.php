<?php

/**
 * Class Silex_EmailExtensions_Model_Constants
 *
 * Container of constants used in the module
 */
class Silex_EmailExtensions_Model_Constants
{
    /** @var string */
    const ENTITY_TYPE_CREDITMEMO = 'creditmemo';

    /** @var string */
    const ENTITY_TYPE_INVOICE = 'invoice';

    /** @var string */
    const ENTITY_TYPE_SHIPMENT = 'shipment';

    /** @var string */
    const EVENT_TYPE_CREDITMEMO_NEW = 'new_creditmemo';

    /** @var string */
    const EVENT_TYPE_CREDITMEMO_UPDATE = 'update_creditmemo';

    /** @var string */
    const EVENT_TYPE_INVOICE_NEW = 'new_invoice';

    /** @var string */
    const EVENT_TYPE_INVOICE_UPDATE = 'update_invoice';

    /** @var string */
    const EVENT_TYPE_SHIPMENT_NEW = 'new_shipment';

    /** @var string */
    const EVENT_TYPE_SHIPMENT_UPDATE = 'update_shipment';
}
