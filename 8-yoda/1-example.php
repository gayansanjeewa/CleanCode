<?php

class Order
{
    public function updateOrder()
    {
        // Typical conditional structure
        if ( $postType == 'post' ) {
            // do stuff
        }

        // This is a typo, since it should be '==' and not '='
        if ( $postType = 'post' ) {
            // do stuff
        }

        // Yoda conditions
        if ( 'post' == $postType ) {
            // do stuff
        }


        // Examples

        // This method should not use Yoda conditions
        // A typo here will produce a fatal error
        if ( getPostType() == 'post' ) {
            // do stuff
        }

        // This method should not use Yoda conditions
        // The expression is not checking for equality. And it'd be difficult to read
        if ( $numberOfPosts >= 5  ) {
            // do stuff
        }

        // This method should use Yoda conditions
        if ( $cartTotal != calculateTotal() ) {
            // do stuff
        }

        // This method should not use Yoda conditions
        // Inverting the order does not eliminate the effect of the typo because they are both variables
        if ( $postType == $post->postType ) {
            // do stuff
        }
    }
}