<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 3/5/2020
 * Time: 21:48
 */

namespace App\Controller\Setting\God;


use App\Entity\Setting\God\God;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GodController extends AbstractController
{
    public function listGod()
    {
        $gods = $this->getDoctrine()
            ->getRepository(God::class)
            ->findAll();

        return new Response(json_encode(array_map(function (God $god) {
            return [
                'id' => $god->getId(),
                'name' => $god->getName(),
                'nickname' => $god->getNickname(),
                'description' => $god->getDescription()
            ];
        }, $gods)));
    }

    public function getGod(int $godId)
    {
        $god = $this->getDoctrine()
            ->getRepository(God::class)
            ->find($godId);

        return new Response(json_encode([
            'id' => $god->getId(),
            'name' => $god->getName(),
            'nickname' => $god->getNickname(),
            'description' => $god->getDescription()
        ]));
    }

    public function createGod(Request $request)
    {
        $input = json_decode($request->getContent(), true);

        $entityManager = $this->getDoctrine()->getManager();

        $god = new God();
        $god->setName($input['name'])
            ->setNickname($input['nickname'])
            ->setDescription($input['description']);

        $entityManager->persist($god);

        $entityManager->flush();

        return new Response(json_encode([
            'id' => $god->getId(),
            'name' => $god->getName(),
            'nickname' => $god->getNickname(),
            'description' => $god->getDescription()
        ]));
    }

    public function updateGod()
    {
        
    }

    public function deleteGod()
    {

    }
}