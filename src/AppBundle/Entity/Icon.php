<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Icons
 *
 * @ORM\Table(name="icon")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IconRepository")
 */
class Icon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $fullname;
    /**
     * @var string
     *
     * @ORM\Column(name="small", type="string", length=255)
     */
    private $small;
    /**
    * @ORM\OneToOne(targetEntity="BlogPost", mappedBy="icon")
    */
    private $blogPosts;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Icon
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get small
     *
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }
    /**
     * Set small
     *
     * @param string $small
     *
     * @return Icon
     */
    public function setSmall($small)
    {
        $this->small = $small;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }


    public function getBlogPosts()
    {
        return $this->blogPosts;
    }
}
