<?php
/**
 * @author: ahuazhu@gmail.com
 * Date: 16/7/19  下午1:46
 */

namespace Message\Impl;


use Message\Initializer;
use Message\MessageProducer;

class DefaultMessageProducer implements MessageProducer, Initializer
{

    private $m_messageManager;


    public function newEvent($type, $name)
    {
        if ($this->m_messageManager == null) {
            $this->init();
        }


    }

    public function init()
    {
        $this->m_messageManager = new DefaultMessageManager();
        $this->m_messageManager->init();
    }
}