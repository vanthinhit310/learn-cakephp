<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $user_id
 * @property string|null $description
 * @property string|null $image
 * @property int|null $category_id
 * @property string|null $content
 * @property string|null $tags
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 */
class Post extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'user_id' => true,
        'description' => true,
        'image' => true,
        'category_id' => true,
        'content' => true,
        'tags' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'category' => true,
    ];
}
