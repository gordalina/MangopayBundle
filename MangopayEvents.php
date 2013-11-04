<?php

/*
 * This file is part of the MangopayBundle package.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mangopay-bundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gordalina\Bundle\MangopayBundle;

final class MangopayEvents
{
    /**
     * The CONTRIBUTION_COMPLETED event occurs when a contribution notification is received
     */
    const CONTRIBUTION_COMPLETED = 'gordalina.mangopay.contribution_completed';

    /**
     * The WITHDRAWAL_COMPLETED event occurs when a withdrawal notification is received
     */
    const WITHDRAWAL_COMPLETED = 'gordalina.mangopay.withdrawal_completed';

    /**
     * The REFUND_COMPLETED event occurs when a refund notification is received
     */
    const REFUND_COMPLETED = 'gordalina.mangopay.refund_completed';

    /**
     * The EXPENSE_COMPLETED event occurs when a expense notification is received
     */
    const EXPENSE_COMPLETED = 'gordalina.mangopay.expense_completed';

    /**
     * The TRANSFER_COMPLETED event occurs when a transfer notification is received
     */
    const TRANSFER_COMPLETED = 'gordalina.mangopay.transfer_completed';
}
