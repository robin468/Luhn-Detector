<?php
/**
 * This code is developed by Expedien, copying and using
 * without attribution and permission is strictly prohibited Reach out to
 * contact@expedien.in or visit www.expedien.in to view the legal details
 *
 * @author Robin Laha @ Expedien rlaha@expedien.in @since 29-11-2018
 * @copyright Copyright (c) 2018, Expedien
 */

namespace App\Transformers;

/**
 * Class LuhnResource
 *
 * @package App\Transformers
 */
class LuhnResource
{
    /**
     *
     * @return array
     *
     */
    public function toArray()
    {
        return [
            'number' => $this->number
        ];
    }
}
