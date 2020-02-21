<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConferencesController extends AbstractController
{
    /**
     * @Route("api/conferences", name="conferences")
     */
    public function index()
    {
        $data  = [
            'hydra:member' => [
                [
                    'id' => 2,
                    'city' => 'Paris',
                    'year' => '2020',
                    'isInternational' => false,
                    'slug' => "paris-2020"
                ],
                [
                    'id' => 1,
                    'city' => 'Amsterdam',
                    'year' => '2019',
                    'isInternational' => true,
                    'slug' => "paris-2019"
                ],
            ]
        ];

        return $this->json($data);
    }
}
