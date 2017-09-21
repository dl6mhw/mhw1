<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entry Entity
 *
 * @property string $callsign
 * @property string $mode
 * @property string $category
 * @property string $prefix
 * @property string $log_type
 * @property string $file_format
 * @property string $dok
 * @property string $club
 * @property bool $disqual
 * @property int $c_qso
 * @property int $c_qtc
 * @property int $c_mult
 * @property int $c_mult2
 * @property int $c_score
 * @property int $r_qso
 * @property int $r_qtc
 * @property int $r_mult
 * @property int $r_mult2
 * @property int $r_score
 * @property int $f_qso
 * @property int $f_qtc
 * @property int $f_mult
 * @property int $f_mult2
 * @property int $f_score
 * @property float $optime
 * @property string $op_list
 * @property string $soapbox
 * @property \Cake\I18n\FrozenTime $created
 * @property string $version_string
 * @property bool $prblm
 * @property string $log_checker
 * @property string $rmx
 * @property bool $award
 * @property bool $plaque
 * @property bool $packet
 * @property string $commands
 * @property bool $stf
 * @property bool $problem
 * @property bool $frage
 * @property bool $kommentar
 * @property bool $antwort
 * @property bool $stop
 */
class Entry extends Entity
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
        'mode' => true,
        'category' => true,
        'prefix' => true,
        'log_type' => true,
        'file_format' => true,
        'dok' => true,
        'club' => true,
        'disqual' => true,
        'c_qso' => true,
        'c_qtc' => true,
        'c_mult' => true,
        'c_mult2' => true,
        'c_score' => true,
        'r_qso' => true,
        'r_qtc' => true,
        'r_mult' => true,
        'r_mult2' => true,
        'r_score' => true,
        'f_qso' => true,
        'f_qtc' => true,
        'f_mult' => true,
        'f_mult2' => true,
        'f_score' => true,
        'optime' => true,
        'op_list' => true,
        'soapbox' => true,
        'created' => true,
        'version_string' => true,
        'prblm' => true,
        'log_checker' => true,
        'rmx' => true,
        'award' => true,
        'plaque' => true,
        'packet' => true,
        'commands' => true,
        'stf' => true,
        'problem' => true,
        'frage' => true,
        'kommentar' => true,
        'antwort' => true,
        'stop' => true
    ];
}
