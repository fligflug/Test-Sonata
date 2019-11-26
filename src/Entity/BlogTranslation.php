<?php
/**
 * Created by PhpStorm.
 * User: benjaminsureau
 * Date: 25/11/2019
 * Time: 17:49
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\TranslationBundle\Model\Gedmo\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_translation",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="unique_blog_translation_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class BlogTranslation extends AbstractPersonalTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Blog", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}
