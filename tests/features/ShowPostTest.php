<?php

class ShowPostTest extends FeatureTestCase
{
    
    function test_a_user_can_see_the_post_details()
    {
        //Having
    	$user = $this->defaultUser();	

        $post = factory(\App\Post::class)->make([
        		'title'	 => 'Este es el titulo del post',
        		'content'=> 'Este es el contenido del post'
        ]);

        $user->posts()->save($post);

        //When

        $this->visit(route('posts.show',$post))
        	 ->seeInElement('h1',$post->title)
        	 ->see($post->content)
        	 ->see($user->name); 
    }
}
