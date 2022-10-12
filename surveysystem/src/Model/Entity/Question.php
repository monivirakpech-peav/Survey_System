<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $survey_id
 * @property int $question_type_id
 *
 * @property \App\Model\Entity\Survey $survey
 * @property \App\Model\Entity\QuestionType $question_type
 * @property \App\Model\Entity\Answer[] $answers
 */
class Question extends Entity
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
    protected $_accessible = [
        'description' => true,
        'created' => true,
        'modified' => true,
        'survey_id' => true,
        'question_type_id' => true,
        'survey' => true,
        'question_type' => true,
        'answers' => true,
    ];
}
