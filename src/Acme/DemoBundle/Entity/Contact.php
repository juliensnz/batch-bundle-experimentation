<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Contact
     */
    private $friends;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->friends = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Contact
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Contact
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Contact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Contact
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add friends
     *
     * @param Contact $friends
     *
     * @return Contact
     */
    public function addField(Contact $friend)
    {
        $this->friends[] = $friend;

        return $this;
    }

    /**
     * Remove friends
     *
     * @param Contact $friends
     */
    public function removeField(Contact $friend)
    {
        $this->friends->removeElement($friend);
    }

    /**
     * Get friends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFields()
    {
        return $this->friends;
    }

    /**
     * Add friends
     *
     * @param \Acme\DemoBundle\Entity\Contact $friends
     * @return Contact
     */
    public function addFriend(\Acme\DemoBundle\Entity\Contact $friends)
    {
        $this->friends[] = $friends;

        var_dump(count($this->friends));

        return $this;
    }

    /**
     * Remove friends
     *
     * @param \Acme\DemoBundle\Entity\Contact $friends
     */
    public function removeFriend(\Acme\DemoBundle\Entity\Contact $friends)
    {
        $this->friends->removeElement($friends);
    }

    /**
     * Get friends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriends()
    {
        return $this->friends;
    }
}