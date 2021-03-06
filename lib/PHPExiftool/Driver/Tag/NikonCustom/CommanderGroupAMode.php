<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CommanderGroupAMode extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CommanderGroupAMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Group A Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        1 => array(
            'Id' => 16,
            'Label' => 'Auto Aperture',
        ),
        2 => array(
            'Id' => 32,
            'Label' => 'Manual',
        ),
        3 => array(
            'Id' => 48,
            'Label' => 'Off',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        5 => array(
            'Id' => 64,
            'Label' => 'Auto Aperture',
        ),
        6 => array(
            'Id' => 128,
            'Label' => 'Manual',
        ),
        7 => array(
            'Id' => 192,
            'Label' => 'Off',
        ),
    );
}
