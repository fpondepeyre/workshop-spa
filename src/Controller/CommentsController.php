<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentsController extends AbstractController
{
    /**
     * @Route("api/comments", name="comments")
     */
    public function index()
    {
        $data  = [
            'hydra:member' => [
                [
                    'id' => 2,
                    'author' => 'Lorem',
                    'text' => 'lorem ipsum dolores...',
                    'email' => 'test@gmail.com',
                    'conference' => [
                        'id' => 2
                    ],
                    'photoFilename' => 'unsplash.jpg',
                ],
                [
                    'id' => 1,
                    'author' => 'Lorem',
                    'text' => 'lorem ipsum dolores...',
                    'email' => 'test@gmail.com',
                    'conference' => [
                        'id' => 1
                    ],
                    'photoFilename' => 'unsplash.jpg',
                ],
            ]
        ];

        return $this->json($data);
    }
}
