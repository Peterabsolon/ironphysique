<?php

/**
* Cart
*/
class Cart extends Controller
{

  function __construct()
  {
    parent::construct();
  }

  /**
  * 1. Nákup tovaru:
  * 
  *   - 1. Class Wishlist - Permanentný košík viazaný na account => Class Wishlist
  *
  *   - 2. Insert
  *
  *   - 3. Delete
  *
  *   - 4. Clear
  *
  *   - 5. Save (registered users)
  *
  *   - 6. Proceed to checkout
  *
  *   - 7. Class Checkout - Address
  * 
  */

  /**
   * Inserts a product into the cart
   */
  public static function insert() 
  {
    $this->model->insert();
  }
}