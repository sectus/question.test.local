<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="question_category_id", columns={"question_category_id"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\QuestionCategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QuestionCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_category_id", referencedColumnName="id")
     * })
     */
    private $questionCategory;


    public function __construct() 
    {
        $this->questionCategory = new QuestionCategory();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Question
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set questionCategory
     *
     * @param \AppBundle\Entity\QuestionCategory $questionCategory
     *
     * @return Question
     */
    public function setQuestionCategory(\AppBundle\Entity\QuestionCategory $questionCategory = null)
    {
        $this->questionCategory = $questionCategory;

        return $this;
    }

    /**
     * Get questionCategory
     *
     * @return \AppBundle\Entity\QuestionCategory
     */
    public function getQuestionCategory()
    {
        return $this->questionCategory;
    }
}
