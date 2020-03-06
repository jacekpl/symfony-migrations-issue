<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Test
 * @package App\Entity
 * @ORM\Entity()
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $message;
}
