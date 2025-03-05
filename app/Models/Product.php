<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Establish a relationship between the product and a customer.
     *
     * This function defines a belongs-to relationship where a product belongs
     * to a single customer. This is useful for retrieving the customer
     * associated with a given product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
