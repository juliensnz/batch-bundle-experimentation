<?php

namespace Acme\DemoBundle\Processor;

use Akeneo\Bundle\BatchBundle\Item\ItemProcessorInterface;
use Akeneo\Bundle\BatchBundle\Item\AbstractConfigurableStepElement;
use Acme\DemoBundle\Entity\Contact;

/**
 * Dummy step, can be use to do nothing until you'll have concret implementation
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class FriendProcessor extends AbstractConfigurableStepElement implements ItemProcessorInterface
{
    /**
     * Constructor
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function process($item)
    {
        $contact = $this->entityManager->getRepository('Acme\DemoBundle\Entity\Contact')
            ->findOneBy(array('code' => $item['code']));

        foreach (explode(',', ($item['friends'])) as $friend) {
            $friend = $this->entityManager->getRepository('Acme\DemoBundle\Entity\Contact')
                ->findOneBy(array('code' => $friend));

            $contact->addFriend($friend);
        }

        return $contact;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationFields()
    {
        return array();
    }
}
