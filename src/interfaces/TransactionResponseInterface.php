<?php
/**
 * TransactionResponseInterface
 *
 * @author      Abdul Mueid Akhtar <abdul.mueid@gmail.com>
 * @copyright   Copyright (c) Abdul Mueid akhtar
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/nelson-flores/mpesa-php-api
 */

namespace Flores\mpesa\interfaces;

/**
 * Interface TransactionResponseInterface
 * @package Flores\mpesa\interfaces
 */
interface TransactionResponseInterface
{
    /**
     * Returns the Response Code
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Returns the response description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Returns the TransactionID
     *
     * @return string
     */
    public function getTransactionID(): string;

    /**
     * Returns the Conversation ID
     *
     * @return string
     */
    public function getConversationID(): string;

    /**
     * Returns the Transaction Status from Query API
     *
     * @return string
     */
    public function getTransactionStatus(): string;

    /**
     * Returns the raw response from M-Pesa API
     *
     * @return string
     */
    public function getResponse(): string;
}