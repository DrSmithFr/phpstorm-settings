<?php

declare(strict_types=1);

#if (${NAMESPACE})
namespace ${NAMESPACE};

#end
use Doctrine\ORM\Mapping as ORM;

#parse("PHP Class Doc Comment") 
class ${NAME} {
    
    /**
     * @return string
     */
    public function __toString(): string {
        return '';
    }
}