<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class StereoMode extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'StereoMode';

    protected $FullName = 'PNG::StereoImage';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Stereo Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Cross-fuse Layout',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Diverging-fuse Layout',
        ),
    );
}
