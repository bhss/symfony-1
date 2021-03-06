<?php
/**
 * This file is part of the MedoochPackages.
 * Created by trimechmehdi.
 * Date: 6/1/17
 * Time: 13:55
 * @author: Trimech Mehdi <trimechmehdi11@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Medooch\Components\Lib\Reverso;

/**
 * Interface SpellingInterface
 * @package Medooch\Components\Lib\Reverso
 */
interface SpellingInterface
{
    /**
     * ---------------------------------------
     * @author: Trimech Mehdi
     * ---------------------------------------
     * **************** Function input: ****************
     * @param $txt
     * @param string $language
     * ---------------------------------------
     * **************** Function output: ****************
     * @return mixed
     * ---------------------------------------
     */
    public static function correctionText($txt, $language = 'fra');
}