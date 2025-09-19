<?php
namespace Training\ReplaceConstructorArguments\Model;

class UpperCaseName extends DefaultName
{
    public function getName() : string {
        return strtoupper(parent::getName());
    }
}