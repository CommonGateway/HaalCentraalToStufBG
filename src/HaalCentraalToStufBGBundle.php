<?php

namespace CommonGateway\HaalCentraalToStufBGBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * The haalCentraal to stuf BG bundle
 *
 * @author  Conduction.nl <info@conduction.nl>
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */
class HaalCentraalToStufBGBundle extends Bundle
{


    /**
     * Returns the path the bundle is in
     *
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);

    }//end getPath()


}//end class
