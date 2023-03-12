<?php

namespace App\Model;

use Nette;

/**
* Parser
*
* @author hydroxid
*/
class Parser
{
    /**
    * get parts if exists
    *
    * @param \SimpleXMLElement $parts
    * @author hydroxid
    */
    public function getParts(\SimpleXMLElement $parts) : ?array
    {
        $result = null;
        if ($parts && $parts->part && $parts->part->item) {
            foreach ($parts->part->item as $part) {
                $result[] = (string) $part['name'];
            }
        }
        return $result;
    }
}
