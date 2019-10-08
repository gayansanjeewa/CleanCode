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
        
        if ( getPostType() == 'post' ) {
            // do stuff
        }

        if ( $numberOfPosts >= 5  ) {
            // do stuff
        }

        if ( $postType == $post->postType ) {
            // do stuff
        }

        if ( $cartTotal != calculateTotal() ) {
            // do stuff
        }
    }
}