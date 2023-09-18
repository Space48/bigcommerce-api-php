<?php

namespace Space48\Bigcommerce;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;

class PhpFileMerger
{

    public static function merge(PhpFile $original, PhpFile $additional): PhpFile
    {
        foreach ($original->getNamespaces() as $origNamespace) {
            foreach ($additional->getNamespaces() as $additionalNamespace) {
                foreach ($additionalNamespace->getUses() as $use) {
                    $origNamespace->addUse($use);
                }

                /** @var ClassType $origClass */
                foreach ($origNamespace->getClasses() as $origClass) {
                    /** @var ClassType $additionalClass */
                    foreach ($additionalNamespace->getClasses() as $additionalClass) {
                        foreach ($additionalClass->getMethods() as $methodName => $methodBody) {
                            if (!$origClass->hasMethod($methodName)) {
                                $origClass->addMethod($methodName)
                                    ->setReturnType($methodBody->getReturnType())
                                    ->addBody($methodBody->getBody());
                            }
                        }
                    }
                }
            }
        }

        return $original;
    }
}
