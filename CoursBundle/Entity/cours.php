<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\coursRepository")
 */
class cours
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
     * @ORM\Column(name="nom_cours", type="string", length=255)
     */
    private $nomCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cours_date", type="datetime")
     */
    private $coursDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cours_matiere", type="string", length=255)
     */
    private $coursMatiere;

    /**
     * @var bool
     *
     * @ORM\Column(name="cours_actif_contenu", type="boolean")
     */
    private $coursActifContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cours_periode", type="datetime")
     */
    private $coursPeriode;


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
     * Set nomCours
     *
     * @param string $nomCours
     * @return cours
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;

        return $this;
    }

    /**
     * Get nomCours
     *
     * @return string 
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * Set coursDate
     *
     * @param \DateTime $coursDate
     * @return cours
     */
    public function setCoursDate($coursDate)
    {
        $this->coursDate = $coursDate;

        return $this;
    }

    /**
     * Get coursDate
     *
     * @return \DateTime 
     */
    public function getCoursDate()
    {
        return $this->coursDate;
    }

    /**
     * Set coursMatiere
     *
     * @param string $coursMatiere
     * @return cours
     */
    public function setCoursMatiere($coursMatiere)
    {
        $this->coursMatiere = $coursMatiere;

        return $this;
    }

    /**
     * Get coursMatiere
     *
     * @return string 
     */
    public function getCoursMatiere()
    {
        return $this->coursMatiere;
    }

    /**
     * Set coursActifContenu
     *
     * @param boolean $coursActifContenu
     * @return cours
     */
    public function setCoursActifContenu($coursActifContenu)
    {
        $this->coursActifContenu = $coursActifContenu;

        return $this;
    }

    /**
     * Get coursActifContenu
     *
     * @return boolean 
     */
    public function getCoursActifContenu()
    {
        return $this->coursActifContenu;
    }

    /**
     * Set coursPeriode
     *
     * @param \DateTime $coursPeriode
     * @return cours
     */
    public function setCoursPeriode($coursPeriode)
    {
        $this->coursPeriode = $coursPeriode;

        return $this;
    }

    /**
     * Get coursPeriode
     *
     * @return \DateTime 
     */
    public function getCoursPeriode()
    {
        return $this->coursPeriode;
    }
}
