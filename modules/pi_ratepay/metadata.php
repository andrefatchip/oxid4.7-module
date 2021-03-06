<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  PayIntelligent
 * @package   PayIntelligent_RatePAY
 * @copyright (C) 2011 PayIntelligent GmbH  <http://www.payintelligent.de/>
 * @license http://www.gnu.org/licenses/  GNU General Public License 3
 */

/**
 * Module information
 */
$librarySubModel = 'pi_ratepay/library/src/Model/Request/SubModel/';
$libraryModel    = 'pi_ratepay/library/src/Model/';
$librarySubModelContent = 'RatePAY\Model\Request\SubModel\Content';

$aModule = array(
    'id'           => 'pi_ratepay',
    'title'        => 'RatePAY',
    'description'  => array(
        'de' => 'Bezahlung mit RatePAY',
        'en' => 'Payment with RatePAY'
    ),
    'thumbnail'    => 'ratepay_logo.png',
    'lang'         => 'en',
    'version'      => '4.0.3',
    'author'       => 'RatePAY GmbH',
    'email'        => 'integration@ratepay.com',
    'url'          => 'http://www.ratepay.com/',
    'extend'       => array(
        'payment'           => 'pi_ratepay/views/pi_ratepay_payment',
        'order'             => 'pi_ratepay/views/pi_ratepay_order',
        'oxshopcontrol'     => 'pi_ratepay/core/pi_ratepay_shopcontrol'
    ),
    'blocks' => array(
        array(
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'checkout_payment_errors',
            'file'     => 'payment_pi_ratepay_error_dfp.tpl'
        ),
        array(
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'select_payment',
            'file'     => 'payment_pi_ratepay_rechnung.tpl'
        ),
        array(
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'select_payment',
            'file'     => 'payment_pi_ratepay_rate.tpl'
        ),
        array(
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'select_payment',
            'file'     => 'payment_pi_ratepay_elv.tpl'
        ),
        array(
            'template' => 'page/checkout/order.tpl',
            'block'    => 'checkout_order_main',
            'file'     => 'order_pi_ratepay_waitingwheel.tpl'
        ),
        array(
            'template' => 'page/checkout/order.tpl',
            'block'    => 'shippingAndPayment',
            'file'     => 'order_pi_ratepay_rate.tpl'
        ),
        array(
            'template' => 'page/checkout/',
            'block'    => 'checkout_order_btn_confirm_bottom',
            'file'     => 'order_pi_ratepay_checkout_order.tpl'
        )
    ),
    'templates' => array(
        'pi_ratepay_log.tpl'                    => 'pi_ratepay/out/admin/tpl/pi_ratepay_log.tpl',
        'pi_ratepay_details.tpl'                => 'pi_ratepay/out/admin/tpl/pi_ratepay_details.tpl',
        'pi_ratepay_no_details.tpl'             => 'pi_ratepay/out/admin/tpl/pi_ratepay_no_details.tpl',
        'pi_ratepay_profile.tpl'                => 'pi_ratepay/out/admin/tpl/pi_ratepay_profile.tpl'
    ),
    'files' => array(
        'pi_ratepay_admin_SettingsAbstract'             => 'pi_ratepay/admin/pi_ratepay_admin_settingsabstract.php',
        'pi_ratepay_Log'                                => 'pi_ratepay/admin/pi_ratepay_log.php',
        'pi_ratepay_Details'                            => 'pi_ratepay/admin/pi_ratepay_details.php',
        'pi_ratepay_Profile'                            => 'pi_ratepay/admin/pi_ratepay_profile.php',
        'pi_ratepay_DetailsViewData'                    => 'pi_ratepay/core/pi_ratepay_detailsviewdata.php',
        'pi_ratepay_History'                            => 'pi_ratepay/core/pi_ratepay_history.php',
        'pi_ratepay_HistoryList'                        => 'pi_ratepay/core/pi_ratepay_historylist.php',
        'pi_ratepay_Logs'                               => 'pi_ratepay/core/pi_ratepay_logs.php',
        'pi_ratepay_LogsList'                           => 'pi_ratepay/core/pi_ratepay_logslist.php',
        'pi_ratepay_LogsService'                        => 'pi_ratepay/core/pi_ratepay_logsservice.php',
        'pi_ratepay_OrderDetails'                       => 'pi_ratepay/core/pi_ratepay_orderdetails.php',
        'pi_ratepay_Orders'                             => 'pi_ratepay/core/pi_ratepay_orders.php',
        'pi_ratepay_RateDetails'                        => 'pi_ratepay/core/pi_ratepay_ratedetails.php',
        'pi_ratepay_RequestAbstract'                    => 'pi_ratepay/core/pi_ratepay_requestabstract.php',
        'pi_ratepay_RequestDataBackend'                 => 'pi_ratepay/core/pi_ratepay_requestdatabackend.php',
        'pi_ratepay_RequestOrderArticle'                => 'pi_ratepay/core/pi_ratepay_requestorderarticle.php',
        'pi_ratepay_Settings'                           => 'pi_ratepay/core/pi_ratepay_settings.php',
        'pi_ratepay_util_Utilities'                     => 'pi_ratepay/core/pi_ratepay_util_utilities.php',
        'pi_ratepay_rate_Calc'                          => 'pi_ratepay/views/pi_ratepay_rate_calc.php',
        'Pi_Util_Encryption_EncryptionAbstract'         => 'pi_ratepay/Pi/Util/Encryption/EncryptionAbstract.php',
        'Pi_Util_Encryption_OxEncryption'               => 'pi_ratepay/Pi/Util/Encryption/OxEncryption.php',
        'Pi_Util_Encryption_PrivateKey'                 => 'pi_ratepay/Pi/Util/Encryption/PrivateKey.php',
        'ModelFactory'                                  => 'pi_ratepay/core/ModelFactory.php',
        'RatePAY\RequestBuilder'                        => 'pi_ratepay/library/src/RequestBuilder.php',
        'RatePAY\ModelBuilder'                          => 'pi_ratepay/library/src/ModelBuilder.php',
        'RatePAY\Service\ModelMapper'                   => 'pi_ratepay/library/src/Service/ModelMapper.php',
        'RatePAY\Exception\ModelException'              => 'pi_ratepay/library/src/Exception/ModelException.php',
        'RatePAY\Exception\ExceptionAbstract'           => 'pi_ratepay/library/src/Exception/ExceptionAbstract.php',
        'RatePAY\Model\Request\SubModel\Head'           => $librarySubModel . 'Head.php',
        $librarySubModelContent                         => $librarySubModel . 'Content.php',
        'RatePAY\Model\Request\SubModel\AbstractModel'  => $librarySubModel . 'AbstractModel.php',
        'RatePAY\Model\Request\SubModel\Head\Credential'=> $librarySubModel . 'Head/Credential.php',
        'RatePAY\Model\Request\SubModel\Head\Meta'      => $librarySubModel . 'Head/Meta.php',
        'RatePAY\Model\Request\SubModel\Head\CustomerDevice' => $librarySubModel . 'Head/CustomerDevice.php',
        'RatePAY\Model\Request\SubModel\Head\External'      => $librarySubModel . 'Head/External.php',
        'RatePAY\Model\Request\SubModel\Head\External\Tracking'      => $librarySubModel . 'Head/External/Tracking.php',
        'RatePAY\Model\Request\SubModel\Head\Meta\Systems'          => $librarySubModel . 'Head/Meta/Systems.php',
        'RatePAY\Model\Request\SubModel\Head\Meta\Systems\System'   => $librarySubModel . 'Head/Meta/Systems/System.php',
        'RatePAY\Model\Request\SubModel\Constants'      => $librarySubModel . 'Constants.php',
        'RatePAY\Exception\RequestException'            => 'pi_ratepay/library/src/Exception/RequestException.php',
        'RatePAY\Exception\RuleSetException'            => 'pi_ratepay/library/src/Exception/RuleSetException.php',
        'RatePAY\Exception\CurlException'               => 'pi_ratepay/library/src/Exception/CurlException.php',
        'RatePAY\Exception\FrontendException'           => 'pi_ratepay/library/src/Exception/FrontendException.php',
        $librarySubModelContent .  '\Additional'        => $librarySubModel . 'Content/Additional.php',
        'RatePAY\Model\Request\ProfileRequest'          => $libraryModel . 'Request/ProfileRequest.php',
        'RatePAY\Model\Request\AbstractRequest'         => $libraryModel . 'Request/AbstractRequest.php',
        'RatePAY\Model\Request\CalculationRequest'      => $libraryModel . 'Request/CalculationRequest.php',
        'RatePAY\Model\Request\ConfigurationRequest'    => $libraryModel . 'Request/ConfigurationRequest.php',
        'RatePAY\Model\Request\ConfirmationDeliver'     => $libraryModel . 'Request/ConfirmationDeliver.php',
        'RatePAY\Model\Request\PaymentChange'           => $libraryModel . 'Request/PaymentChange.php',
        'RatePAY\Model\Request\PaymentInit'             => $libraryModel . 'Request/PaymentInit.php',
        'RatePAY\Model\Request\PaymentQuery'            => $libraryModel . 'Request/PaymentQuery.php',
        'RatePAY\Model\Request\PaymentRequest'          => $libraryModel . 'Request/PaymentRequest.php',
        'RatePAY\Model\Request\PaymentConfirm'          => $libraryModel . 'Request/PaymentConfirm.php',
        'RatePAY\Service\Util'                          => 'pi_ratepay/library/src/Service/Util.php',
        'RatePAY\Service\DeviceFingerprint'             => 'pi_ratepay/library/src/Service/DeviceFingerprint.php',
        'RatePAY\Service\LanguageService'               => 'pi_ratepay/library/src/Service/LanguageService.php',
        'RatePAY\Service\CommunicationService'          => 'pi_ratepay/library/src/Service/CommunicationService.php',
        'RatePAY\Service\SimpleXmlExtended'             => 'pi_ratepay/library/src/Service/SimpleXmlExtended.php',
        'RatePAY\Service\ValidateGatewayResponse'       => 'pi_ratepay/library/src/Service/ValidateGatewayResponse.php',
        'RatePAY\Service\XmlBuilder'                    => 'pi_ratepay/library/src/Service/XmlBuilder.php',
        'RatePAY\Model\Response\ProfileRequest'         => $libraryModel . 'Response/ProfileRequest.php',
        'RatePAY\Model\Response\AbstractResponse'       => $libraryModel . 'Response/AbstractResponse.php',
        'RatePAY\Model\Response\CalculationRequest'     => $libraryModel . 'Response/CalculationRequest.php',
        'RatePAY\Model\Response\ConfigurationRequest'   => $libraryModel . 'Response/ConfigurationRequest.php',
        'RatePAY\Model\Response\ConfirmationDeliver'    => $libraryModel . 'Response/ConfirmationDeliver.php',
        'RatePAY\Model\Response\PaymentChange'          => $libraryModel . 'Response/PaymentChange.php',
        'RatePAY\Model\Response\PaymentInit'            => $libraryModel . 'Response/PaymentInit.php',
        'RatePAY\Model\Response\PaymentQuery'           => $libraryModel . 'Response/PaymentQuery.php',
        'RatePAY\Model\Response\PaymentRequest'         => $libraryModel . 'Response/PaymentRequest.php',
        'RatePAY\Model\Response\PaymentConfirm'         => $libraryModel . 'Response/PaymentConfirm.php',
        'RatePAY\Model\Response\TraitTransactionId'         => $libraryModel . 'Response/TraitTransactionId.php',
        $librarySubModelContent . '\Additional'             => $librarySubModel . 'Content/Additional.php',
        $librarySubModelContent . '\Invoicing'              => $librarySubModel . 'Content/Invoicing.php',
        $librarySubModelContent . '\Payment'                => $librarySubModel . 'Content/Payment.php',
        $librarySubModelContent . '\ShoppingBasket'         => $librarySubModel . 'Content/ShoppingBasket.php',
        $librarySubModelContent . '\InstallmentCalculation' => $librarySubModel . 'Content/InstallmentCalculation.php',
        $librarySubModelContent . '\ShoppingBasket\Discount'=> $librarySubModel . 'Content/ShoppingBasket/Discount.php',
        $librarySubModelContent . '\ShoppingBasket\Items'   => $librarySubModel . 'Content/ShoppingBasket/Items.php',
        $librarySubModelContent . '\ShoppingBasket\Shipping'=> $librarySubModel . 'Content/ShoppingBasket/Shipping.php',
        $librarySubModelContent . '\ShoppingBasket\Items\Item'   => $librarySubModel . 'Content/ShoppingBasket/Items/Item.php',
        $librarySubModelContent . '\Payment\InstallmentDetails'  => $librarySubModel . 'Content/Payment/InstallmentDetails.php',
        $librarySubModelContent . '\InstallmentCalculation\CalculationRate'  => $librarySubModel . 'Content/InstallmentCalculation/CalculationRate.php',
        $librarySubModelContent . '\InstallmentCalculation\CalculationTime'  => $librarySubModel . 'Content/InstallmentCalculation/CalculationTime.php',
        $librarySubModelContent . '\InstallmentCalculation\Configuration'    => $librarySubModel . 'Content/InstallmentCalculation/Configuration.php',
        $librarySubModelContent . '\Customer\Addresses'         => $librarySubModel . 'Content/Customer/Addresses.php',
        $librarySubModelContent . '\Customer\BankAccount'       => $librarySubModel . 'Content/Customer/BankAccount.php',
        $librarySubModelContent . '\Customer\Contacts'          => $librarySubModel . 'Content/Customer/Contacts.php',
        $librarySubModelContent . '\Customer\Contacts\Phone'    => $librarySubModel . 'Content/Customer/Contacts/Phone.php',
        $librarySubModelContent . '\Customer\Addresses\Address' => $librarySubModel . 'Content/Customer/Addresses/Address.php',
        $librarySubModelContent . '\Customer'                   => $librarySubModel . 'Content/Customer.php',
        'RatePAY\Model\Request\TraitRequestContent'             => $libraryModel . 'Request/TraitRequestContent.php',
        'RatePAY\Model\Request\TraitRequestSubtype'             => $libraryModel . 'Request/TraitRequestSubtype.php'

    )
);
