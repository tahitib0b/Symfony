<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="questions", type="string", length=255)
     */
    private $questions;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


    /**
     * @ORM\ManyToOne(targetEntity="QuizzBundle\Entity\Quizz", fetch="EAGER")
     */

    protected $Quizz;

    /**
     *Get id
     *
     * @return integer
     */

    public function getId()
    {
        return $this->id;
    }


    /**
     * Set questions
     *
     * @param string $questions
     * @return Questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Questions
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return Questions
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}
