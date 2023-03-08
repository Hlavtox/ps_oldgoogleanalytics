<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\Module\Ps_Oldgoogleanalytics\Repository\GanalyticsRepository;

class AdminOldganalyticsAjaxController extends ModuleAdminController
{
    public $ssl = true;

    public function init()
    {
        $orderId = (int) Tools::getValue('orderid');
        $order = new Order($orderId);

        if (Validate::isLoadedObject($order) && (isset($this->context->employee->id) && $this->context->employee->id)) {
            (new GanalyticsRepository())->updateData(
                [
                    'sent' => 1,
                    'date_add' => ['value' => 'NOW()', 'type' => 'sql'],
                ],
                'id_order = ' . $orderId
            );

            $this->ajaxDie('OK');
        }

        $this->ajaxDie('KO');
    }
}
