<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="enonce", type="text")
     */
    private $enonce;

    /**
     * @var int
     *
     * @ORM\Column(name="reponse_correcte", type="integer")
     */
    private $reponseCorrecte;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User",inversedBy="reponse")
     */

    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="QuizzBundle\Entity\Questions", fetch="EAGER")
     */

    protected $questions;

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
     * Set enonce
     *
     * @param string $enonce
     * @return Reponse
     */
    public function setEnonce($enonce)
    {
        $this->enonce = $enonce;

        return $this;
    }

    /**
     * Get enonce
     *
     * @return string 
     */
    public function getEnonce()
    {
        return $this->enonce;
    }

    /**
     * Set reponseCorrecte
     *
     * @param integer $reponseCorrecte
     * @return Reponse
     */
    public function setReponseCorrecte($reponseCorrecte)
    {
        $this->reponseCorrecte = $reponseCorrecte;

        return $this;
    }

    /**
     * Get reponseCorrecte
     *
     * @return integer 
     */
    public function getReponseCorrecte()
    {
        return $this->reponseCorrecte;
    }
}
