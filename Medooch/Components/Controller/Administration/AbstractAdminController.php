<?php
/**
 * This file is part of the MedoochPackages.
 * Created by trimechmehdi.
 * Date: 5/26/17
 * Time: 13:49
 * @author: Trimech Mehdi <trimechmehdi11@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Medooch\Components\Controller\Administration;
use Components\Controller\AbstractController;


/**
 * Class AbstractAdminController
 * @package AppWeb
 */
abstract class AbstractAdminController extends AbstractController
{
    /**
     * Gets a container service by its id.
     *
     * @param string $id The service id
     *
     * @return object The service
     */
    public function get($id)
    {
        /**
         * check if the user allowed to routes
         */
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Access denied');
        }
        return parent::get($id);
    }
}