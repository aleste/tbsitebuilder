<?php

namespace Aleste\SiteBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=255)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="administrator_email", type="string", length=255)
     */
    private $administratorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="googleplus", type="string", length=255, nullable=true)
     */
    private $googleplus;

    /**
     * @var string
     *
     * @ORM\Column(name="body_color", type="string", length=10, nullable=true)
     */
    private $bodyColor;                

    /**
     * @var string
     *
     * @ORM\Column(name="header_color", type="string", length=10, nullable=true)
     */
    private $headerColor;    

    /**
     * @var string
     *
     * @ORM\Column(name="footer_color", type="string", length=10, nullable=true)
     */
    private $footerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="font_color", type="string", length=10, nullable=true)
     */
    private $fontColor;                


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
     * Set name
     *
     * @param string $name
     * @return Site
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Site
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set administratorEmail
     *
     * @param string $administratorEmail
     * @return Site
     */
    public function setAdministratorEmail($administratorEmail)
    {
        $this->administratorEmail = $administratorEmail;
    
        return $this;
    }

    /**
     * Get administratorEmail
     *
     * @return string 
     */
    public function getAdministratorEmail()
    {
        return $this->administratorEmail;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Site
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    
        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Site
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    
        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set googleplus
     *
     * @param string $googleplus
     * @return Site
     */
    public function setGoogleplus($googleplus)
    {
        $this->googleplus = $googleplus;
    
        return $this;
    }

    /**
     * Get googleplus
     *
     * @return string 
     */
    public function getGoogleplus()
    {
        return $this->googleplus;
    }

    /**
     * Set bodyColor
     *
     * @param string $bodyColor
     * @return Site
     */
    public function setBodyColor($bodyColor)
    {
        $this->bodyColor = $bodyColor;
    
        return $this;
    }

    /**
     * Get bodyColor
     *
     * @return string 
     */
    public function getBodyColor()
    {
        return $this->bodyColor;
    }

    /**
     * Set headerColor
     *
     * @param string $headerColor
     * @return Site
     */
    public function setHeaderColor($headerColor)
    {
        $this->headerColor = $headerColor;
    
        return $this;
    }

    /**
     * Get headerColor
     *
     * @return string 
     */
    public function getHeaderColor()
    {
        return $this->headerColor;
    }

    /**
     * Set footerColor
     *
     * @param string $footerColor
     * @return Site
     */
    public function setFooterColor($footerColor)
    {
        $this->footerColor = $footerColor;
    
        return $this;
    }

    /**
     * Get footerColor
     *
     * @return string 
     */
    public function getFooterColor()
    {
        return $this->footerColor;
    }

    /**
     * Set fontColor
     *
     * @param string $fontColor
     * @return Site
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;
    
        return $this;
    }

    /**
     * Get fontColor
     *
     * @return string 
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }
}