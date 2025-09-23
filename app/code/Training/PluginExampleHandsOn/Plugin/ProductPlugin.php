<?php
namespace Training\PluginExampleHandsOn\Plugin;

class ProductPlugin
{
    public function beforeSetTitle(
        \Training\PluginExampleHandsOn\Controller\Index\Index $subject,
        $title
    ) {
        $title = $title . ' to';
        return [$title];
    }
}
