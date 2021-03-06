<?php

namespace ActivitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityUserProblem
 *
 * @ORM\Table(name="ActivitiesUsersProblems")
 * @ORM\Entity(repositoryClass="ActivitiesBundle\Repository\ProblemRepository")
 */
class ActivityUserProblem
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
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="ActivitiesBundle\Entity\Problem")
     * @ORM\JoinColumn(nullable=false)
     */
    private $problem;

    /**
     * @ORM\ManyToOne(targetEntity="ActivitiesBundle\Entity\Activity")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activity;

    /**
     * @ORM\Column(name="otherParticipation", type="boolean")
     */
    private $otherParticipation;

    /**
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;


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
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return ActivityUserProblem
     */
    public function setUser(\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set problem
     *
     * @param \ActivitiesBundle\Entity\Problem $problem
     * @return ActivityUserProblem
     */
    public function setProblem(\ActivitiesBundle\Entity\Problem $problem)
    {
        $this->problem = $problem;

        return $this;
    }

    /**
     * Get problem
     *
     * @return \ActivitiesBundle\Entity\Problem 
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set activity
     *
     * @param \ActivitiesBundle\Entity\Activity $activity
     * @return ActivityUserProblem
     */
    public function setActivity(\ActivitiesBundle\Entity\Activity $activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \ActivitiesBundle\Entity\Activity 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set otherParticipation
     *
     * @param boolean $otherParticipation
     * @return ActivityUserProblem
     */
    public function setOtherParticipation($otherParticipation)
    {
        $this->otherParticipation = $otherParticipation;

        return $this;
    }

    /**
     * Get otherParticipation
     *
     * @return boolean 
     */
    public function getOtherParticipation()
    {
        return $this->otherParticipation;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Problem
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
