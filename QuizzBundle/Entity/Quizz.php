<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table(name="quizz")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuizzRepository")
 */
class Quizz
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="NoteMax", type="integer")
     */
    private $noteMax;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="CoursBundle\Entity\Chapitre", fetch="EAGER")
     */

    protected $Chapitre;

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
     * Set titre
     *
     * @param string $titre
     * @return Quizz
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set noteMax
     *
     * @param integer $noteMax
     * @return Quizz
     */
    public function setNoteMax($noteMax)
    {
        $this->noteMax = $noteMax;

        return $this;
    }

    /**
     * Get noteMax
     *
     * @return integer 
     */
    public function getNoteMax()
    {
        return $this->noteMax;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Quizz
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
