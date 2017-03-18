<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sick Entity
 *
 * @property string $id
 * @property \Cake\I18n\Time $datetime
 * @property string $name
 * @property string $courseCode
 * @property string $ic
 * @property string $tel
 * @property string $studentNo
 * @property string $notes
 * @property string $homeAddress
 * @property string $collegeAddress
 * @property string $report_id
 *
 * @property \App\Model\Entity\Report $report
 */
class Sick extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
