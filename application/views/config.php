<?php
require_once('./vendor/stripe-php-3.2.0/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_OAXgineo2uENG6w9eLvecItk",
  "publishable_key" => "pk_test_9KIsAQXM7cnrWGJPtVWFkX5t"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>